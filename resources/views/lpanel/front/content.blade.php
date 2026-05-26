@extends('lpanel.layouts.layout')

@section('title')
    İçerik Yönetimi
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
                    <h1 class="fs-2 fw-bold mb-1">İçerik Yönetimi</h1>
                    <p class="text-muted">Site içeriklerini düzenleyin.</p>
                </div>

                <div class="custom-border rounded-4 bg-white shadow-sm w-100 overflow-hidden">
                    <div class="custom-border-bottom">
                        <h2 class="fs-4 px-4 py-3 m-0">
                            <i class="bi bi-telephone fs-4 me-2 text-danger"></i>
                            İletişim Bilgileri
                        </h2>
                    </div>

                    <form action="{{ route('contentupdate') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="p-3 p-md-4">
                            <div class="mb-4">
                                <label for="insta-link" class="form-label fw-bold">
                                    INSTAGRAM LİNK
                                </label>
                                <input type="url" name="insta-link" class="form-control custom-border w-100"
                                    placeholder="Link giriniz.">
                            </div>
                            <div class="mb-4">
                                <label for="linkedin-link" class="form-label fw-bold">
                                    LİNKEDİN LİNK
                                </label>
                                <input type="url" name="linkedin-link" class="form-control custom-border w-100"
                                    placeholder="Link giriniz.">
                            </div>
                            <div class="mb-4">
                                <label for="harita" class="form-label fw-bold">
                                    HARİTA LİNK
                                </label>
                                <input type="url" name="harita" class="form-control custom-border w-100"
                                    placeholder="Link giriniz.">
                            </div>

                            <div class="mb-4">
                                <label for="address" class="form-label fw-bold">
                                    ADRES
                                </label>
                                <input type="text" name="address" class="form-control custom-border w-100"
                                    placeholder="Adres giriniz.">
                            </div>
                            <div class="mb-4">
                                <label for="mail" class="form-label fw-bold">
                                    MAİL ADRESİ
                                </label>
                                <input type="mail" name="mail" class="form-control custom-border w-100"
                                    placeholder="Mail giriniz.">
                            </div>

                            <div class="mb-4">
                                <label for="number1" class="form-label fw-bold">
                                    NUMARA-1
                                </label>
                                <input type="number" name="number1" class="form-control custom-border w-100"
                                    placeholder="Numara giriniz.">
                            </div>

                            <div class="mb-4">
                                <label for="number2" class="form-label fw-bold">
                                    NUMARA-2
                                </label>
                                <input type="number" name="number2" class="form-control custom-border w-100"
                                    placeholder="Numara giriniz.">
                            </div>


                            <div class="d-flex flex-wrap gap-2 gap-md-3 pt-2">
                                <button type="submit" class="btn btn-success px-4 py-2 col-12 col-sm-auto">
                                    <i class="bi bi-check-circle me-2"></i>
                                    Kaydet
                                </button>
                                <button type="reset" class="btn btn-outline-danger px-4 py-2 col-12 col-sm-auto">
                                    <i class="bi bi-x-circle me-2"></i>
                                    Sıfırla
                                </button>
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
