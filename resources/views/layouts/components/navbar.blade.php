<nav class="navbar navbar-expand-lg bg-primary navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Seleksi LPSE</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav  ms-auto">
            @auth
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 Welcome, {{Auth::user()->name }}
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li>
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item">Logout</button>
                    </form>
                  </li>
                </ul>
              </li>
                @else
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/login">Login</a>
            </li>
            @endauth
        </ul>
      </div>
    </div>
  </nav>
