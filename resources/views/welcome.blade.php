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
    </div>
</x-layout>