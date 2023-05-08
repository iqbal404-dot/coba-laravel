<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
        <a class="navbar-brand" href="/">PROJECT R3D</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link {{ ($judul === "Home") ? "active" : "" }}" aria-current="page" href="/">Beranda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($judul === "Tentang") ? "active" : "" }}" href="/about">Tentang</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($judul === "Produk") ? "active" : "" }}" href="/produk">Produk</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($judul === "Fasilitas") ? "active" : "" }}" href="/fasilitas">Fasilitas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($judul === "Blog") ? "active" : "" }}" href="/blog">Blog</a>
            </li>

            @auth
            <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ auth()->user()->username }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item">Logout</button>
                        </form>
                    </li>
                    </ul>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link {{ ($judul === "Login") ? "active" : "" }}" href="/login"><i class="fa-solid fa-right-to-bracket"></i> Login</a>
                </li>  
            @endauth
            </ul>
        </div>
        </div>
</nav>