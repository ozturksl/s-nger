@extends('lpanel.layouts.layout')

@section('title')
    SEO Ayarları
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
                <div class="mb-4">
                    <h1 class="fs-2 fw-bold mb-1">SEO Ayarları</h1>
                    <p class="text-muted">SEO Ayarlarının yapıldığı bölüm</p>
                </div>
                <div class="custom-border rounded-4 bg-white shadow-sm">
                    <div class="custom-border-bottom">
                        <h2 class="fs-4 px-4 py-3 m-0">
                            <i class="bi bi-alphabet fs-4 me-2 text-danger"></i>
                            SEO Ayarları
                        </h2>
                    </div>

                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="p-4">
                            <div class="mb-4">
                                <label for="" class="form-label fw-bold">
                                    SEO AÇIKLAMA
                                </label>
                                <textarea type="url" class="form-control custom-border" placeholder="Açıklama giriniz." value=""></textarea>
                            </div>
                            <div class="mb-4">
                                <label for="" class="form-label fw-bold">
                                    ANAHTAR KELİMELER
                                </label>
                                <textarea type="text" class="form-control custom-border"
                                    placeholder="Anahtar kelime giriniz." value=""></textarea>
                            </div>
                            <div class="d-flex gap-3 pt-2">
                                <button type="submit" class="btn btn-success px-4 py-2">
                                    <i class="bi bi-check-circle me-2"></i>
                                    Kaydet
                                </button>
                                <a href="#" class="btn btn-outline-danger px-4 py-2">
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
