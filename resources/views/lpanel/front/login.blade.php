@extends('lpanel.layouts.layout')

@section('title')
    Giriş Yap
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('admin/css/main.css') }}">
@endsection

@section('content')
    <section class="min-vh-100 d-flex align-items-center justify-content-center bg-light py-4">
        <div class="container-fluid px-3">
            <div class="row justify-content-center mx-0 w-100">
                <div
                    class="col-12 col-sm-10 col-md-8 col-lg-5 col-xl-4 bg-white border-danger shadow-lg p-3 border py-4 rounded-4 overflow-hidden">
                    <div class="text-center pb-4">
                        <img src="{{ asset('admin/assets/grlogo.png') }}" width="100" height="auto" class="img-fluid">
                    </div>
                    <div class="pb-4">
                        <h1 class="text-center text-danger h2 fw-bold text-wrap">Pfaff & Singer</h1>
                        <p class="text-center text-secondary h5 fw-bold text-wrap">YÖNETİM PANELİ</p>
                    </div>

                    <form action="" class="px-2 px-sm-3 border-danger border-bottom border-1 pb-4">
                        <div class="pb-3">
                            <label class="fw-bold mb-2" for="username">KULLANICI ADI</label>
                            <input id="username" class="p-3 w-100 border-danger form-control rounded-3" type="text"
                                placeholder="Kullanıcı adınızı girin">
                        </div>
                        <div class="pb-4">
                            <label class="fw-bold mb-2" for="password">ŞİFRE</label>
                            <input id="password" class="p-3 w-100 border-danger form-control rounded-3" type="password"
                                placeholder="Şifrenizi girin">
                        </div>
                        <button class="btn btn-danger w-100 rounded-3 py-3 text-white fw-bold" type="submit">
                            GİRİŞ YAP
                        </button>
                    </form>
                    <div class="text-center">
                        <img src="{{ asset('admin/assets/tamir.png') }}" class="img-fluid pt-4 mw-100"
                            style="max-height: 200px; object-fit: contain;">
                    </div>
                </div>
            </div>
            <p class="text-center text-secondary mt-3 px-3 small text-wrap">© 2026 SINGER & PFAFF YETKİLİ SERVİSİ. TÜM
                HAKLARI SAKLIDIR.</p>
        </div>
    </section>
@endsection

@section('js')
    <script src="{{ asset('admin/js/main.js') }}"></script>
@endsection
