@extends('layouts.layout')

@section('title')
    İletişim
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('site/css/main.css') }}">
@endsection

@section('content')
    <section>
        <div class="container contact-items">
            <div class="row py-4 py-lg-5 px-3">
                <div class="col-lg-6 col-sm-12 col-md-6 pb-lg-0 pb-3">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3061.1974711751313!2d32.83898267669231!3d39.892210871528924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d34f6345d32005%3A0xcfec5046e21a6a57!2sAnkara%20Singer%20Yetkili%20Servisi%20ve%20bayii!5e0!3m2!1str!2str!4v1778475040482!5m2!1str!2str"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-lg-6 col-sm-12 col-md-6">
                    <div class="rounded-4 bg-light p-4 contact-links">
                        <h1 class="fw-bold pb-4">İletişim Kanallarımız</h1>
                        <ul>
                            <li><a class="lh-lg h5"><i class="bi bi-geo-alt-fill me-2"></i>İlkadım, Dikmen Cd No:139, 06460 Çankaya/Ankara</a>
                            <li><a class="lh-lg h5"><i class="bi bi-telephone-fill me-2"></i>+90 312 478 50 96</a>
                            <li><a class="lh-lg h5"><i class="bi bi-telephone-fill me-2"></i>+90 312 478 50 96</a>
                            <li><a class="lh-lg h5"><i class="bi bi-envelope-fill me-2"></i>hayriozturk74@gmail.com</a>
                        </ul>
                    </div>
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
