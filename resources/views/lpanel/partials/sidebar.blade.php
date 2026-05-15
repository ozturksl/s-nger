<div class="d-none d-md-flex flex-column flex-shrink-0 p-3 text-dark bg-white min-vh-100 border-end sidebar-main"
    style="width: 280px;">

    <a href="/" class="d-flex align-items-center mb-3 text-dark text-decoration-none">
        <img src="{{ asset('site/assets/logo.png') }}" width="200" height="auto" class="ms-2">
    </a>
    <p class="fs-5 fw-bold ms-2">Yönetim Paneli</p>

    <ul class="nav nav-pills flex-column mb-auto pt-4" id="sidebar-list">
        <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link" aria-current="page">
                <i class="bi bi-house fs-4 fw-bold me-2"></i> Dashboard
            </a>
        </li>
        <li>
            <a href="{{ route('products') }}" class="nav-link">
                <i class="bi bi-cart fs-4 fw-bold me-2"></i> Ürün Yönetimi
            </a>
        </li>
        <li>
            <a href="#" class="nav-link">
                <i class="bi bi-file-earmark-text fs-4 fw-bold me-2"></i> İçerik Yönetimi
            </a>
        </li>
        <li>
            <a href="#" class="nav-link">
                <i class="bi bi-search fs-4 fw-bold me-2"></i> SEO Ayarları
            </a>
        </li>
        <li>
            <a href="#" class="nav-link">
                <i class="bi bi-person fs-4 fw-bold me-2"></i> Profil
            </a>
        </li>
    </ul>

    <div class="dropdown border-top pt-3 mt-auto">
        <a href="#" class="d-flex align-items-center text-dark text-decoration-none dropdown-toggle"
            id="dropdownDesktop" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="" width="32" height="32"
                class="rounded-circle me-2">
            <strong>Salih Öztürk</strong>
        </a>
        <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownDesktop">
            <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right me-2"></i>Çıkış Yap</a></li>
        </ul>
    </div>
</div>


<div class="d-flex d-md-none flex-column flex-shrink-0 bg-body-tertiary border-end" style="width: 4.5rem;">

    <a href="/" class="d-block p-3 link-body-emphasis text-decoration-none text-center" title="Ana Sayfa">
        <img src="{{ asset('site/assets/logo.png') }}" width="40" height="auto">
    </a>

    <ul class="nav nav-pills nav-flush flex-column mb-auto text-center" id="sidebar-list">
        <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link py-3 border-bottom rounded-0" title="Dashboard">
                <i class="bi bi-house fs-4"></i>
            </a>
        </li>
        <li>
            <a href="#" class="nav-link py-3 border-bottom rounded-0" title="Ürün Yönetimi">
                <i class="bi bi-cart fs-4"></i>
            </a>
        </li>
        <li>
            <a href="#" class="nav-link py-3 border-bottom rounded-0" title="İçerik Yönetimi">
                <i class="bi bi-file-earmark-text fs-4"></i>
            </a>
        </li>
        <li>
            <a href="#" class="nav-link py-3 border-bottom rounded-0" title="SEO Ayarları">
                <i class="bi bi-search fs-4"></i>
            </a>
        </li>
        <li>
            <a href="#" class="nav-link py-3 border-bottom rounded-0" title="Profil">
                <i class="bi bi-person fs-4"></i>
            </a>
        </li>
    </ul>

    <div class="dropdown border-top">
        <a href="#"
            class="d-flex align-items-center justify-content-center p-3 link-body-emphasis text-decoration-none dropdown-toggle"
            data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="mdo" width="28" height="28" class="rounded-circle">
        </a>
        <ul class="dropdown-menu text-small shadow">
            <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right me-2"></i>Çıkış Yap</a></li>
        </ul>
    </div>
</div>
