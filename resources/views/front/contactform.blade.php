@extends('layouts.layout')

@section('title')
    Hizmet Talep
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('site/css/main.css') }}">
@endsection

@section('content')
   <div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            
            <div class="text-center mb-4">
                <h2 class="form-main-title fw-bold">HİZMET TALEP FORMU</h2>
                <p class="text-muted">İhtiyacınız olan hizmeti seçin, en kısa sürede size dönüş yapalım.</p>
            </div>

            <div class="service-form-card">
                <form action="#" method="POST">
                    
                    <div class="mb-3">
                        <label for="fullName" class="form-label fw-semibold">Adınız Soyadınız *</label>
                        <input type="text" class="form-control form-control-lg service-input" id="fullName" name="fullname" placeholder="Örn: Ahmet Yılmaz" required>
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label fw-semibold">Telefon Numaranız *</label>
                        <input type="tel" class="form-control form-control-lg service-input" id="phone" name="phone" placeholder="05xx xxx xx xx" required>
                    </div>

                    <div class="mb-3">
                        <label for="serviceType" class="form-label fw-semibold">Almak İstediğiniz Hizmet *</label>
                        <select class="form-select form-control-lg service-input" id="serviceType" name="service_type" required>
                            <option value="" disabled selected>Lütfen bir hizmet seçiniz</option>
                            <option value="Satış / Katalog Bilgisi">Makine Satışı / Ürün Bilgisi</option>
                            <option value="Eğitim / Kurs">Dikiş Eğitimi & Kurs Talebi</option>
                            <option value="Onarım & Bakım">Onarım & Teknik Bakım</option>
                            <option value="Satış Sonrası Hizmetler">Satış Sonrası Destek / Yedek Parça</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="message" class="form-label fw-semibold">Mesajınız / Notunuz (İsteğe Bağlı)</label>
                        <textarea class="form-control service-input" id="message" name="message" rows="4" placeholder="Sorununuz veya talebiniz hakkında kısa bir bilgi verebilirsiniz..."></textarea>
                    </div>

                    <div class="mb-4 text-center form-info-text">
                        <i>Paylaştığınız veriler sadece size ulaşmak için kullanılacak olup, talebiniz sonuçlandığında sistemimizden tamamen silinmektedir.</i>
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-lg btn-singer-submit">
                            Talebi Gönder
                        </button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
@endsection

@section('js')
    <script src="{{ asset('site/js/main.js') }}"></script>
@endsection
