<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class CreateArticleForm extends Component
{
    
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

    public function store(){
        $this->validate();
        $this->article = Article::create([
            'title'=>$this->title,
            'description'=>$this->description,
            'price'=>$this->price,
            'category_id'=>$this->category,
            'user_id'=>Auth::id(),


        ]);

        $this->reset();
        session()->flash('success','Articolo creato correttamente');

    }


    public function render()
    {
        return view('livewire.create-article-form');
    }


}
