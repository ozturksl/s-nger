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
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3061.1974711751313!2d32.83898267669231!3d39.892210871528924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d34f6345d32005%3A0xcfec5046e21a6a57!2sAnkara%20Singer%20Yetkili%20Servisi%20ve%20bayii!5e0!3m2!1str!2str!4v1778475040482!5m2!1str!2str"
                            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                            class="rounded-4"></iframe>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="rounded-4 bg-light p-4 contact-links h-100">
                        <h1 class="fw-bold pb-3 fs-2">İletişim Kanallarımız</h1>
                        <ul class="ps-0 mb-0">
                            <li class="mb-3"><a class="d-flex align-items-start text-dark h6 text-wrap"><i
                                        class="bi bi-geo-alt-fill text-danger me-2 mt-1"></i><span>İlkadım, Dikmen Cd
                                        No:139, 06460 Çankaya/Ankara</span></a></li>
                            <li class="mb-3"><a class="d-flex align-items-center text-dark h6"><i
                                        class="bi bi-telephone-fill text-danger me-2"></i><span>+90 312 478 50 96</span></a>
                            </li>
                            <li class="mb-3"><a class="d-flex align-items-center text-dark h6"><i
                                        class="bi bi-telephone-fill text-danger me-2"></i><span>+90 312 478 50 96</span></a>
                            </li>
                            <li class="mb-0"><a class="d-flex align-items-center text-dark h6 text-break"><i
                                        class="bi bi-envelope-fill text-danger me-2"></i><span>hayriozturk74@gmail.com</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 my-5 testimonials-section overflow-hidden">
        <div class="container">
            <h1 class="text-center fw-bold testimonials-title">MÜŞTERI YORUMLARI</h1>
            <p class="text-center testimonials-subtitle">Müşterilerimizin deneyimlerini dinleyin</p>
            <div class="swiper testimonialsSwiper mt-5 px-1">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-card w-100 mx-auto" style="max-width: 350px;">
                            <div class="testimonial-header">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <p class="testimonial-text mt-3">Eğitim programları çok faydalı oldu. Personelim oldukça memnun
                                kaldı.</p>
                            <div class="testimonial-footer">
                                <h6 class="testimonial-name">Ali Şen</h6>
                                <p class="testimonial-role mb-0">Üretim Müdürü</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-card w-100 mx-auto" style="max-width: 350px;">
                            <div class="testimonial-header">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <p class="testimonial-text mt-3">Eğitim programları çok faydalı oldu. Personelim oldukça memnun
                                kaldı.</p>
                            <div class="testimonial-footer">
                                <h6 class="testimonial-name">Ali Şen</h6>
                                <p class="testimonial-role mb-0">Üretim Müdürü</p>
                            </div>
                        </div>
                    </div>
                   <div class="swiper-slide">
                        <div class="testimonial-card w-100 mx-auto" style="max-width: 350px;">
                            <div class="testimonial-header">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <p class="testimonial-text mt-3">Eğitim programları çok faydalı oldu. Personelim oldukça memnun
                                kaldı.</p>
                            <div class="testimonial-footer">
                                <h6 class="testimonial-name">Ali Şen</h6>
                                <p class="testimonial-role mb-0">Üretim Müdürü</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-card w-100 mx-auto" style="max-width: 350px;">
                            <div class="testimonial-header">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <p class="testimonial-text mt-3">Eğitim programları çok faydalı oldu. Personelim oldukça memnun
                                kaldı.</p>
                            <div class="testimonial-footer">
                                <h6 class="testimonial-name">Ali Şen</h6>
                                <p class="testimonial-role mb-0">Üretim Müdürü</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-card w-100 mx-auto" style="max-width: 350px;">
                            <div class="testimonial-header">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <p class="testimonial-text mt-3">Eğitim programları çok faydalı oldu. Personelim oldukça memnun
                                kaldı.</p>
                            <div class="testimonial-footer">
                                <h6 class="testimonial-name">Ali Şen</h6>
                                <p class="testimonial-role mb-0">Üretim Müdürü</p>
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
