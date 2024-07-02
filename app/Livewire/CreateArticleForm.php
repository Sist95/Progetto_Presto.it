<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;


class CreateArticleForm extends Component
{   
    use WithFileUploads;
    
    #[Validate('required', message:"Il titolo è richiesto.")]
    #[Validate('min:5', message:"Il titolo è troppo corto.")]
    public $title;

    #[Validate('required', message:"La descrizione è richiesta.")]
    #[Validate('min:10', message: "La descrizione è troppo corta.")]
    public $description;

    #[Validate('required', message: "Il prezzo è richiesto.")]
    #[Validate('numeric', message:"Il prezzo va separato con il punto.")]
    public $price;

    #[Validate('required', message: "Selezionare almeno una categoria.")]
    public $category;

    public $article;

    public $images = [];
    public $temporary_images;

    public function store(){
        $this->validate();
        $this->article = Article::create([
            'title'=>$this->title,
            'description'=>$this->description,
            'price'=>$this->price,
            'category_id'=>$this->category,
            'user_id'=>Auth::id(),


        ]);

        if (count($this->images) > 0){
            foreach ($this->images as $image) {
                $this->article->images()->create(['path'=> $image->store('images', 'public')]);
            }
        }

        session()->flash('success', 'Articolo creato correttamente');
        $this->cleanForm();

        $this->reset();
        session()->flash('success','Articolo creato correttamente');

    }


    public function render()
    {
        return view('livewire.create-article-form');
    }

    public function updatedTemporaryImages()
    {
        if ($this -> validate([
            'temporary_images.*'=> 'image|max:1024',
            'temporary_images'=> 'max:6'
        ])){
            foreach($this->temporary_images as $image){
                $this->images[] = $image;
            }
        }
    }

    public function removeImage($key)
    {
        if (in_array($key, array_keys($this->images))){
            unset($this->this->images[$key]);
        }
    }

    protected function cleanForm(){
        $this->title = '';
        $this->description = '';
        $this->category = '';
        $this->price = '';
        $this->images = [];

    }

}
