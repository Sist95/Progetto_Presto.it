<x-layout>

    <div class="row justify-content-center align-items-center text-center">
        <div class="col-12">
            <h1 class="display-4 mt-4">{{__('ui.Dett_articolo')}} {{ $article->title }}</h1>
        </div>
    </div>
    <div class="container cardMorph-inner mt-4">
    <div class="row justify-content-center py-4">
        <div class="col-12 col-lg-6">
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

    <div class="col-12 col-md-6 mb-3 d-flex flex-column justify-content-center align-items-center">
        <div class="text-center">
            <h2 class="display-5 mt-4 mt-lg-0"><span class="fw-bold">{{__('ui.Titolo')}}: </span>{{ $article->title }}</h2>
            <h3 class="fw-bold">{{__('ui.Prezzo')}}: {{ $article->price }} €</h3>
            <h4 class="fw-bold">{{__('ui.Descrizione')}}:</h4>
            <h5>{{ $article->description }}</h5>
        </div>
    </div>
  </div>
  </div>
</x-layout>
