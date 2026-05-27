<footer class="bg-dark text-white py-5">
    <div class="container-fluid px-3 px-lg-5">
        <div class="row g-4 justify-content-lg-between text-center text-lg-start">

            <div class="col-lg-3 col-12 footer-first">
                <img src="{{ asset('storage/seo/' . $seoData->seo_icon) }}" class="img-fluid d-block mx-auto mx-lg-0"
                    alt="Logo">
                <p class="text-white-50 mt-3small">Uzman kadromuzla Ankara'da dikiş makinesi tamiri, periyodik bakımı ve
                    yedek parça desteği sağlarken, en iyi markaların sıfır ve ikinci el makine satışı ile
                    hizmetinizdeyiz.</p>
                <ul class="d-flex gap-3 icons p-0 justify-content-center justify-content-lg-start mt-4 list-unstyled">
                    <li><a href="https://wa.me/90{{ $content->ct_number1 }}" target="_blank"
                            class="opacity-75 opacity-100-hover"><i class="bi bi-whatsapp fs-5"></i></a>
                    </li>
                    <li><a href="{{ $content->ct_instagram }}" target="_blank" class="opacity-75 opacity-100-hover"><i
                                class="bi bi-instagram fs-5"></i></a>
                    </li>
                    <li><a href="{{ $content->ct_linkedin }}" target="_blank" class="opacity-75 opacity-100-hover"><i
                                class="bi bi-linkedin fs-5"></i></a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-2 col-12 links">
                <h6 class="text-white fw-bold mb-3">KISA LİNKLER</h6>
                <ul class="p-0 list-unstyled lh-lg">
                    <li><a href="{{ route('home') }}" class="text-decoration-none">Ana Sayfa</a></li>
                    <li><a href="#" class="text-decoration-none">Ürünler</a></li>
                    <li><a href="{{ route('about') }}" class="text-decoration-none">Hakkımızda</a></li>
                    <li><a href="{{ route('contact') }}" class="text-decoration-none">İletişim</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-12 links">
                <h6 class="text-white fw-bold mb-3">ÜRÜNLER</h6>
                <ul class="p-0 list-unstyled lh-lg">
                    <li><a class="text-decoration-none" href="#">Dikiş Makinası</a></li>
                    <li><a class="text-decoration-none" href="#">İğneler</a></li>
                    <li><a class="text-decoration-none" href="#">Makaslar</a></li>
                    <li><a class="text-decoration-none" href="#">Yedek Parça</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-12 footer-last text-break">
                <h6 class="text-white fw-bold mb-3">BİZE ULAŞIN</h6>
                <address class="text-secondary font-style-normal mb-3">
                    <div class="d-flex align-items-start mb-2">
                        <i class="bi bi-geo-alt-fill me-2 text-danger"></i>
                        <span>{{ $content->ct_address }}</span>
                    </div>
                    <a href="tel:+90{{ $content->ct_number1 }}"
                        class="text-secondary text-decoration-none d-block mb-2">
                        <i class="bi bi-telephone-fill me-2 text-danger"></i>+90{{ $content->ct_number1 }}
                    </a>
                    @if ($content->ct_number2)
                        <a href="tel:+90{{ $content->ct_number2 }}"
                            class="text-secondary text-decoration-none d-block mb-2">
                            <i class="bi bi-telephone-fill me-2 text-danger"></i>+90{{ $content->ct_number2 }}
                        </a>
                    @endif
                    <a href="mailto:{{ $content->ct_mail }}" class="text-secondary text-decoration-none d-block mb-0">
                        <i class="bi bi-envelope-fill me-2 text-danger"></i>{{ $content->ct_mail }}
                    </a>
                </address>
            </div>

        </div>
    </div>
</footer>
