@extends('layouts.layout')

@section('title')
    Ürünler
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('site/css/main.css') }}">
@endsection

@section('content')
    <section class="py-5 overflow-hidden">
        <div class="container">
            <div class="row mb-4 mx-0">
                <div class="col-12 px-0">
                    <h1 class="text-center fw-bold testimonials-title">ÜRÜNLER</h1>
                    <p class="text-center testimonials-subtitle text-muted">Ankara'da en çok tercih edilen, kaliteli ve
                        garantili sıfır ile ikinci el dikiş makinesi modellerimizi inceleyin.</p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-12">
                    <div class="row g-3 row-cols-md-4 row-cols-sm-2 row-cols-1">
                        @forelse($allProducts as $item)
                            <div class="col">
                                <div class="card shadow-lg product-card overflow-hidden border-0">
                                    <div class="position-relative overflow-hidden">
                                        <img src="{{ asset('storage/product/' . $item->product_photo) }}"
                                            class="card-img-top product-card-img" alt="">
                                    </div>
                                    <div class="card-body d-flex flex-column p-4">
                                        <a href="{{ route('product-detail', ['id' => $item->product_id]) }}"
                                            class="text-decoration-none color-inherit text-dark">
                                            <h5 class="card-title mb-2">{{ $item->product_name }}</h5>
                                        </a>
                                        <p class="text-secondary small mb-4 product-desc">{{ $item->product_comment}}</p>
                                        <div class="mt-auto">
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <p class="fw-bold text-danger mb-0 fs-5">{{ $item->product_price }}TL</p>
                                            </div>
                                            <a href="{{ route('product-detail', ['id' => $item->product_id]) }}"
                                                class="btn btn-outline-dark w-100 mt-2">
                                                Detayları Gör
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-12 text-center py-5 my-5">
                                <div class="mb-4 text-muted">
                                    <i class="bi bi-search fs-1 text-secondary opacity-50"></i>
                                </div>
                                <h3 class="fw-bold h4 text-dark mb-2">Ürün Bulunamadı</h3>
                                <p class="text-secondary mx-auto" style="max-width: 400px;">
                                    Aradığınız kriterlere uygun dikiş makinesi modeli şu anda stoklarımızda bulunmamaktadır.
                                </p>
                                <a href="{{ url('/') }}" class="btn btn-dark px-4 mt-3 rounded-pill">
                                    Ana Sayfaya Dön
                                </a>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
