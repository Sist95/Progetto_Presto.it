<form class="bg-body-tertiary shadow rounded p-5 my-5">

  <div class="mb-3">
    <label for="title" class="form-label">Titolo</label>
    <input type="text" class="form-control" id="title" wire:model="title">
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">Descrizione</label>
    <textarea id="description" cols="30" rows="10" class="form-control" wire:model="description"></textarea>
  </div>
  <div class="mb-3">
    <label class="form-label" for="price">Prezzo</label>  
    <input type="text" class="form-control" id="price" wire:model="price">
  </div>
  <div class="mb-3">
    <select class="form-control" id="category" wire:model="category">
        <option label disabled>Seleziona categoria</option>
        @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
    </select>
  </div>
  <div class="d-flex justify-content-center">
    <button type="submit" class="btn btn-primary">Crea</button>
  </div>
  
</form>
