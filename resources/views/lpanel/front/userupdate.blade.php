@extends('lpanel.layouts.layout')

@section('title')
    Kullanıcı Düzenleme
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('admin/css/main.css') }}">
@endsection

@section('content')
    <div class="d-flex flex-row min-vh-100">
        @include('lpanel.partials.sidebar')

        <div class="d-flex flex-column flex-grow-1 custom-color min-w-0">
            @include('lpanel.partials.topbar')

            <div class="flex-grow-1 p-3 p-md-4">
                <div class="mb-4">
                    <h1 class="fs-2 fw-bold mb-1">Kullanıcı Düzenle</h1>
                    <p class="text-muted">Kullanıcı güncellemelerinin yapıldığı bölüm</p>
                </div>

                <div class="custom-border rounded-4 bg-white shadow-sm w-100 overflow-hidden">
                    <div class="custom-border-bottom">
                        <h2 class="fs-4 px-4 py-3 m-0">
                            <i class="bi bi-person fs-4 me-2 text-danger"></i>
                            Kullanıcı Bilgileri
                        </h2>
                    </div>

                    <form action="{{ route('updateuser') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="p-3 p-md-4">
                            <div class="mb-4">
                                <label for="adsoyad" class="form-label fw-bold">
                                    AD - SOYAD
                                </label>
                                <input type="text" id="adsoyad" name="adsoyad" class="form-control custom-border w-100"
                                    placeholder="Kullanıcı adı giriniz." value="">
                            </div>
                            <div class="mb-4">
                                <label for="kullanici_adi" class="form-label fw-bold">
                                    KULLANICI ADI
                                </label>
                                <input type="text" id="kullanici_adi" name="kullanici_adi"
                                    class="form-control custom-border w-100" placeholder="Kullanıcı adı giriniz."
                                    value="">
                            </div>
                            <div class="mb-4">
                                <label for="kullanici_tur" class="form-label fw-bold">
                                    KULLANICI TÜRÜ
                                </label>
                                <select name="kullanici_tur" id="kullanici_tur" class="form-control">
                                    
                                    <option value="istanbul">İstanbul</option>
                                    <option value="ankara">Ankara</option>
                                    <option value="izmir">İzmir</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="kullanici_durum" class="form-label fw-bold">
                                    DURUM
                                </label>
                                <select name="kullanici_durum" id="kullanici_durum" class="form-control">
                                    
                                    <option value="istanbul">İstanbul</option>
                                    <option value="ankara">Ankara</option>
                                    <option value="izmir">İzmir</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="sifre" class="form-label fw-bold">
                                    ŞİFRE
                                </label>
                                <input type="password" id="sifre" name="sifre"
                                    class="form-control custom-border w-100" placeholder="Şifre giriniz." value="">
                            </div>
                            <div class="mb-4">
                                <label for="sifre_tekrar" class="form-label fw-bold">
                                    ŞİFRE TEKRAR
                                </label>
                                <input type="password" id="sifre_tekrar" name="sifre_tekrar"
                                    class="form-control custom-border w-100" placeholder="Şifre giriniz." value="">
                            </div>
                            <div class="mb-4">
                                <label for="kullanici_foto" class="form-label fw-bold">
                                    KULLANICI FOTOĞRAFI
                                </label>
                                <input class="form-control w-100" type="file" id="kullanici_foto" name="kullanici_foto"
                                    accept="image/jpeg,image/png,image/webp">
                                <div class="form-text text-muted text-wrap">
                                    <i class="bi bi-info-circle me-1"></i>
                                    Maksimum dosya boyutu: 2MB. Desteklenen formatlar: JPG, PNG, WEBP.
                                </div>
                            </div>

                            <div class="d-flex flex-wrap gap-2 gap-md-3 pt-2">
                                <button type="submit" class="btn btn-success px-4 py-2 col-12 col-sm-auto">
                                    <i class="bi bi-check-circle me-2"></i>
                                    Kullanıcı Güncelle
                                </button>
                                <a href="{{ route('user') }}" class="btn btn-outline-danger px-4 py-2 col-12 col-sm-auto text-center">
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
