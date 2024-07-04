<nav class="navbar fixed-top navbar-expand-lg primary-bg mb-5 navMorph-inner">
  <div class="container-fluid m-0">
    <a class="navbar-brand" href="{{route('homepage')}}">
      <img src="\img\LogoPresto.png" alt="Logo" width="60vh" height="50vh">
    </a>
    {{-- <a class="navbar-brand" href="/">{{env('APP_NAME')}}</a> --}}
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link fw-semibold @if(Route::is('homepage')) active @endif" aria-current="page" href="{{route('homepage')}}">Presto.it</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-semibold" href="{{route('article.index')}}">{{__('ui.annunci')}}</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle fw-semibold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{__('ui.Categorie')}}
            </a>
            <ul class="dropdown-menu scrollMorph-inner">
            @foreach ($categories as $category )
                <li><a class="dropdown-item text-capitalize fw-semibold" href="{{route('byCategory', ['category'=>$category])}}">{{__("ui.$category->name")}}</a></li>
                @if(!$loop->last)
                <hr class="dropdown-divider">
                @endif
            @endforeach
            </ul>
          </li>
        <li class="nav-item dropdown">
          @auth
          <a class="nav-link dropdown-toggle fw-semibold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{__('ui.Ciao')}}{{auth()->user()->name}}
          </a>
          <ul class="dropdown-menu scrollMorph-inner">
            <!-- <li><a class="dropdown-item" href="#">Dashboard</a></li>
            <li><hr class="dropdown-divider"></li> -->
            @if(Auth::user()->is_revisor)
              <li><a class="dropdown-item" href="{{route('revisor.index')}}">{{__('ui.area_revisore')}}
                      <span
                      class="position-absolute top-20 start-100 translate-middle badge rounded-pill bg-danger">
                      {{\App\Models\Article::toBeRevisedCount()}}
                      </span>
                  </a>
              </li>
              <li><hr class="dropdown-divider"></li>
            @endif
            <li><a class="dropdown-item" href="{{route('create.article')}}">{{__('ui.Inserisci annuncio')}}</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#" onclick="
            event.preventDefault();
            getElementById('form-logout').submit();
            ">{{__('ui.Log out')}}</a></li>
            <form id="form-logout" class="d-none" method="POST" action="{{route('logout')}}">
              @csrf
            </form>
          </ul>

          @else
          <a class="nav-link dropdown-toggle fw-semibold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{__('ui.Ospite')}}</a>
          <ul class="dropdown-menu scrollMorph-inner">
            <li><a class="dropdown-item d-flex align-items-center fw-semibold" href="{{route('login')}}">{{__('ui.Accedi')}}</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item d-flex align-items-center fw-semibold" href="{{route('register')}}">{{__('ui.Registrati')}}</a></li>
          </ul>
          @endauth
          </li>
          <x-locale lang="it"/>
          <x-locale lang="en"/>
          <x-locale lang="es"/>
          <form class="d-flex position-absolute bottom-2 end-0" role="search" action="{{route('article.search')}}" method="GET">
            <input class="form-control buttonSearch me-0" type="search" name="query" placeholder="{{__('ui.Cerca')}}" aria-label="Search" >
            <button class="buttonCustomWarning ms-1 me-3" type="submit">{{__('ui.Cerca')}}</button>
          </form>
      </ul>

    </div>
  </div>
</nav>
