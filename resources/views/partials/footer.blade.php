<footer>
    <div class="row bg-dark centerclass">
        <div class="col-lg-4 col-12 px-3 px-lg-4 footer-first">
            <img src="{{ asset('site/assets/logo.png') }}" class="img-fluid mt-4 ms-lg-3"
                style="max-width: 200px; height: auto;">
            <p class="text-white px-3 mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy</p>
                <ul class="d-flex gap-4 icons p-0 justify-content-center mt-5">
                <li><a href="#"><i class="bi bi-whatsapp fs-5"></i></a></li>
                <li><a href="#"><i class="bi bi-instagram fs-5"></i></a></li>
                <li><a href="#"><i class="bi bi-linkedin fs-5"></i></a></li>
            </ul>
        </div>
        <div class="col-lg-2 col-12 links">
            <ul class="mt-5 p-0">
                <li class="list-style-none lh-lg baslik">
                    <h6 class="lh-lg text-white fw-bold">KISA LİNKLER</h6>
                </li>
                <li class="list-style-none lh-lg"><a href="{{ route('home') }}" class="text-decoration-none"
                        href="#">Ana Sayfa</a></li>
                <li class="list-style-none lh-lg"><a href="#" class="text-decoration-none"
                        href="#">Ürünler</a></li>
                <li class="list-style-none lh-lg"><a href="{{ route('about') }}" class="text-decoration-none"
                        href="#">Hakkımızda</a></li>
                <li class="list-style-none lh-lg"><a class="text-decoration-none"
                        href="{{ route('contact') }}">İletişim</a></li>
            </ul>
        </div>
        <div class="col-lg-2 col-12 links">
            <ul class="mt-5 p-0">
                <li class="list-style-none lh-lg baslik">
                    <h6 class="lh-lg text-white fw-bold">ÜRÜNLER</h6>
                </li>
                <li class="list-style-none lh-lg"><a class="text-decoration-none" href="#">Dikiş Makinası</a></li>
                <li class="list-style-none lh-lg"><a class="text-decoration-none" href="#">İğneler</a></li>
                <li class="list-style-none lh-lg"><a class="text-decoration-none" href="#">Makaslar</a></li>
                <li class="list-style-none lh-lg"><a class="text-decoration-none" href="#">Yedek Parça</a></li>
            </ul>
        </div>
        <div class="col-lg-4 px-3 px-lg-4 col-12 footer-last">
           <h6 class="lh-lg text-white fw-bold mt-5">BİZE ULAŞIN</h6>
            <p class="text-white mt-3"><i class="bi bi-geo-alt-fill me-2"></i>Atatürk Bulvarı No:123, Çankaya, Ankara</p>
            <p class="text-white mt-2"><i class="bi bi-telephone-fill me-2"></i>+90 312 123 45 67</p>
            <p class="text-white mt-2"><i class="bi bi-envelope-fill me-2"></i>info@company.com</p>
        </div>
    </div>
</footer>
