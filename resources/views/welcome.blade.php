<x-layout>
    <section class="hero rounded-5 rounded-top-0 py-5">
        <div class="row">
        <div class="col-6 px-5">
            <p >{{__('ui.hello')}} </p>

         </div>
          <div class="col-6">
            <h2>{{env('APP_NAME')}}</h2>
        </div>
          </div>
          <a href="{{route('login')}}" class="buttonAccedi px-5 text-decoration-none" >{{__('ui.Accedi')}}
            <svg fill="currentColor" viewBox="0 0 24 24" class="icon">
              <path clip-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm4.28 10.28a.75.75 0 000-1.06l-3-3a.75.75 0 10-1.06 1.06l1.72 1.72H8.25a.75.75 0 000 1.5h5.69l-1.72 1.72a.75.75 0 101.06 1.06l3-3z" fill-rule="evenodd"></path>
            </svg>
          </button></a>

        <div class="waves"></div>
      </section>

    <div class="container-fluid text-center">
        <div class="row justify-content-center align-items-center">
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
        <div class="col-10">

                {{-- <h1 class="display-1">{{env('APP_NAME')}}</h1> --}}
                <div class="d-flex justify-content-center my-3 mb-5">
                    @auth
                        <a class="buttonCustomPrimary text-decoration-none" href="{{route('create.article')}}">{{__('ui.Inserisci annuncio')}}</a>
                    @endauth
                </div>
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
        @forelse($articles as $article)
            <div class="col-12 col-md-6 col-xl-4">
                <x-card :article="$article" />
            </div>
        @empty
            <div class="col-12">
                <h3 class="text-center">{{__('ui.Annunci_non')}}</h3>
            </div>
        @endforelse
        </div>
    </div>

</x-layout>
