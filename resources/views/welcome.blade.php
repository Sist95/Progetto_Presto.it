<x-layout>

    <div class="container-fluid text-center">
        <div class="row vh-100 justify-content-center align-items-center">
            @if(session()->has('message'))
             <div class="alert alert-success text-center shadow rounded w-50" role="alert">
                {{session('message')}}
             </div>
            @endif
            @if(session()->has('errorMessage'))
             <div class="alert alert-danger text-center shadow rounded w-50" role="alert">
                {{session('errorMessage')}}
              </div>
            @endif 
        <div class="col-12">
           
                <h1 class="display-1">{{env('APP_NAME')}}</h1>
                <div class="d-flex justify-content-center my-3">
                    @auth
                        <a class="buttonCustomPrimary text-decoration-none" href="{{route('create.article')}}">Inserisci un annuncio</a>
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
                <h3 class="text-center">Non sono ancora presenti annunci</h3>
            </div>
        @endforelse
        </div>
    </div>
    
</x-layout>