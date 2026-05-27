@extends('lpanel.layouts.layout')

@section('title')
    Ürün Düzenle
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
                    <h1 class="fs-2 fw-bold mb-1">Ürün Düzenle</h1>
                    <p class="text-muted">Mevcut ürünleri düzenleyin.</p>
                </div>

                <div class="custom-border rounded-4 bg-white shadow-sm w-100 overflow-hidden">
                    <div class="custom-border-bottom">
                        <h2 class="fs-4 px-4 py-3 m-0">
                            <i class="bi bi-cart fs-4 me-2 text-danger"></i>
                            Ürün Bilgileri
                        </h2>
                    </div>

                    <form action="{{ route('updatedproduct', $products->product_id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="p-3 p-md-4">
                            <div class="mb-4">
                                <label class="form-label fw-bold">
                                    ÜRÜN ADI
                                </label>
                                <input type="text" name="urun_adi" class="form-control custom-border w-100"
                                    placeholder="Ürün adı giriniz." value="">
                            </div>
                            <div class="mb-4">
                                <label class="form-label fw-bold">
                                    ÜRÜN AÇIKLAMASI
                                </label>
                                <textarea name="urun_aciklama" class="form-control custom-border w-100" placeholder="Ürün açıklaması giriniz."
                                    rows="4"></textarea>
                            </div>
                            <div class="mb-4">
                                <label for="urun_kategori" class="form-label fw-bold">
                                    KATEGORİ
                                </label>
                                <select name="category_id" class="form-control custom-border">

                                    @forelse ($categories as $category)
                                        <option value="{{ $category->category_id }}" @selected($category->category_id == $category->category_id)>
                                            {{ $category->category_name }}
                                        </option>
                                    @empty
                                        <option value="none" disabled selected>Kategori bulunamadı.</option>
                                    @endforelse
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="urun_durum" class="form-label fw-bold">
                                    DURUM
                                </label>
                                <select name="product_status_id" class="form-control custom-border">
                                    @foreach ($productstatus as $status)
                                        <option value="{{ $status->product_status_id }}">{{ $status->product_status_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-4">
                                <label class="form-label fw-bold">
                                    ÜRÜN FİYATI
                                </label>
                                <div class="input-group flex-nowrap">
                                    <input type="number" name="urun_fiyat" placeholder="Ürün fiyatı giriniz."
                                        class="form-control custom-border" placeholder="0.00" value="" step="0.01"
                                        min="0">
                                    <span class="input-group-text">₺</span>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-bold">
                                    ÜRÜN ÖZELLİKLERİ
                                </label>
                                <textarea name="urun_ozellikler" class="form-control custom-border w-100" placeholder="Ürün özelliği giriniz."
                                    rows="5"></textarea>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-bold">
                                    ÜRÜN FOTOĞRAFI
                                </label>
                                <input class="form-control w-100 custom-border" type="file" name="urun_foto"
                                    accept="image/jpeg,image/png,image/webp">
                                <div class="form-text text-muted text-wrap">
                                    <i class="bi bi-info-circle me-1"></i>
                                    Maksimum dosya boyutu: 2MB. Desteklenen formatlar: JPG, PNG, WEBP.
                                </div>
                            </div>

                            <div class="d-flex flex-wrap gap-2 gap-md-3 pt-2">
                                <button type="submit" class="btn btn-success px-4 py-2 col-12 col-sm-auto">
                                    <i class="bi bi-check-circle me-2"></i>
                                    Ürün Güncelle
                                </button>
                                <a href="{{ route('products') }}"
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
