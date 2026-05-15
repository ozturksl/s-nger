@extends('lpanel.layouts.layout')

@section('title')
    Giriş Yap
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('admin/css/main.css') }}">
@endsection

@section('content')
    <section>
        <div>
            <div class="container">
                <div class="row d-flex justify-content-center align-items-center p-2">
                    <div class="col-lg-4 border-danger shadow-lg p-3 border py-4">
                        <div class="text-center pb-4">
                            <img src="{{ asset('admin/assets/grlogo.png') }}" width="100px" height="auto">
                        </div>
                        <div class="pb-4">
                            <h1 class="text-center text-danger h2 fw-bold">Pfaff & Singer</h1>
                            <p class="text-center text-secondary h5 fw-bold">YÖNETİM PANELİ</p>
                        </div>

                        <form action="" class="px-3 border-danger border-bottom border-1 pb-4">
                            <div class="pb-4">
                                <label class="fw-bold" for="">KULLANICI ADI</label>
                                <br>
                                <input class="p-3 col-11 border-danger form-control rounded-0" type="text"
                                    placeholder="Kullanıcı adınızı girin">
                            </div>
                            <div class="pb-4">
                                <label class="fw-bold" for="">ŞİFRE</label>
                                <br>
                                <input class="p-3 col-11 border-danger form-control rounded-0" type="password"
                                    placeholder="Şifrenizi girin">
                            </div>
                            <button class="bg-danger form-control rounded-0 py-3 text-white fw-bold" type="input">
                                GİRİŞ
                                YAP</button>
                        </form>
                        <img src="{{ asset('admin/assets/tamir.png') }}" class="img-fluid pt-5">
                    </div>
                </div>
                <p class="text-center text-secondary mt-2">© 2026 SINGER & PFAFF YETKİLİ SERVİSİ. TÜM HAKLARI SAKLIDIR.</p>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script src="{{ asset('admin/js/main.js') }}"></script>
@endsection
