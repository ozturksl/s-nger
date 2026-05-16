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
                <h1 class="fw-bold text-center pt-5">HAKKIMIZDA</h1>
                <div class="col-lg-6 col-12 pt-lg-5 mt-lg-5 ps-lg-4 pe-lg-2 px-3 pt-4">
                    <h1 class="fw-bold about-title1">Hikayemiz ve Misyonumuz</h1>
                    <p class="pb-3 pb-lg-4">
                        Biz, dikiş makinasının sadece bir alet değil, aynı zamanda üretimin, yaratıcılığın ve geçim
                        kaynağının bir parçası olduğuna inanıyoruz. Bir terzinin dikiş makinası durduğunda, sadece bir
                        makine arızalanmaz; aynı zamanda müşterilerinin siparişleri gecikir, evine ekmek götürme planları
                        sekteye uğrar. Bir öğrencinin makinesi bozulduğunda, sadece bir hobi aksamaz; öğrenme hevesi
                        kırılabilir. Bu yüzden bizim için her tamir, her satış ve her eğitim sadece teknik bir işlem değil,
                        bir insanın hayatına dokunma fırsatıdır.
                        Misyonumuzun temelinde dürüstlük, şeffaflık ve uzmanlık yatar. Müşterilerimize gereksiz masraf
                        çıkarmadan, makinelerinin gerçek ihtiyaçlarını tespit ederek çözüm sunuyoruz. Yerine yenisini
                        almanızı söylemeden önce, tamir edilebilir mi diye düşünüyoruz. Çünkü bizim için en büyük kazanç,
                        sizi bir kez daha güvenle dükkanımıza getiren memnuniyetinizdir.
                        Yıllar içinde binlerce makine tamir ettik, yüzlerce kişiye dikiş öğrettik ve sayısız atölyenin
                        üretim bandını yeniden çalıştırdık. Her birinde aynı sorumluluk duygusuyla hareket ettik. Amacımız
                        sadece satış yapmak değil; dikiş kültürünü yaşatmak, bu mesleği ve hobiyi seven herkese destek olmak
                        ve bulunduğumuz bölgede bu alanda en güvenilir referans noktası olmaktır.
                        Gelecekte de aynı heyecanla, teknolojik gelişmeleri yakından takip ederek, geleneksel dikiş
                        bilgisini modern tekniklerle birleştirerek hizmet vermeye devam edeceğiz. Çünkü bizim için misyon,
                        sadece bir cümle değil; her gün tekrar tekrar kanıtladığımız bir yaşam biçimidir.</p>
                </div>
                <div class="col-lg-6 col-12 pt-4 pt-lg-5 slider-photo text-center">
                    <a href="#" class="d-block">
                        <img src="{{ asset('site/assets/slider.png') }}" class="img-fluid mt-lg-5 rounded-4 w-100">
                    </a>
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
                        <li class="mb-2"><a href="#" class="d-flex align-items-center"><i class="bi bi-check-circle-fill fs-4 text-danger me-3"></i>6 Ay - 2 Yıl Garanti</a></li>
                        <li class="mb-2"><a href="#" class="d-flex align-items-center"><i class="bi bi-check-circle-fill fs-4 text-danger me-3"></i>Orijinal Yedek Parça Kullanımı</a></li>
                        <li class="mb-2"><a href="#" class="d-flex align-items-center"><i class="bi bi-check-circle-fill fs-4 text-danger me-3"></i>Ücretsiz İlk Bakım</a></li>
                        <li class="mb-2"><a href="#" class="d-flex align-items-center"><i class="bi bi-check-circle-fill fs-4 text-danger me-3"></i>Evde Servis İmkanı</a></li>
                        <li class="mb-2"><a href="#" class="d-flex align-items-center"><i class="bi bi-check-circle-fill fs-4 text-danger me-3"></i>Hızlı Teslimat</a></li>
                        <li class="mb-2"><a href="#" class="d-flex align-items-center"><i class="bi bi-check-circle-fill fs-4 text-danger me-3"></i>Kredi Kartına Taksit İmkanı</a></li>
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