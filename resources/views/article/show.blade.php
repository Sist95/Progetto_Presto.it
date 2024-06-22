<x-layout>
    
    <div class="row justify-content-center align-items-center text-center">
        <div class="col-12">
            <h1 class="display-4 mt-4">Dettaglio dell'articolo: {{ $article->title }}</h1>
        </div>
    </div>
    <div class="container cardMorph-inner mt-4">
    <div class="row justify-content-center py-5">
        <div class="col-12 col-md-6">
          <div id="carouselExample" class="carousel slide carousel-custom ms-2">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://picsum.photos/500" class="d-block w-100 rounded-4" alt="Immagine Casuale">
                    </div>
                    <div class="carousel-item">
                        <img src="https://picsum.photos/500" class="d-block w-100 rounded-4" alt="Immagine Casuale">
                    </div>
                    <div class="carousel-item">
                        <img src="https://picsum.photos/500" class="d-block w-100 rounded-4" alt="Immagine Casuale">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    
    <div class="col-12 col-md-6 mb-3 text-center">
        <h2 class="display-5"><span class="fw-bold">Titolo: </span>{{ $article->title }}</h2>
        <div class="d-flex flex-column justify-content-center h-75">
            <h3 class="fw-bold">Prezzo: {{ $article->price }} €</h3>
            <h4>Descrizione:</h4>
            <h5>{{ $article->description }}</h5>
        </div>
    </div>
  </div>
  </div>
</x-layout>
