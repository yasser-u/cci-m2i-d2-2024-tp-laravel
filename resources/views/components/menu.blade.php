<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark" aria-label="Main navigation">
    <div class="container-fluid">
      <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="@route('accueil')">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="@route('associates.index')">Associates</a>
          </li>
          <li class="nav-item">
            {{-- <a class="nav-link" href="@route('associates.index')">Cusomers</a> --}}
          </li>
        </ul>
      </div>
    </div>
</nav>