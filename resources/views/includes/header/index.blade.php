<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">EZ Nades</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item @if(str_contains(url()->current(), 'nades')) active @endif">
        <a class="nav-link" href="/nades">Nades</a>
      </li>
      <li class="nav-item @if(str_contains(url()->current(), 'login')) active @endif">
        <a class="nav-link" href="/login">Login</a>
      </li>
      <li class="nav-item @if(str_contains(url()->current(), 'admin')) active @endif">
        <a class="nav-link" href="/admin">Admin</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>