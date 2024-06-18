<nav class="navbar navbar-expand-lg primary-bg mb-2">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">{{env('APP_NAME')}}</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          @auth
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ciao, {{auth()->user()->name}}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#" onclick="
            event.preventDefault();
            getElementById('form-logout').submit();
            ">Log out</a></li>
            <form id="form-logout" class="d-none" method="POST" action="/logout">
              @csrf
            </form>
          </ul>
          @else
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Ospite</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item d-flex align-items-center" href="/login">Accedi</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item d-flex align-items-center" href="/register">Registrati</a></li>
          </ul>
          @endauth
          </li>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Cerca" aria-label="Search">
            <button class="btn btn btn-outline-dark" type="submit">Cerca</button>
          </form>
      </ul>
    </div>
  </div>
</nav>