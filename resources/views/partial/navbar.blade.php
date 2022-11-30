<nav class="navbar navbar-expand-lg navbar-light fw-bold" style="background-color: #DFF6FF">
    <div class="container">
        <nav class="navbar navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="#">
                <img src="img/{{$image}}" width="60" height="60" class="d-inline-block align-text-top">
                </a>
                <div class="d-flex flex-column bd-highlight">
                    <h6 class="fw-bold">KEMAHASISWAAN</h6>
                    <h6 class="fw-bold">INSTITUT TEKNOLOGI DEL</h6>
                </div>
            </div>
        </nav>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Beranda") ? 'active' : "" }}" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Profil") ? 'active' : "" }}" href="/profil">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Berita") ? 'active' : "" }}" href="/berita">Berita</a>
                </li>
                <li class="nav-item">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle {{ ($title === "Layanan Kemahasiswaan") ? 'active' : "" }}" href="/layanan" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Layanan Kemahasiswaan
                                </a>

                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>                
                </li>
                <li class="nav-item">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle {{ ($title === "Organisasi Kemahasiswaan") ? 'active' : "" }}" href="/organisasi" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Organisasi Kemahasiswaan
                                </a>

                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>                
                </li>
                </li>
                <li class="nav-item mx-1 mt-4">                    
                    @if (Route::has('login'))
                        <div class="d-flex flex-column fixed top-0 right-0 px-4 py-4 sm:block">
                            @auth
                                <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                            @else
                                <a href="{{ route('login') }}" class="text-sm text-center text-gray-700 dark:text-gray-500 underline">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-n2 text-sm text-start align-baseline text-gray-700 dark:text-gray-500 underline">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>