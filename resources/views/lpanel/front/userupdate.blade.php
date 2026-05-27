@extends('lpanel.layouts.layout')

@section('title')
    Kullanıcı Düzenle
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('admin/css/main.css') }}">
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

@if ($errors->any())
    <div class="alert alert-danger mb-4" role="alert">
        <div class="fw-bold mb-2">
            <i class="bi bi-x-circle-fill me-2"></i>
            Lütfen formdaki hataları düzeltiniz:
        </div>
        <ul class="mb-0 ps-3">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@section('content')
    <div class="d-flex flex-row min-vh-100">
        @include('lpanel.partials.sidebar')

        <div class="d-flex flex-column flex-grow-1 custom-color min-w-0">
            @include('lpanel.partials.topbar')

            <div class="flex-grow-1 p-3 p-md-4">
                <div class="mb-4">
                    <h1 class="fs-2 fw-bold mb-1">Kullanıcı Düzenle</h1>
                    <p class="text-muted">Mevcut kullanıcıları düzenleyin./p>
                </div>

                <div class="custom-border rounded-4 bg-white shadow-sm w-100 overflow-hidden">
                    <div class="custom-border-bottom">
                        <h2 class="fs-4 px-4 py-3 m-0">
                            <i class="bi bi-person fs-4 me-2 text-danger"></i>
                            Kullanıcı Bilgileri
                        </h2>
                    </div>

                    <form action="{{ route('updateduser', $user->user_id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ $user->user_id }}">
                        <div class="p-3 p-md-4">
                            <div class="mb-4">
                                <label class="form-label fw-bold">
                                    AD - SOYAD
                                </label>
                                <input type="text" name="adsoyad" class="form-control custom-border w-100"
                                    placeholder="Ad ve soyad giriniz." value="{{ $user->user_name }}">
                            </div>
                            <div class="mb-4">
                                <label class="form-label fw-bold">
                                    KULLANICI ADI
                                </label>
                                <input type="text" name="kullanici_adi"
                                    class="form-control custom-border w-100" placeholder="Kullanıcı adı giriniz."
                                    value="{{ $user->user_nickname }}">
                            </div>
                            <div class="mb-4">
                                <label class="form-label fw-bold">
                                    KULLANICI TÜRÜ
                                </label>
                                <select name="kullanici_tur" class="form-control custom-border">
                                    @foreach ($usertype as $type)
                                        <option value="{{ $type->usertype_id }}">{{ $type->usertype_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-4">
                                <label class="form-label fw-bold">
                                    DURUM
                                </label>
                                <select name="kullanici_durum" class="form-control custom-border">
                                    @foreach ($userstatus as $status)
                                        <option value="{{ $status->user_status_id }}">{{ $status->user_status_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-4">
                                <label class="form-label fw-bold">
                                    ŞİFRE
                                </label>
                                <input type="password" name="sifre"
                                    class="form-control custom-border w-100" placeholder="Şifre giriniz." value="">
                            </div>
                            <div class="mb-4">
                                <label class="form-label fw-bold">
                                    ŞİFRE TEKRAR
                                </label>
                                <input type="password" name="sifre_tekrar"
                                    class="form-control custom-border w-100" placeholder="Şifre giriniz." value="">
                            </div>
                            <div class="mb-4">
                                @if ($user)
                                    <img src="{{ asset('storage/user/' . $user->user_photo) }}" width="150"
                                        height="auto" alt="">
                                @else
                                    <img src="{{ asset('admin/assets/images.png') }}" width="150"
                                        height="auto" alt="">
                                @endif
                                <label class="form-label fw-bold">
                                    KULLANICI FOTOĞRAFI
                                </label>
                                <input class="form-control w-100 custom-border" type="file"
                                    name="kullanici_foto" accept="image/jpeg,image/png,image/webp">
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
                                <a href="{{ route('user') }}"
                                    class="btn btn-outline-danger px-4 py-2 col-12 col-sm-auto text-center">
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
