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

    <section class="py-5 my-5 testimonials-section overflow-hidden">
        <div class="container">
            <h1 class="text-center fw-bold testimonials-title">MÜŞTERI YORUMLARI</h1>
            <p class="text-center testimonials-subtitle">Müşterilerimizin deneyimlerini dinleyin</p>
            <div class="swiper testimonialsSwiper mt-5 px-1">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-card w-100 mx-auto">
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
                        <div class="testimonial-card w-100 mx-auto">
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
                        <div class="testimonial-card w-100 mx-auto">
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
                        <div class="testimonial-card w-100 mx-auto">
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
                        <div class="testimonial-card w-100 mx-auto">
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
