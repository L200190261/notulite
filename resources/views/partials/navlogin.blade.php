<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
      <a class="navbar-brand" href="/">NOTULENSI</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a href="/login" class="nav-link {{ ($active === 'login') ? 'active' : ''}}"><i class="bi bi-box-arrow-right"></i> Login</a>
          </li>
        </ul>
        {{-- <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a href="/login" class="nav-link {{ ($active === 'login') ? 'active' : ''}}"><i class="bi bi-box-arrow-right"></i> Logout</a>
            </li>
        </ul> --}}
      </div>
    </div>
  </nav>