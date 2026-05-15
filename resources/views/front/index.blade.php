@extends('layouts.layout')

@section('title')
    Ana Sayfa
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('site/css/main.css') }}">
@endsection

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 slider-texts pt-lg-5 mt-lg-5 mt-3 ps-lg-4 pe-lg-2 px-3">
                    <h1 class="fw-bold first-container-text pt-5 pt-lg-0">ANKARA'NIN EN KALİTELİ SERVİSİ HİZMETİNİZDE</h1>
                    <p class="pb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                        has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                        galley of type and scrambled </p>
                    <div class="button-main">
                        <a href="{{ route('about') }}" class="px-5 py-3 text-decoration-none">Keşfedin</a>
                    </div>
                    <div class="row pt-5 mt-lg-0 mt-5">
                        <div class="col-lg-4 col-sm-12 feature">
                            <h1 class="fw-bold text-danger">40+</h1>
                            <p class="lh-1 h5">Deneyim</p>
                        </div>
                        <div class="col-lg-4 col-sm-12 feature">
                            <h1 class="fw-bold text-danger">300+</h1>
                            <p class="lh-1 h5">Makine Tamiri</p>
                        </div>
                        <div class="col-lg-4 col-sm-12 feature">
                            <h1 class="fw-bold text-danger">200+</h1>
                            <p class="lh-1 h5">Memnun Müşteri</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pt-5 mt-5 slider-photo">
                    <a href="#"><img src="{{ asset('site/assets/slider.png') }}"
                            class="img-fluid mt-lg-5 rounded-4"></a>
                </div>
            </div>
        </div>
    </section>


    <section class="py-lg-5 p-2 my-5">
        <h1 class="text-center fw-bold pt-5 pb-lg-4 pb-0">ÖNE ÇIKAN ÜRÜNLER</h1>
        <div class="container py-2">
            <div class="swiper productSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="card product-card shadow-sm">
                            <div class="position-relative overflow-hidden">
                                <img src="{{ asset('site/assets/makina.png') }}" class="card-img-top product-card-img" alt="Ürün">
                                <span class="position-absolute top-0 start-0 badge bg-white text-dark m-3 shadow-sm">Öne Çıkan</span>
                            </div>
                            <div class="card-body d-flex flex-column p-4">
                                <h5 class="card-title mb-2">Ürün Başlığı 1</h5>
                                <p class="text-secondary small mb-4">Endüstriyel kalite ve yüksek performans.</p>
                                <div class="mt-auto d-flex align-items-center justify-content-center">
                                    <p class="fw-bold text-danger mb-0 fs-5">500 TL</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card product-card shadow-sm">
                            <div class="position-relative overflow-hidden">
                                <img src="{{ asset('site/assets/makina.png') }}" class="card-img-top product-card-img" alt="Ürün">
                                <span class="position-absolute top-0 start-0 badge bg-white text-dark m-3 shadow-sm">Öne Çıkan</span>
                            </div>
                            <div class="card-body d-flex flex-column p-4">
                                <h5 class="card-title mb-2">Ürün 2</h5>
                                <p class="text-secondary small mb-4">Dayanıklı ve güvenilir performans.</p>
                                <div class="mt-auto d-flex align-items-center justify-content-center">
                                    <p class="fw-bold text-danger mb-0 fs-5">600 TL</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card product-card shadow-sm">
                            <div class="position-relative overflow-hidden">
                                <img src="{{ asset('site/assets/makina.png') }}" class="card-img-top product-card-img" alt="Ürün">
                                <span class="position-absolute top-0 start-0 badge bg-white text-dark m-3 shadow-sm">Öne Çıkan</span>
                            </div>
                            <div class="card-body d-flex flex-column p-4">
                                <h5 class="card-title mb-2">Ürün 3</h5>
                                <p class="text-secondary small mb-4">Konforlu kullanım için tasarlandı.</p>
                                <div class="mt-auto d-flex align-items-center justify-content-center">
                                    <p class="fw-bold text-danger mb-0 fs-5">700 TL</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card product-card shadow-sm">
                            <div class="position-relative overflow-hidden">
                                <img src="{{ asset('site/assets/makina.png') }}" class="card-img-top product-card-img" alt="Ürün">
                                <span class="position-absolute top-0 start-0 badge bg-white text-dark m-3 shadow-sm">Öne Çıkan</span>
                            </div>
                            <div class="card-body d-flex flex-column p-4">
                                <h5 class="card-title mb-2">Ürün 4</h5>
                                <p class="text-secondary small mb-4">Yüksek verim için sağlam seçim.</p>
                                <div class="mt-auto d-flex align-items-center justify-content-center">
                                    <p class="fw-bold text-danger mb-0 fs-5">800 TL</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card product-card shadow-sm">
                            <div class="position-relative overflow-hidden">
                                <img src="{{ asset('site/assets/makina.png') }}" class="card-img-top product-card-img" alt="Ürün">
                                <span class="position-absolute top-0 start-0 badge bg-white text-dark m-3 shadow-sm">Öne Çıkan</span>
                            </div>
                            <div class="card-body d-flex flex-column p-4">
                                <h5 class="card-title mb-2">Ürün 5</h5>
                                <p class="text-secondary small mb-4">Güçlü performans ve uzun ömür.</p>
                                <div class="mt-auto d-flex align-items-center justify-content-center">
                                    <p class="fw-bold text-danger mb-0 fs-5">900 TL</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="text-center pt-5">
                <a class="others h4 px-4 py-3" href="{{ route('product') }}">Tüm Ürünleri Görüntüle</a>
            </div>
        </div>
    </section>

    <section class="py-5 my-5 services-section" id="services-sec">
        <div class="container">
            <h1 class="fw-bold text-center mb-5 service-title">SUNDUĞUMUZ HİZMETLER</h1>
            <div class="services-grid">
                <div class="service-item">
                    <a href="#" class="service-card ">
                        <img src="{{ asset('site/assets/makina.png') }}" alt="Makine Satışı" class="service-img">
                        <div class="service-overlay">
                            <h3>Makine Satışı</h3>
                            <p>Yüksek kaliteli makineler.</p>
                        </div>
                    </a>
                </div>
                <div class="service-item">
                    <a href="#" class="service-card ">
                        <img src="{{ asset('site/assets/ogret.png') }}" alt="Eğitim" class="service-img">
                        <div class="service-overlay">
                            <h3>Eğitim</h3>
                            <p>Dikiş makinası kullanım eğitimleri.</p>
                        </div>
                    </a>
                </div>
                <div class="service-item">
                    <a href="#" class="service-card ">
                        <img src="{{ asset('site/assets/tamir.png') }}" alt="Onarım" class="service-img">
                        <div class="service-overlay">
                            <h3>Onarım & Bakım</h3>
                            <p>Profesyonel onarım ve bakım hizmetleri.</p>
                        </div>
                    </a>
                </div>
                <div class="service-item">
                    <a href="#" class="service-card ">
                        <img src="{{ asset('site/assets/satis.png') }}" alt="Satış Sonrası Hizmet" class="service-img">
                        <div class="service-overlay">
                            <h3>Satış Sonrası Hizmetler</h3>
                            <p>7/24 müşteri desteği ve teknik destek</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 my-5 testimonials-section">
        <div class="container">
            <h1 class="text-center fw-bold testimonials-title">MÜŞTERİ YORUMLARI</h1>
            <p class="text-center testimonials-subtitle">Müşterilerimizin deneyimlerini dinleyin</p>
            <div class="swiper testimonialsSwiper mt-5">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="testimonial-header">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <p class="testimonial-text">Mükemmel hizmet ve ürün kalitesi. Çok memnunum, kesinlikle tavsiye
                                ederim!</p>
                            <div class="testimonial-footer">
                                <h6 class="testimonial-name">Ayşe Yılmaz</h6>
                                <p class="testimonial-role">İşletme Sahibi</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="testimonial-header">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <p class="testimonial-text">Profesyonel ekip, hızlı çözümler. Sorunlarımız anında çözüldü. Çok
                                tatminum!</p>
                            <div class="testimonial-footer">
                                <h6 class="testimonial-name">Mehmet Kaya</h6>
                                <p class="testimonial-role">Müşterilik Bölümü Müdürü</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="testimonial-header">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <p class="testimonial-text">Ürünler çok kaliteli ve uzun ömürlü. Satış sonrası hizmetler
                                harika!</p>
                            <div class="testimonial-footer">
                                <h6 class="testimonial-name">Fatma Demir</h6>
                                <p class="testimonial-role">Atölye Sahibi</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="testimonial-header">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <p class="testimonial-text">Eğitim programları çok faydalı oldu. Personelim oldukça memnun
                                kaldı.</p>
                            <div class="testimonial-footer">
                                <h6 class="testimonial-name">Ali Şen</h6>
                                <p class="testimonial-role">Üretim Müdürü</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="testimonial-header">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <p class="testimonial-text">Güvenilir bir firma. Sözleştikleri her şeyi yaparlar. İçim rahat
                                oldu!</p>
                            <div class="testimonial-footer">
                                <h6 class="testimonial-name">Zeynep Aydın</h6>
                                <p class="testimonial-role">Girişimci</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next testimonial-next"></div>
                <div class="swiper-button-prev testimonial-prev"></div>
                <div class="swiper-pagination testimonials-pagination"></div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script src="{{ asset('site/js/main.js') }}"></script>
@endsection
