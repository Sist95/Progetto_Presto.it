<x-layout>

    <div class="row justify-content-center align-items-center text-center">
        @if(session()->has('message_accepted'))
            <div class="alert alert-success text-center shadow rounded w-50" role="alert">
                {{session('message_accepted')}}
            </div>
        @endif
        @if(session()->has('message_rejected'))
            <div class="alert text-danger text-center shadow rounded w-50" role="alert">
                {{session('message_rejected')}}
            </div>
        @endif
        <div class="col-12">
            <h1 class="display-4 mt-4">Revisor dashboard</h1>
        </div>
        <div class="container">
            <a href="{{route('revisor.show')}}" class="mt-3 mb-3 buttonCustomPrimary text-decoration-none">Articoli da revisionare</a>
        </div>
    </div>
    @if($article_to_check)
        <div class="container cardMorph-inner mt-4">
            <div class="row justify-content-center py-5">
                <div class="col-12 col-md-6">
                    <div id="carouselExample" class="carousel slide carousel-custom ms-2">
                        <div class="carousel-inner">
                            @for($i = 0; $i < 6; $i ++)
                                <div class="carousel-item {{ $i == 0 ? 'active' : '' }}">
                                    <img src="https://picsum.photos/500" class="d-block w-100 rounded-4" alt="Immagine segnaposto">
                                </div>
                            @endfor
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
                    <h2 class="display-5 fw-bold">{{$article_to_check->title}}</h2>
                    <div class="d-flex flex-column justify-content-center h-75">
                        <h3>Autore: {{$article_to_check->user->name}}</h3>
                        <h4 class="fw-bold">{{$article_to_check->price}} €</h4>
                        <h4 class="text-muted"># {{$article_to_check->category->name}}</h4>
                        <p class="h6">{{$article_to_check->description}}</p>
                    </div>
                    <div class="d-flex pb-4 justify-content-around">
                        <form action="{{route('accept',['article'=> $article_to_check])}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button class="buttonCustomSuccess py-2 px-5">Accetta</button>
                        </form>
                        <form action="{{route('reject',['article'=> $article_to_check])}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button class="buttonCustomDanger py-2 px-5">Rifiuta</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="row justify-content-center align-items-center text-center">
            <div class="col-12">
                <h1 class="display-4">
                    Nessun articolo da revisionare
                </h1>
                <a href="{{route('homepage')}}" class="mt-5 buttonCustomPrimary text-decoration-none">Torna alla homepage</a>
            </div>
        </div>
    @endif
</x-layout>
