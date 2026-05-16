@extends('lpanel.layouts.layout')

@section('title')
    İçerik Yönetimi
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
                    <h1 class="fs-2 fw-bold mb-1">İçerik Yönetimi</h1>
                    <p class="text-muted">Site içeriklerini değiştirildiği bölüm</p>
                </div>

                <div class="custom-border rounded-4 bg-white shadow-sm w-100 overflow-hidden">
                    <div class="custom-border-bottom">
                        <h2 class="fs-4 px-4 py-3 m-0">
                            <i class="bi bi-telephone fs-4 me-2 text-danger"></i>
                            İletişim Bilgileri
                        </h2>
                    </div>

                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="p-3 p-md-4">
                            <div class="mb-4">
                                <label for="" class="form-label fw-bold">
                                    INSTAGRAM LİNK
                                </label>
                                <input type="url" class="form-control custom-border w-100" placeholder="Link giriniz."
                                    value="">
                            </div>
                            <div class="mb-4">
                                <label for="" class="form-label fw-bold">
                                    LINKEDIN LİNK
                                </label>
                                <input type="url" class="form-control custom-border w-100" placeholder="Link giriniz."
                                    value="">
                            </div>
                            <div class="mb-4">
                                <label for="" class="form-label fw-bold">
                                    ADRES
                                </label>
                                <input type="text" class="form-control custom-border w-100" placeholder="Adres giriniz."
                                    value="">
                            </div>
                            <div class="mb-4">
                                <label for="" class="form-label fw-bold">
                                    MAİL ADRESİ
                                </label>
                                <input type="mail" class="form-control custom-border w-100" placeholder="Mail giriniz."
                                    value="">
                            </div>

                            <div class="mb-4">
                                <label for="" class="form-label fw-bold">
                                    HARİTA LİNK
                                </label>
                                <input type="url" class="form-control custom-border w-100" placeholder="Link giriniz."
                                    value="">
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
