<nav class="navbar fixed-top navbar-expand-lg mb-2 navMorph-inner">
  <div class="container-fluid m-0">
    <a class="navbar-brand" href="#">
      <img src="\img\LogoPresto.jpg" alt="Logo" width="50vh" height="50vh">
    </a>
    <a class="navbar-brand" href="/">{{env('APP_NAME')}}</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link @if(Route::is('homepage')) active @endif" aria-current="page" href="{{route('homepage')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('article.index')}}">Annunci</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Categorie
            </a>
            <ul class="dropdown-menu scrollMorph-inner">
            @foreach ($categories as $category )
                <li><a class="dropdown-item text-capitalize" href="{{route('byCategory', ['category'=>$category])}}">{{$category->name}}</a></li>
                @if(!$loop->last)
                <hr class="dropdown-divider">
                @endif
            @endforeach
            </ul>
          </li>
        <li class="nav-item dropdown">
          @auth
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ciao, {{auth()->user()->name}}
          </a>
          <ul class="dropdown-menu">
            <!-- <li><a class="dropdown-item" href="#">Dashboard</a></li>
            <li><hr class="dropdown-divider"></li> -->
            <li><a class="dropdown-item" href="{{route('create.article')}}">Inserisci annuncio</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#" onclick="
            event.preventDefault();
            getElementById('form-logout').submit();
            ">Log out</a></li>
            <form id="form-logout" class="d-none" method="POST" action="{{route('logout')}}">
              @csrf
            </form>
          </ul>

          @else
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Ospite</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item d-flex align-items-center" href="{{route('login')}}">Accedi</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item d-flex align-items-center" href="{{route('register')}}">Registrati</a></li>
          </ul>
          @endauth
          </li>
          {{-- <form class="d-flex position-absolute bottom-2 end-0" role="search">
            <input class="form-control me-0" type="search" placeholder="Cerca" aria-label="Search">
            <button class="buttonCustomWarning text-white ms-1 me-3" type="submit">Cerca</button>
          </form> --}}
      </ul>
    </div>
  </div>
</nav>
