@extends('layouts.layout')

@section('title')
    İletişim
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('site/css/main.css') }}">
@endsection

@section('content')
    <section class="overflow-hidden">
        <div class="container contact-items">
            <div class="row py-4 py-lg-5 px-3 g-4">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="ratio ratio-16x9 h-100 min-vh-50">
                        @foreach ($content as $contents)
                        <iframe
                            src="{{ $contents->ct_harita }}"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                            class="rounded-4"></iframe>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="rounded-4 bg-light p-4 contact-links h-100">
                        <h1 class="fw-bold pb-3 fs-2">İletişim Kanallarımız</h1>
                        <ul class="ps-0 mb-0">
                                <li class="mb-3"><a href="#"
                                        class="d-flex align-items-start text-dark h6 text-wrap"><i
                                            class="bi bi-geo-alt-fill text-danger me-2 mt-1"></i><span>{{ $contents->ct_address }}</span></a>
                                </li>
                                <li class="mb-3"><a href="tel:+90{{ $contents->ct_number1 }}"
                                        class="d-flex align-items-center text-dark h6"><i
                                            class="bi bi-telephone-fill text-danger me-2"></i><span>+90{{ $contents->ct_number1 }}</span></a>
                                </li>
                                <li class="mb-3"><a href="tel:+90{{ $contents->ct_number2 }}"
                                        class="d-flex align-items-center text-dark h6"><i
                                            class="bi bi-telephone-fill text-danger me-2"></i><span>+90{{ $contents->ct_number2 }}</span></a>
                                </li>
                                <li class="mb-0"><a href="mailto:{{ $contents->ct_mail }}"
                                        class="d-flex align-items-center text-dark h6 text-break"><i
                                            class="bi bi-envelope-fill text-danger me-2"></i><span>{{ $contents->ct_mail }}</span></a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-4 py-lg-5 my-4 my-lg-5 testimonials-section overflow-hidden">
        <div class="container">
            <h1 class="text-center fw-bold testimonials-title">MÜŞTERI YORUMLARI</h1>
            <p class="text-center testimonials-subtitle text-muted">Müşterilerimizin deneyimlerini dinleyin</p>
            <div class="swiper testimonialsSwiper mt-4 mt-lg-5">
                <div class="swiper-wrapper">
                    <div class="swiper-slide p-2">
                        <div class="testimonial-card h-100 p-4 border rounded-3 bg-white shadow-sm">
                            <div class="testimonial-header mb-3">
                                <div class="stars text-warning">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <p class="testimonial-text small text-secondary">Hayri Bey bizi bugün misafir etti bayisine.
                                Her şeyden önce arızayı doğru tespit etti ve doğru müdahalede bulundu. Servislerin bence en
                                büyük sıkıntılarından birisi çok basit bir işleme bile bugün bırak bir hafta sonra gel
                                demeleridir. Makinemizin arızası, anında onarıldı ve bize teslim edildi.
                                Biz kendisinin hassasiyeti ve güler yüzü için çok teşekkür ederiz. Başarılarını dileriz.</p>
                            <div class="testimonial-footer mt-4">
                                <h6 class="testimonial-name fw-bold mb-0">Mehtap Güneş</h6>
                                <p class="testimonial-role small text-muted mb-0">Müşteri</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide p-2">
                        <div class="testimonial-card h-100 p-4 border rounded-3 bg-white shadow-sm">
                            <div class="testimonial-header mb-3">
                                <div class="stars text-warning">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <p class="testimonial-text small text-secondary">Benim 38 yıldır kullandığım makinemi birden
                                hiç bir aksamı çalışmadı. Hayri beye götürdüm tüm içi paslanmış. Tertemiz çalışır vaziyette
                                makul bir fiyata teslim etti. Hatta söylemediğim halde denge sallanma sorununu da gidermiş.
                                Teşekkürler</p>
                            <div class="testimonial-footer mt-4">
                                <h6 class="testimonial-name fw-bold mb-0">Şeniz Coşkun</h6>
                                <p class="testimonial-role small text-muted mb-0">Müşteri</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide p-2">
                        <div class="testimonial-card h-100 p-4 border rounded-3 bg-white shadow-sm">
                            <div class="testimonial-header mb-3">
                                <div class="stars text-warning">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <p class="testimonial-text small text-secondary">İlk makinemi aldığımda tecrübesiz olduğum için
                                sabırla anlattı nasıl kullanacağımı,telefonla dahi sorunumu çözmeye çalıştı olmadı. Artık
                                acemi değilim overlok makinemide aldım. Hayri beye çok teşekkür ederim .hem düzgün satıcı
                                hemde teknik serviste başarılı .</p>
                            <div class="testimonial-footer mt-4">
                                <h6 class="testimonial-name fw-bold mb-0">Ayfer Gündüzlü</h6>
                                <p class="testimonial-role small text-muted mb-0">Müşteri</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide p-2">
                        <div class="testimonial-card h-100 p-4 border rounded-3 bg-white shadow-sm">
                            <div class="testimonial-header mb-3">
                                <div class="stars text-warning">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <p class="testimonial-text small text-secondary">Tamire götürdüğümüz makinemizi gayet başarılı
                                tamir etti yeni bir ürün de aldık her türlü sorumuzu cevapladı üstelik yeni aldığımız
                                makineyle ilgili ne zaman sorumuz olsa aradık sorularımızı cevapladı başarılı ve güvenilir
                                bir esnaf</p>
                            <div class="testimonial-footer mt-4">
                                <h6 class="testimonial-name fw-bold mb-0">Gülcan Vurgun</h6>
                                <p class="testimonial-role small text-muted mb-0">Müşteri</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide p-2">
                        <div class="testimonial-card h-100 p-4 border rounded-3 bg-white shadow-sm">
                            <div class="testimonial-header mb-3">
                                <div class="stars text-warning">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <p class="testimonial-text small text-secondary">Kendisinden birkaç gün önce dikiş makinesi
                                aldım. Öğrenci olduğum için beni kırmadı, güzel bir indirim yaptı. Hem tamir konusunda hem
                                de yeni makine alımında güvenle tercih edebilirsiniz.</p>
                            <div class="testimonial-footer mt-4">
                                <h6 class="testimonial-name fw-bold mb-0">Zeynep Aydın</h6>
                                <p class="testimonial-role small text-muted mb-0">Müşteri</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next testimonial-next d-none d-md-flex"></div>
                <div class="swiper-button-prev testimonial-prev d-none d-md-flex"></div>
                <div class="swiper-pagination testimonials-pagination"></div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script src="{{ asset('site/js/main.js') }}"></script>
@endsection
