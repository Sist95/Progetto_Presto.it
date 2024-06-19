<x-layout>
    <div class="container-fluid text-center">
        <div class="row vh-100 justify-content-center align-items-center">
            <div class="col-12">
                <h1 class="display-1">{{env('APP_NAME')}}</h1>
                <div class="my-3">
                    @auth
                        <a class="btn btn-primary" href="{{route('create.article')}}">Inserisci un annuncio</a>
                    @endauth
                </div>
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
        @forelse($articles as $article)
            <div class="col-12 col-md-3">
                <x-card :article="$article" />
            </div>
        @empty
            <div class="col-12">
                <h3 class="text-center">Non sono presenti articoli</h3>
            </div>
        @endforelse
        </div>
    </div>
    
</x-layout>