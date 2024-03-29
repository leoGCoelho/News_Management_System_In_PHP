<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ url('/home') }}" style="font-family: agency fb;">NewsUpdate</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/news') }}">Noticias</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/about') }}">Sobre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/news/create') }}">Adicionar</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-danger btn-outline my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
