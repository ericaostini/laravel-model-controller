<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <h3 class="mx-3">Shop</h3>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRoutename() == 'home' ? 'active' : '' }}" aria-current="page"
                            href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Books</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRoutename() == 'movies.index' ? 'active' : '' }}"
                            href="{{ route('movies.index') }}">Movies</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


</header>
