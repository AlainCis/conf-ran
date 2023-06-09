<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('auth.login') }}">Accueil</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          @auth
            @if (Auth::user()->role=='admin')
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('conference.create') }}">Ajouter Une Conférence</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('reservation.index') }}">Gestion des Réservations</a>
              </li>
            @endif  
          @endauth
          <li class="nav-item">
            <a class="nav-link" href="{{ route('conference.index') }}" tabindex="-1" aria-disabled="true">Toutes les conférences</a>
          </li>
        </ul>
        <form action="{{ route('auth.logout') }}" method="POST" class="d-flex">
          @csrf
          @method("DELETE")
          @auth
            <label class="form-control me-2"><b>{{ Auth::user()->name }}</b></label>
            <button type="sub
            " class="btn btn-outline-success" type="submit">Déconnexion</button>
          @endauth
        </form>
      </div>
    </div>
  </nav>