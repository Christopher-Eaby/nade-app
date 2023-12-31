<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/admin">EZ Nades</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item @if(str_contains(url()->current(), 'nades')) active @endif">
        <a class="nav-link" href="/admin/nades">Nades</a>
      </li>
      <li class="nav-item @if(str_contains(url()->current(), 'nades')) active @endif">
        <a class="nav-link" href="/nades">View site</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" method="GET" action="/admin/nades">
      <input class="form-control mr-sm-2" type="search" name="query" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>