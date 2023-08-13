<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/nades">GO Nades</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item @if(str_contains(url()->current(), 'nades')) active @endif">
        <a class="nav-link" href="/nades">Nades</a>
      </li>
      @if(session()->has('user.admin'))
        @if(session()->get('user.admin'))
          <li class="nav-item @if(str_contains(url()->current(), 'admin')) active @endif">
            <a class="nav-link" href="/admin">Admin</a>
          </li>
        @endif
      @endif
    </ul>
    <form class="form-inline my-2 my-lg-0" method="GET" action="/nades">
      <input class="form-control mr-sm-2" type="search" name="query" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>