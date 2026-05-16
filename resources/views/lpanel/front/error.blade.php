@extends('lpanel.layouts.layout')

@section('title')
    Hata
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('admin/css/main.css') }}">
@endsection

@section('content')
    <nav class="navbar navbar-light custom-border-bottom p-4 w-100 overflow-hidden">
        <div class="navbar-brand d-flex align-items-center flex-wrap gap-2">
            <img src="{{ asset('site/assets/logo.png') }}" width="200" height="auto"
                class="d-inline-block align-top custom-border-right me-md-3" alt="Logo">
            <span class="mb-0 h5 fw-medium text-secondary">Yönetim Paneli</span>
        </div>
    </nav>

    <div class="container-fluid px-3 px-md-5">
        <div class="row align-items-center justify-content-center mx-0 w-100 overflow-hidden">

            <div class="col-lg-6 col-12 py-4 py-lg-5 text-center text-lg-start min-w-0">
                <h1 class="display-5 display-md-4 fw-bold text-dark mb-3 text-wrap">Sayfa Sanırım Bir Yerlerde Kayboldu...
                </h1>

                <p class="text-muted mb-4 fs-5 text-wrap">
                    Aradığınız sayfayı biz de her yerde aradık ama maalesef bulamadık.
                    Muhtemelen linkte ufak bir yazım yanlışı yapıldı ya da aradığınız içerik,
                    sistemimizi güncellerken başka bir adrese taşındı. Belki de sayfa kısa
                    bir mola vermek istemiştir, kim bilir?
                </p>

                <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center justify-content-lg-start">
                    <a class="btn btn-danger btn-lg px-4 d-inline-flex align-items-center justify-content-center col-12 col-sm-auto"
                        href="{{ route('dashboard') }}">
                        <i class="bi bi-columns-gap me-2"></i>
                        Panele Dön
                    </a>
                    <a class="btn btn-outline-danger btn-lg px-4 d-inline-flex align-items-center justify-content-center col-12 col-sm-auto"
                        href="{{ url('/admin/support') }}">
                        <i class="bi bi-headset me-2"></i>
                        Destek Al
                    </a>
                </div>
            </div>

            <div class="col-lg-6 col-12 d-none d-lg-flex justify-content-center align-items-center min-w-0">
                <img src="{{ asset('admin/assets/tamir.png') }}" class="img-fluid rounded-3 mw-100" alt="404 Hata">
            </div>

        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('admin/js/main.js') }}"></script>
@endsection
