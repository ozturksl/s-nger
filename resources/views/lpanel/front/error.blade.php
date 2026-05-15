@extends('lpanel.layouts.layout')

@section('title')
    Hata
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('admin/css/main.css') }}">
@endsection

@section('content')
    <nav class="navbar navbar-light custom-border-bottom p-4">
        <div class="navbar-brand d-flex align-items-center">
            <img src="{{ asset('site/assets/logo.png') }}" width="200" height="auto"
                class="d-inline-block align-top custom-border-right me-3" alt="Logo">
            <span class="mb-0 h5 fw-medium text-secondary">Yönetim Paneli</span>
        </div>
    </nav>

    <div class="container">
        <div class="row align-items-center" style="min-height: calc(100vh - 150px);">

            <div class="col-lg-6 col-12 py-5 text-center text-lg-start">
                <h1 class="display-4 fw-bold text-dark mb-3">Sayfa Sanırım Bir Yerlerde Kayboldu...</h1>

                <p class="text-muted mb-4 fs-5" style="line-height: 1.6;">
                    Aradığınız sayfayı biz de her yerde aradık ama maalesef bulamadık.
                    Muhtemelen linkte ufak bir yazım yanlışı yapıldı ya da aradığınız içerik,
                    sistemimizi güncellerken başka bir adrese taşındı. Belki de sayfa kısa
                    bir mola vermek istemiştir, kim bilir?
                </p>

                <div class="d-grid d-sm-flex gap-3 justify-content-center justify-content-lg-start">
                    <a class="btn btn-danger btn-lg px-4 d-inline-flex align-items-center justify-content-center"
                        href="{{ route('dashboard') }}">
                        <i class="bi bi-columns-gap me-2"></i>
                        Panele Dön
                    </a>
                    <a class="btn btn-outline-danger btn-lg px-4 d-inline-flex align-items-center justify-content-center"
                        href="{{ url('/admin/support') }}">
                        <i class="bi bi-headset me-2"></i>
                        Destek Al
                    </a>
                </div>
            </div>

            <div class="col-lg-6 col-12 d-none d-lg-flex justify-content-center align-items-center">
                <img src="{{ asset('admin/assets/tamir.png') }}" class="img-fluid rounded-3" alt="404 Hata">
            </div>

        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('admin/js/main.js') }}"></script>
@endsection
