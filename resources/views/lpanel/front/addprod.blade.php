@extends('lpanel.layouts.layout')

@section('title')
    Ürün Yönetimi
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('admin/css/main.css') }}">
@endsection

@section('content')
    <div class="d-flex flex-row min-vh-100">
        @include('lpanel.partials.sidebar')
        <div class="d-flex flex-column flex-grow-1 custom-color">
            @include('lpanel.partials.topbar')
            <div class="flex-grow-1 p-4">
                <div>
                    <h1 class="fs-2 fw-bold">Ürün Ekle</h1>
                    <p>Yeni ürün eklenilen sayfa</p>
                    <div class="">
                        <div class="custom-border rounded-4 mt-5 py-4">
                            <div class="custom-border-bottom">
                                <h1 class="fs-3 px-5 py-2"><i class="bi bi-cart fs-3 me-2 text-danger"></i>Ürün Bilgileri
                                </h1>
                            </div>
                            <form>
                                <div class="p-4">
                                    <label class="fw-bold">ÜRÜN ADI</label>
                                    <input type="text" class="form-control custom-border "
                                        placeholder="Ürün Adı Giriniz">
                                </div>
                                <div class="p-4">
                                    <label class="fw-bold">ÜRÜN AÇIKLAMASI</label>
                                    <textarea type="text" class="form-control custom-border" placeholder="Ürün Açıklaması Giriniz"></textarea>
                                </div>
                                <div class="p-4">
                                    <label class="fw-bold">ÜRÜN FİYATI</label>
                                    <input type="text" class="form-control custom-border"
                                        placeholder="Ürün Fiyatı Giriniz">
                                </div>
                                <div class="p-4">
                                    <label class="fw-bold">ÜRÜN ÖZELLİKLERİ</label>
                                    <textarea type="text" class="form-control custom-border" placeholder="Ürün Özelliği Giriniz"></textarea>
                                </div>
                                <div class="p-4">
                                    <label for="fotoYukle" class="form-label fw-bold text-secondary">Profil Fotoğrafı
                                        Seçin
                                    </label>
                                    <input class="form-control" type="file" id="fotoYukle" name="profil_foto"
                                        accept="image/*">
                                    <div class="form-text">Maksimum dosya boyutu: 2MB. Sadece JPG, PNG formatları
                                        desteklenir.
                                    </div>
                                </div>
                                <div>
                                    <button></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('admin/js/main.js') }}"></script>
@endsection
