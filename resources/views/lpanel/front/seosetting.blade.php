@extends('lpanel.layouts.layout')

@section('title')
    SEO Ayarları
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('admin/css/main.css') }}">
@endsection

@if ($errors->any())
    <div
        style="background-color: #f8d7da; color: #721c24; padding: 15px; border-radius: 5px; margin-bottom: 20px; border: 1px solid #f5c6cb;">
        <strong style="display: block; margin-bottom: 5px;">Lütfen aşağıdaki hataları düzeltiniz:</strong>
        <ul style="margin: 0; padding-left: 20px;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('error'))
    <div
        style="background-color: #f8d7da; color: #721c24; padding: 15px; border-radius: 5px; margin-bottom: 20px; border: 1px solid #f5c6cb;">
        <strong>Hata:</strong> {{ session('error') }}
    </div>
@endif

@if (session('success'))
    <div
        style="background-color: #d4edda; color: #155724; padding: 15px; border-radius: 5px; margin-bottom: 20px; border: 1px solid #c3e6cb;">
        <strong>Başarılı!</strong> {{ session('success') }}
    </div>
@endif

@section('content')
    <div class="d-flex flex-row min-vh-100">
        @include('lpanel.partials.sidebar')

        <div class="d-flex flex-column flex-grow-1 custom-color min-w-0">
            @include('lpanel.partials.topbar')

            <div class="flex-grow-1 p-3 p-md-4">
                <div class="mb-4">
                    <h1 class="fs-2 fw-bold mb-1">SEO Ayarları</h1>
                    <p class="text-muted">SEO Ayarlarının yapıldığı bölüm</p>
                </div>

                <div class="custom-border rounded-4 bg-white shadow-sm w-100 overflow-hidden">
                    <div class="custom-border-bottom">
                        <h2 class="fs-4 px-4 py-3 m-0">
                            <i class="bi bi-alphabet fs-4 me-2 text-danger"></i>
                            SEO Ayarları
                        </h2>
                    </div>

                    <form action="{{ route('seoupdate') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="p-3 p-md-4">
                            <div class="mb-4">
                                <label for="seocomment" class="form-label fw-bold">
                                    SEO AÇIKLAMA
                                </label>
                                <textarea name="seocomment" class="form-control custom-border w-100" placeholder="Açıklama giriniz." rows="3"></textarea>
                            </div>
                            <div class="mb-4">
                                <label for="seokey" class="form-label fw-bold">
                                    ANAHTAR KELİMELER
                                </label>
                                <textarea name="seokey" class="form-control custom-border w-100" placeholder="Anahtar kelime giriniz."></textarea>
                            </div>

                            <div class="mb-4">
                                <img src="{{ asset('storage/seo/' . $seoData->seo_favicon) }}" width="150" height="auto" alt="">
                                <label for="seofavicon" class="form-label fw-bold">
                                    FAVİCON
                                </label>
                                <input class="form-control w-100" type="file" name="seofavicon"
                                    accept="image/jpeg,image/png,image/webp">
                                <div class="form-text text-muted text-wrap">
                                    <i class="bi bi-info-circle me-1"></i>
                                    Maksimum dosya boyutu: 2MB. Desteklenen formatlar: JPG, PNG, WEBP.
                                </div>
                            </div>

                            <div class="mb-4">
                                <img src="{{ asset('storage/seo/' . $seoData->seo_icon) }}" width="150" height="auto" alt="">
                                <label for="seoicon" class="form-label fw-bold">
                                    LOGO
                                </label>
                                <input class="form-control w-100" type="file" name="seoicon"
                                    accept="image/jpeg,image/png,image/webp">
                                <div class="form-text text-muted text-wrap">
                                    <i class="bi bi-info-circle me-1"></i>
                                    Maksimum dosya boyutu: 2MB. Desteklenen formatlar: JPG, PNG, WEBP.
                                </div>
                            </div>

                            <div class="d-flex flex-wrap gap-2 gap-md-3 pt-2">
                                <button type="submit" class="btn btn-success px-4 py-2 col-12 col-sm-auto">
                                    <i class="bi bi-check-circle me-2"></i>
                                    Kaydet
                                </button>
                                <a href="#" class="btn btn-outline-danger px-4 py-2 col-12 col-sm-auto text-center">
                                    <i class="bi bi-x-circle me-2"></i>
                                    İptal
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('admin/js/main.js') }}"></script>
@endsection
