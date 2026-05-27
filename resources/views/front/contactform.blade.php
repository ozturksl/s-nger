@extends('layouts.layout')

@section('title')
    Hizmet Talep
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('site/css/main.css') }}">
@endsection

<div class="container mt-3">
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="fas fa-exclamation-triangle me-2"></i> {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
</div>

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">

                <div class="text-center mb-4">
                    <h2 class="form-main-title fw-bold">HİZMET TALEP FORMU</h2>
                    <p class="text-muted">İhtiyacınız olan hizmeti seçin, en kısa sürede size dönüş yapalım.</p>
                </div>

                <div class="service-form-card">
                    <form action="{{ route('addservice') }}" method="POST">

                        <div class="mb-3">
                            <label for="hizmet_alan_adi" class="form-label fw-semibold">Adınız Soyadınız *</label>
                            <input type="text" class="form-control form-control service-input" name="hizmet_alan_adi"
                                placeholder="Ad ve soyad giriniz." required>
                        </div>

                        <div class="mb-3">
                            <label for="hizmet_alan_telefon" class="form-label fw-semibold">Telefon Numaranız *</label>
                            <input type="tel" class="form-control form-control service-input" name="hizmet_alan_telefon"
                                placeholder="Numara giriniz." required>
                        </div>

                        <div class="mb-3">
                            <label for="service_type_id" class="form-label fw-semibold">Almak İstediğiniz Hizmet *</label>
                            <select class="form-select form-control service-input" name="service_type_id" required>
                                @foreach ($serviceTypes as $type)
                                    <option value="{{ $type->service_type_id }}">{{ $type->service_type_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="hizmet_alan_aciklama" class="form-label fw-semibold">Mesajınız *</label>
                            <textarea class="form-control service-input" name="hizmet_alan_aciklama" rows="4"
                                placeholder="Sorununuz veya talebiniz hakkında kısa bir bilgi verebilirsiniz..." required></textarea>
                        </div>

                        <div class="mb-4 text-center form-info-text">
                            <i>Paylaştığınız veriler sadece size ulaşmak için kullanılacak olup, talebiniz sonuçlandığında
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
@endsection

@section('js')
    <script src="{{ asset('site/js/main.js') }}"></script>
@endsection
