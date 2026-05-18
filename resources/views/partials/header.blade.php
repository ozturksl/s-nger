<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3 fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('storage/seo/' . $seoData->seo_icon) }}" class="img-fluid" alt="Logo">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto gap-lg-4">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Anasayfa</a></li>
                <li class="nav-item"><a class="nav-link" href="#services-sec">Hizmetler</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">Hakkımızda</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('product') }}">Ürünler</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">İletişim</a></li>
            </ul>

            <form class="d-flex align-items-center justify-content-center search-form" role="search">
                <input class="form-control search-input" type="search" placeholder="Ara..." aria-label="Ara">
            </form>
        </div>
    </div>
</nav>
