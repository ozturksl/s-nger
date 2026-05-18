@extends('lpanel.layouts.layout')

@section('title')
    İçerik Yönetimi
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('admin/css/main.css') }}">
@endsection

@if ($errors->any())
    <div
        style="background-color: #f8d7da; color: #721c24; padding: 15px; border-radius: 5px; margin-bottom: 20px; border: 1px solid #f5c6cb;">
        <strong style="display: block; margin-bottom: 5px;">Lütfen aşağıdaki hataları düzeltiniz:</strong>
        <ul style="margin: 0; padding-left: 20px;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('error'))
    <div
        style="background-color: #f8d7da; color: #721c24; padding: 15px; border-radius: 5px; margin-bottom: 20px; border: 1px solid #f5c6cb;">
        <strong>Hata:</strong> {{ session('error') }}
    </div>
@endif

@if (session('success'))
    <div
        style="background-color: #d4edda; color: #155724; padding: 15px; border-radius: 5px; margin-bottom: 20px; border: 1px solid #c3e6cb;">
        <strong>Başarılı!</strong> {{ session('success') }}
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
                    <p class="text-muted">Site içeriklerini değiştirildiği bölüm</p>
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
