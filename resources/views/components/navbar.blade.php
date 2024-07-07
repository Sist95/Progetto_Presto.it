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
              <li><a class="dropdown-item fw-semibold" href="{{route('revisor.index')}}">{{__('ui.area_revisore')}}
                      <span
                      class="position-absolute top-20 start-100 translate-middle badge rounded-pill bg-danger">
                      {{\App\Models\Article::toBeRevisedCount()}}
                      </span>
                  </a>
              </li>
              <li><hr class="dropdown-divider"></li>
            @endif
            <li><a class="dropdown-item fw-semibold" href="{{route('create.article')}}">{{__('ui.Inserisci annuncio')}}</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item fw-semibold" href="#" onclick="
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

          <div class="dropdown">
            <button type="button " class="btn language_button dropdown-toggle " data-bs-toggle="dropdown">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-globe-americas" viewBox="0 0 16 16">
                <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0M2.04 4.326c.325 1.329 2.532 2.54 3.717 3.19.48.263.793.434.743.484q-.121.12-.242.234c-.416.396-.787.749-.758 1.266.035.634.618.824 1.214 1.017.577.188 1.168.38 1.286.983.082.417-.075.988-.22 1.52-.215.782-.406 1.48.22 1.48 1.5-.5 3.798-3.186 4-5 .138-1.243-2-2-3.5-2.5-.478-.16-.755.081-.99.284-.172.15-.322.279-.51.216-.445-.148-2.5-2-1.5-2.5.78-.39.952-.171 1.227.182.078.099.163.208.273.318.609.304.662-.132.723-.633.039-.322.081-.671.277-.867.434-.434 1.265-.791 2.028-1.12.712-.306 1.365-.587 1.579-.88A7 7 0 1 1 2.04 4.327Z"/>
              </svg>
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#"> <x-locale lang="it"/></a></li>
              <li><a class="dropdown-item" href="#"><x-locale lang="en"/></a></li>
              <li><a class="dropdown-item" href="#"><x-locale lang="es"/></a></li>
            </ul>
          </div>


         
          
          
          <form class="d-flex position-absolute bottom-2 end-0" role="search" action="{{route('article.search')}}" method="GET">
            <input class="form-control buttonSearch me-0" type="search" name="query" placeholder="{{__('ui.Cerca')}}" aria-label="Search" >
            <button class="buttonCustomWarning ms-1 me-3" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search text-dark" viewBox="0 0 16 16">
              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
            </svg></button>
          </form>
      </ul>

    </div>
  </div>
</nav>
