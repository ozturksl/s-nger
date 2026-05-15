<footer>
    <div class="row bg-dark py-5 px-3 px-lg-5 justify-content-lg-between text-center text-lg-start">
        
        <div class="col-lg-3 col-12 mb-4 mb-lg-0 footer-first">
            <img src="{{ asset('site/assets/logo.png') }}" class="img-fluid d-block mx-auto mx-lg-0"
                style="max-width: 200px; height: auto;">
            <p class="text-white mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy</p>
            <ul class="d-flex gap-4 icons p-0 justify-content-center justify-content-lg-start mt-4 list-unstyled">
                <li><a href="#" class="text-white"><i class="bi bi-whatsapp fs-5"></i></a></li>
                <li><a href="#" class="text-white"><i class="bi bi-instagram fs-5"></i></a></li>
                <li><a href="#" class="text-white"><i class="bi bi-linkedin fs-5"></i></a></li>
            </ul>
        </div>

        <div class="col-lg-2 col-12 mb-4 mb-lg-0 links">
            <ul class="p-0 list-unstyled">
                <li class="lh-lg baslik">
                    <h6 class="lh-lg text-white fw-bold">KISA LİNKLER</h6>
                </li>
                <li class="lh-lg"><a href="{{ route('home') }}" class="text-decoration-none">Ana Sayfa</a></li>
                <li class="lh-lg"><a href="#" class="text-decoration-none">Ürünler</a></li>
                <li class="lh-lg"><a href="{{ route('about') }}" class="text-decoration-none">Hakkımızda</a></li>
                <li class="lh-lg"><a href="{{ route('contact') }}" class="text-decoration-none">İletişim</a></li>
            </ul>
        </div>

        <div class="col-lg-2 col-12 mb-4 mb-lg-0 links">
            <ul class="p-0 list-unstyled">
                <li class="lh-lg baslik">
                    <h6 class="lh-lg text-white fw-bold">ÜRÜNLER</h6>
                </li>
                <li class="lh-lg"><a class="text-decoration-none" href="#">Dikiş Makinası</a></li>
                <li class="lh-lg"><a class="text-decoration-none" href="#">İğneler</a></li>
                <li class="lh-lg"><a class="text-decoration-none" href="#">Makaslar</a></li>
                <li class="lh-lg"><a class="text-decoration-none" href="#">Yedek Parça</a></li>
            </ul>
        </div>

        <div class="col-lg-3 col-12 footer-last">
            <h6 class="lh-lg text-white fw-bold">BİZE ULAŞIN</h6>
            <p class="text-white mt-3"><i class="bi bi-geo-alt-fill me-2 text-danger"></i>Atatürk Bulvarı No:123, Çankaya, Ankara</p>
            <p class="text-white mt-2"><i class="bi bi-telephone-fill me-2 text-danger"></i>+90 312 123 45 67</p>
            <p class="text-white mt-2"><i class="bi bi-envelope-fill me-2 text-danger"></i>info@company.com</p>
        </div>

    </div>
</footer>