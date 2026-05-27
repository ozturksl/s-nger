@extends('layouts.layout')

@section('title')
    Hakkımızda
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('site/css/main.css') }}">
@endsection

@section('content')
    <section class="overflow-hidden">
        <div class="container">
            <div class="row">
                <h1 class="text-center fw-bold testimonials-title">HAKKIMIZDA</h1>
                <p class="text-center testimonials-subtitle text-muted">Ankara'da yılların tecrübesiyle sunduğumuz
                    profesyonel dikiş makinesi tamir, bakım ve güvenilir satış hizmetlerimizi tanıyın.</p>
                <div class="col-12 ps-lg-4 pe-lg-2 px-3 pt-4">
                    <h1 class="fw-bold about-title1">Hikayemiz ve Misyonumuz</h1>
                    <p class="pb-3 pb-lg-4">
                        Biz, dikiş makinasının sadece bir alet değil; aynı zamanda üretimin, yaratıcılığın ve geçim
                        kaynağının en önemli parçası olduğuna inanıyoruz. Bir terzinin dikiş makinası durduğunda, sadece bir
                        makine arızalanmaz; aynı zamanda müşterilerinin siparişleri gecikir, evine ekmek götürme planları
                        sekteye uğrar. Bir öğrencinin dikiş makinesi bozulduğunda, sadece bir hobi aksamaz; öğrenme hevesi
                        kırılabilir. Bu yüzden firmamız için her dikiş makinesi tamiri, her sıfır veya ikinci el makine
                        satışı ve verdiğimiz her eğitim sadece teknik bir işlem değil, bir insanın hayatına dokunma
                        fırsatıdır.<br><br>

                        Ankara dikiş makinesi teknik servisi olarak misyonumuzun temelinde dürüstlük, şeffaflık ve uzmanlık
                        yatar. Müşterilerimize gereksiz masraf çıkarmadan, dikiş, nakış ve overlok makinelerinin gerçek
                        ihtiyaçlarını tespit ederek profesyonel çözümler sunuyoruz. Size hemen yeni bir makine satmaya
                        çalışmak yerine, "Bu makine en sağlıklı şekilde nasıl tamir edilebilir ve ömrü nasıl uzatılır?" diye
                        düşünüyoruz. Çünkü bizim için en büyük kazanç, dükkanımızdan memnuniyetle ayrılmanız ve bize
                        duyduğunuz güvendir.<br><br>

                        Yıllar içinde Ankara genelinde binlerce dikiş makinesi bakımı ve onarımı gerçekleştirdik, yüzlerce
                        kişiye dikiş makinası kullanım eğitimi verdik ve sayısız tekstil atölyesinin üretim bandını yeniden
                        çalıştırdık. Singer, Janome, Brother gibi dünya markalarının servis süreçlerinden ikinci el dikiş
                        makinesi satışı ve orijinal yedek parça desteğine kadar her alanda aynı sorumluluk duygusuyla
                        hareket ettik. Amacımız sadece ticaret yapmak değil; dikiş kültürünü yaşatmak, bu mesleği ve hobiyi
                        seven herkese destek olmak ve Ankara'da bu alanda en güvenilir referans noktası olmaktır.<br><br>

                        Gelecekte de aynı heyecanla, teknolojik gelişmeleri yakından takip ederek, geleneksel dikiş
                        bilgisini modern tekniklerle birleştirerek hizmet vermeye devam edeceğiz. Çünkü bizim için misyon,
                        sadece süslü bir cümle değil; her gün dükkanımızda tekrar tekrar kanıtladığımız bir yaşam biçimidir.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-5 overflow-hidden">
        <div class="container whyus pb-4">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12 px-3">
                    <h1 class="fw-bold mb-4">Neden Bizi Tercih Etmelisiniz?</h1>
                    <ul class="ps-0">
                        <li class="mb-2"><a href="#" class="d-flex align-items-center"><i
                                    class="bi bi-check-circle-fill fs-4 text-danger me-3"></i>6 Ay - 2 Yıl Garanti</a></li>
                        <li class="mb-2"><a href="#" class="d-flex align-items-center"><i
                                    class="bi bi-check-circle-fill fs-4 text-danger me-3"></i>Orijinal Yedek Parça
                                Kullanımı</a></li>
                        <li class="mb-2"><a href="#" class="d-flex align-items-center"><i
                                    class="bi bi-check-circle-fill fs-4 text-danger me-3"></i>Ücretsiz İlk Bakım</a></li>
                        <li class="mb-2"><a href="#" class="d-flex align-items-center"><i
                                    class="bi bi-check-circle-fill fs-4 text-danger me-3"></i>Evde Servis İmkanı</a></li>
                        <li class="mb-2"><a href="#" class="d-flex align-items-center"><i
                                    class="bi bi-check-circle-fill fs-4 text-danger me-3"></i>Hızlı Teslimat</a></li>
                        <li class="mb-2"><a href="#" class="d-flex align-items-center"><i
                                    class="bi bi-check-circle-fill fs-4 text-danger me-3"></i>Kredi Kartına Taksit
                                İmkanı</a></li>
                    </ul>
                </div>
                <div class="col-lg-6 col-12 pt-4 pt-lg-0 slider-photo text-center">
                    <a href="#" class="d-block">
                        <img src="{{ asset('site/assets/slider.png') }}" class="img-fluid mt-lg-5 rounded-4 w-100">
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script src="{{ asset('site/js/main.js') }}"></script>
@endsection
