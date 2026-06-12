<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <i class="bi bi-pc-display me-2"></i>Compu<span>Store</span> CR
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto ms-3">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                        <i class="bi bi-house-door me-1"></i>Inicio
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('articulos.index') ? 'active' : '' }}" href="{{ route('articulos.index') }}">
                        <i class="bi bi-grid me-1"></i>Productos
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('articulos.create') ? 'active' : '' }}" href="{{ route('articulos.create') }}">
                        <i class="bi bi-plus-circle me-1"></i>Nuevo
                    </a>
                </li>
            </ul>
            <form class="d-flex gap-2" action="{{ route('articulos.buscar') }}" method="GET">
                <input class="search-box form-control" type="search" name="q" placeholder="Buscar productos..." value="{{ $query ?? '' }}">
                <button class="btn btn-search" type="submit"><i class="bi bi-search"></i></button>
            </form>
        </div>
    </div>
</nav>
