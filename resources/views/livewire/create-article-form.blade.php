@if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif

<form class="shadow rounded p-5 my-5 cardMorph-inner" wire:submit="store">

    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="cardInputMorph form-control @error('title') is-invalid @enderror" id="title"
            wire:model.blur="title">
        @error('title')
            <p class="fst-italic text-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <textarea id="description" cols="30" rows="10" class="cardInputMorph form-control @error('description') is-invalid @enderror"
            wire:model.blur="description"></textarea>
        @error('description')
            <p class="fst-italic text-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label" for="price">Prezzo</label>
        <input type="text" class="cardInputMorph form-control @error('price') is-invalid @enderror" id="price"
            wire:model.blur="price">
        @error('price')
            <p class="fst-italic text-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-3">
        <select class="cardInputMorph form-control @error('category') is-invalid @enderror" id="category" wire:model.blur="category">
            <option label disabled>Seleziona categoria</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        @error('category')
            <p class="fst-italic text-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="d-flex justify-content-center">
        <button type="submit" class="buttonCustomPrimary">Crea</button>
    </div>

</form>
