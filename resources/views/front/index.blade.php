@extends('layouts.layout')

@section('title')
    Ana Sayfa
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('site/css/main.css') }}">
@endsection

@if (session('success'))
    <div class="alert alert-success d-flex align-items-center mb-4" role="alert">
        <i class="bi bi-check-circle-fill me-2"></i>
        <div>{{ session('success') }}</div>
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger d-flex align-items-center mb-4" role="alert">
        <i class="bi bi-exclamation-triangle-fill me-2"></i>
        <div>{{ session('error') }}</div>
    </div>
@endif

@section('content')
    <section class="overflow-hidden">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12 slider-texts pt-lg-5 mt-lg-5 mt-4 ps-lg-4 pe-lg-2 px-3">
                    <h1 class="fw-bold first-container-text pt-3 pt-lg-0">ANKARA DİKİŞ MAKİNESİ SERVİSİ</h1>
                    <p class="pb-3 pb-lg-4">Sektördeki yılların verdiği tecrübe ve uzman kadromuzla, Ankara genelinde ev ve
                        sanayi tipi her marka dikiş, nakış ve overlok makinesinin garantili teknik servis, periyodik bakım
                        ve orijinal yedek parça hizmetini sunarken, bütçenize en uygun sıfır ve revizyonlu ikinci el dikiş
                        makinesi modellerinin satışı ile de dikiş yolculuğunuzda güvenilir çözüm ortağınız olmaya devam
                        ediyoruz.</p>
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
        <h1 class="text-center fw-bold testimonials-title">ÖNE ÇIKAN ÜRÜNLER</h1>
        <p class="text-center testimonials-subtitle text-muted">Ankara'da en çok tercih edilen, kaliteli ve garantili sıfır
            ile ikinci el dikiş makinesi modellerimizi inceleyin.</p>
        <div class="container py-2">
            <div class="swiper productSwiper">
                <div class="swiper-wrapper">
                    @forelse ($featuredProducts as $item)
                        <div class="swiper-slide p-2">
                            <div class="card product-card shadow-sm h-100">
                                <div class="position-relative overflow-hidden">
                                    <img src="{{ asset('storage/product/' . $item->product_photo) }}"
                                        class="card-img-top product-card-img img-fluid" alt="Ürün">
                                    <span class="position-absolute top-0 start-0 badge bg-white text-dark m-3 shadow-sm">Öne
                                        Çıkan</span>
                                </div>
                                <div class="card-body d-flex flex-column p-3 p-lg-4">
                                    <h5 class="card-title mb-2 fs-6 fs-lg-5">{{ $item->product_name }}</h5>
                                    <p class="text-secondary small mb-4">{{ $item->product_comment }}</p>
                                    <div class="mt-auto d-flex align-items-center justify-content-center">
                                        <p class="fw-bold text-danger mb-0 fs-5">{{ $item->product_price }}TL</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty

                        <div class="col-12 text-center py-5 text-muted">
                            <i class="bi bi-box-seam fs-1 d-block mb-3"></i>
                            <p class="mb-0 fw-semibold">Şu anda ürün bulunmamaktadır.</p>
                            <small>Ürünlerimiz çok yakında listelenecektir.</small>
                        </div>
                    @endforelse
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
            <h1 class="text-center fw-bold testimonials-title">SUNDUĞUMUZ HİZMETLER</h1>
            <p class="text-center testimonials-subtitle text-muted">Dikiş makinelerinizin ömrünü uzatan profesyonel teknik
                servisimiz ve güvenilir satış çözümlerimizle tanışın.</p>
            <div class="row g-4 pt-2">
                <div class="col-xl-3 col-md-6 col-12 service-item">
                    <a href="#" class="service-card d-block position-relative overflow-hidden rounded-3">
                        <img src="{{ asset('site/assets/makina.png') }}" alt="Makine Satışı"
                            class="service-img w-100 img-fluid">
                        <div class="service-overlay">
                            <h3>Dikiş Makinesi Satışı</h3>
                            <p>Ankara'da en iyi markaların yüksek kaliteli sıfır ve ikinci el dikiş makinesi modelleri.</p>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-md-6 col-12 service-item">
                    <a href="#" class="service-card d-block position-relative overflow-hidden rounded-3">
                        <img src="{{ asset('site/assets/ogret.png') }}" alt="Eğitim" class="service-img w-100 img-fluid">
                        <div class="service-overlay">
                            <h3>Kullanım Eğitimi</h3>
                            <p>Satın aldığınız ev veya sanayi tipi dikiş makinaları için profesyonel kullanım eğitimleri.
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-md-6 col-12 service-item">
                    <a href="#" class="service-card d-block position-relative overflow-hidden rounded-3">
                        <img src="{{ asset('site/assets/tamir.png') }}" alt="Onarım" class="service-img w-100 img-fluid">
                        <div class="service-overlay">
                            <h3>Onarım & Periyodik Bakım</h3>
                            <p>Her marka dikiş, nakış ve overlok makinesi için profesyonel onarım ve bakım hizmetleri.</p>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-md-6 col-12 service-item">
                    <a href="#" class="service-card d-block position-relative overflow-hidden rounded-3">
                        <img src="{{ asset('site/assets/satis.png') }}" alt="Satış Sonrası Hizmet"
                            class="service-img w-100 img-fluid">
                        <div class="service-overlay">
                            <h3>Satış Sonrası Destek</h3>
                            <p>Teknik servis güvencesi, yedek parça desteği ve hızlı müşteri çözümleri.</p>
                        </div>
                    </a>
                </div>
                <div class="text-center pt-4 pt-lg-5">
                    <a class="others h5 px-4 py-3 d-inline-block text-decoration-none" href="{{ route('request') }}">
                        Hizmet Talep Edin</a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-4 py-lg-5 my-4 my-lg-5 testimonials-section overflow-hidden">
        <div class="container">
            <h1 class="text-center fw-bold testimonials-title">MÜŞTERI YORUMLARI</h1>
            <p class="text-center testimonials-subtitle text-muted">Ankara genelinde sunduğumuz dikiş makinesi tamir, bakım
                ve satış hizmetlerinden yararlanan müşterilerimizin deneyimlerini dinleyin.</p>
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
    <section>
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-12">

                    <div class="text-center mb-4">
                        <h2 class="form-main-title fw-bold">BİZE DANIŞIN</h2>
                        <p class="text-muted">Sorunlarınızı bize danışın, size telefon ile dönüş yapalım.</p>
                    </div>

                    <div class="service-form-card">
                        <form action="#" method="POST">

                            <div class="mb-3">
                                <label for="adsoyadfr" class="form-label fw-semibold">Adınız Soyadınız</label>
                                <input type="text" class="form-control" id="fullName" name="adsoyadfr"
                                    placeholder="Adınızı ve soyadınızı giriniz." required>
                            </div>

                            <div class="mb-4">
                                <label for="kullanici_mesaj" class="form-label fw-semibold">Mesajınız</label>
                                <textarea class="form-control service-input" id="message" name="kullanici_mesaj" rows="4"
                                    placeholder="Sorununuz veya talebiniz hakkında kısa bir bilgi verebilirsiniz." required></textarea>
                            </div>

                            <div class="mb-4 text-center form-info-text">
                                <i>Paylaştığınız veriler sadece size ulaşmak için kullanılacak olup, talebiniz
                                    sonuçlandığında
                                    sistemimizden tamamen silinmektedir.</i>
                            </div>

                            <div class="text-center gap-2">
                                <button type="submit" class="btn btn-lg others px-5 py-3">
                                    Talebi Gönder
                                </button>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script src="{{ asset('site/js/main.js') }}"></script>
@endsection
