@extends('layouts.layout')

@section('title')
    Ana Sayfa
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('site/css/main.css') }}">
@endsection

@section('content')
    <section class="overflow-hidden">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12 slider-texts pt-lg-5 mt-lg-5 mt-4 ps-lg-4 pe-lg-2 px-3">
                    <h1 class="fw-bold first-container-text pt-3 pt-lg-0">ANKARA'NIN EN KALİTELİ SERVİSİ HİZMETİNİZDE</h1>
                    <p class="pb-3 pb-lg-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum
                        has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                        galley of type and scrambled </p>
                    <div class="button-main">
                        <a href="{{ route('about') }}" class="px-5 py-3 text-decoration-none d-inline-block">Keşfedin</a>
                    </div>

                    <div class="row pt-4 pt-lg-5 mt-4 mt-lg-0">
                        <div class="col-4 feature mb-3 mb-lg-0">
                            <h1 class="fw-bold text-danger md-fs-2">40+</h1>
                            <p class="lh-1 h6 text-muted">Deneyim</p>
                        </div>
                        <div class="col-4 feature mb-3 mb-lg-0">
                            <h1 class="fw-bold text-danger md-fs-2">300+</h1>
                            <p class="lh-1 h6 text-muted">Makine Tamiri</p>
                        </div>
                        <div class="col-4 feature mb-3 mb-lg-0">
                            <h1 class="fw-bold text-danger md-fs-2">200+</h1>
                            <p class="lh-1 h6 text-muted">Memnun Müşteri</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-12 pt-4 pt-lg-5 mt-3 mt-lg-5 slider-photo text-center">
                    <a href="#" class="d-block">
                        <img src="{{ asset('site/assets/slider.png') }}" class="img-fluid rounded-4 w-100" alt="Slider">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-4 py-lg-5 my-4 my-lg-5 overflow-hidden">
        <h1 class="text-center fw-bold pt-3 pt-lg-5 pb-3 pb-lg-4">ÖNE ÇIKAN ÜRÜNLER</h1>
        <div class="container py-2">
            <div class="swiper productSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide p-2">
                        <div class="card product-card shadow-sm h-100">
                            <div class="position-relative overflow-hidden">
                                <img src="{{ asset('site/assets/makina.png') }}"
                                    class="card-img-top product-card-img img-fluid" alt="Ürün">
                                <span class="position-absolute top-0 start-0 badge bg-white text-dark m-3 shadow-sm">Öne
                                    Çıkan</span>
                            </div>
                            <div class="card-body d-flex flex-column p-3 p-lg-4">
                                <h5 class="card-title mb-2 fs-6 fs-lg-5">Ürün Başlığı 1</h5>
                                <p class="text-secondary small mb-4">Endüstriyel kalite ve yüksek performans.</p>
                                <div class="mt-auto d-flex align-items-center justify-content-center">
                                    <p class="fw-bold text-danger mb-0 fs-5">500 TL</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide p-2">
                        <div class="card product-card shadow-sm h-100">
                            <div class="position-relative overflow-hidden">
                                <img src="{{ asset('site/assets/makina.png') }}"
                                    class="card-img-top product-card-img img-fluid" alt="Ürün">
                                <span class="position-absolute top-0 start-0 badge bg-white text-dark m-3 shadow-sm">Öne
                                    Çıkan</span>
                            </div>
                            <div class="card-body d-flex flex-column p-3 p-lg-4">
                                <h5 class="card-title mb-2 fs-6 fs-lg-5">Ürün 2</h5>
                                <p class="text-secondary small mb-4">Dayanıklı ve güvenilir performans.</p>
                                <div class="mt-auto d-flex align-items-center justify-content-center">
                                    <p class="fw-bold text-danger mb-0 fs-5">600 TL</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide p-2">
                        <div class="card product-card shadow-sm h-100">
                            <div class="position-relative overflow-hidden">
                                <img src="{{ asset('site/assets/makina.png') }}"
                                    class="card-img-top product-card-img img-fluid" alt="Ürün">
                                <span class="position-absolute top-0 start-0 badge bg-white text-dark m-3 shadow-sm">Öne
                                    Çıkan</span>
                            </div>
                            <div class="card-body d-flex flex-column p-3 p-lg-4">
                                <h5 class="card-title mb-2 fs-6 fs-lg-5">Ürün 3</h5>
                                <p class="text-secondary small mb-4">Konforlu kullanım için tasarlandı.</p>
                                <div class="mt-auto d-flex align-items-center justify-content-center">
                                    <p class="fw-bold text-danger mb-0 fs-5">700 TL</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide p-2">
                        <div class="card product-card shadow-sm h-100">
                            <div class="position-relative overflow-hidden">
                                <img src="{{ asset('site/assets/makina.png') }}"
                                    class="card-img-top product-card-img img-fluid" alt="Ürün">
                                <span class="position-absolute top-0 start-0 badge bg-white text-dark m-3 shadow-sm">Öne
                                    Çıkan</span>
                            </div>
                            <div class="card-body d-flex flex-column p-3 p-lg-4">
                                <h5 class="card-title mb-2 fs-6 fs-lg-5">Ürün 4</h5>
                                <p class="text-secondary small mb-4">Yüksek verim için sağlam seçim.</p>
                                <div class="mt-auto d-flex align-items-center justify-content-center">
                                    <p class="fw-bold text-danger mb-0 fs-5">800 TL</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide p-2">
                        <div class="card product-card shadow-sm h-100">
                            <div class="position-relative overflow-hidden">
                                <img src="{{ asset('site/assets/makina.png') }}"
                                    class="card-img-top product-card-img img-fluid" alt="Ürün">
                                <span class="position-absolute top-0 start-0 badge bg-white text-dark m-3 shadow-sm">Öne
                                    Çıkan</span>
                            </div>
                            <div class="card-body d-flex flex-column p-3 p-lg-4">
                                <h5 class="card-title mb-2 fs-6 fs-lg-5">Ürün 5</h5>
                                <p class="text-secondary small mb-4">Güçlü performans ve uzun ömür.</p>
                                <div class="mt-auto d-flex align-items-center justify-content-center">
                                    <p class="fw-bold text-danger mb-0 fs-5">900 TL</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next d-none d-md-flex"></div>
                <div class="swiper-button-prev d-none d-md-flex"></div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="text-center pt-4 pt-lg-5">
                <a class="others h5 px-4 py-3 d-inline-block text-decoration-none" href="{{ route('product') }}">Tüm
                    Ürünleri Görüntüle</a>
            </div>
        </div>
    </section>

    <section class="py-4 py-lg-5 my-4 my-lg-5 services-section" id="services-sec">
        <div class="container">
            <h1 class="fw-bold text-center mb-4 mb-lg-5 service-title">SUNDUĞUMUZ HİZMETLER</h1>
            <div class="row g-4">
                <div class="col-xl-3 col-md-6 col-12 service-item">
                    <a href="#" class="service-card d-block position-relative overflow-hidden rounded-3">
                        <img src="{{ asset('site/assets/makina.png') }}" alt="Makine Satışı"
                            class="service-img w-100 img-fluid">
                        <div class="service-overlay">
                            <h3>Makine Satışı</h3>
                            <p>Yüksek kaliteli makineler.</p>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-md-6 col-12 service-item">
                    <a href="#" class="service-card d-block position-relative overflow-hidden rounded-3">
                        <img src="{{ asset('site/assets/ogret.png') }}" alt="Eğitim"
                            class="service-img w-100 img-fluid">
                        <div class="service-overlay">
                            <h3>Eğitim</h3>
                            <p>Dikiş makinası kullanım eğitimleri.</p>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-md-6 col-12 service-item">
                    <a href="#" class="service-card d-block position-relative overflow-hidden rounded-3">
                        <img src="{{ asset('site/assets/tamir.png') }}" alt="Onarım"
                            class="service-img w-100 img-fluid">
                        <div class="service-overlay">
                            <h3>Onarım & Bakım</h3>
                            <p>Profesyonel onarım ve bakım hizmetleri.</p>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-md-6 col-12 service-item">
                    <a href="#" class="service-card d-block position-relative overflow-hidden rounded-3">
                        <img src="{{ asset('site/assets/satis.png') }}" alt="Satış Sonrası Hizmet"
                            class="service-img w-100 img-fluid">
                        <div class="service-overlay">
                            <h3>Satış Sonrası Hizmetler</h3>
                            <p>7/24 müşteri desteği ve teknik destek</p>
                        </div>
                    </a>
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
                            <p class="testimonial-text small text-secondary">Mükemmel hizmet ve ürün kalitesi. Çok
                                memnunum, kesinlikle tavsiye ederim!</p>
                            <div class="testimonial-footer mt-4">
                                <h6 class="testimonial-name fw-bold mb-0">Ayşe Yılmaz</h6>
                                <p class="testimonial-role small text-muted mb-0">İşletme Sahibi</p>
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
                            <p class="testimonial-text small text-secondary">Profesyonel ekip, hızlı çözümler. Sorunlarımız
                                anında çözüldü. Çok tatminum!</p>
                            <div class="testimonial-footer mt-4">
                                <h6 class="testimonial-name fw-bold mb-0">Mehmet Kaya</h6>
                                <p class="testimonial-role small text-muted mb-0">Müşterilik Bölümü Müdürü</p>
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
                            <p class="testimonial-text small text-secondary">Ürünler çok kaliteli ve uzun ömürlü. Satış
                                sonrası hizmetler harika!</p>
                            <div class="testimonial-footer mt-4">
                                <h6 class="testimonial-name fw-bold mb-0">Fatma Demir</h6>
                                <p class="testimonial-role small text-muted mb-0">Atölye Sahibi</p>
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
                            <p class="testimonial-text small text-secondary">Eğitim programları çok faydalı oldu.
                                Personelim oldukça memnun kaldı.</p>
                            <div class="testimonial-footer mt-4">
                                <h6 class="testimonial-name fw-bold mb-0">Ali Şen</h6>
                                <p class="testimonial-role small text-muted mb-0">Üretim Müdürü</p>
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
                            <p class="testimonial-text small text-secondary">Güvenilir bir firma. Sözleştikleri her şeyi
                                yaparlar. İçim rahat oldu!</p>
                            <div class="testimonial-footer mt-4">
                                <h6 class="testimonial-name fw-bold mb-0">Zeynep Aydın</h6>
                                <p class="testimonial-role small text-muted mb-0">Girişimci</p>
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
