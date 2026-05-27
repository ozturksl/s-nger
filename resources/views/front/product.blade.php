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
                    <h1 class="fw-bold">ÜRÜNLER</h1>
                    <p class="text-muted">Endüstriyel makineler ve ekipmanlar arasından ihtiyacınıza uygun ürünleri seçin.</p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-12">
                    {{-- row-cols-md-4 ekleyerek orta ve büyük ekranlarda her sırayı kesin olarak 4 sütuna böldük --}}
                    <div class="row g-3 row-cols-md-4 row-cols-sm-2 row-cols-1">

                        <div class="col">
                            <div class="card shadow-lg product-card overflow-hidden border-0">
                                <div class="position-relative overflow-hidden">
                                    <img src="{{ asset('site/assets/makina.png') }}" class="card-img-top product-card-img" alt="">
                                </div>
                                <div class="card-body d-flex flex-column p-4">
                                    <a href="{{ route('product-detail', ['id' => 5]) }}" class="text-decoration-none color-inherit text-dark">
                                        <h5 class="card-title mb-2">Dikiş Makinası</h5>
                                    </a>
                                    <p class="text-secondary small mb-4 product-desc"></p>
                                    <div class="mt-auto">
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <p class="fw-bold text-danger mb-0 fs-5">500₺</p>
                                        </div>
                                        <a href="{{ route('product-detail', ['id' => 5]) }}" class="btn btn-outline-dark w-100 mt-2">
                                            Detayları Gör
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card shadow-lg product-card overflow-hidden border-0">
                                <div class="position-relative overflow-hidden">
                                    <img src="{{ asset('site/assets/makina.png') }}" class="card-img-top product-card-img" alt="">
                                </div>
                                <div class="card-body d-flex flex-column p-4">
                                    <a href="{{ route('product-detail', ['id' => 5]) }}" class="text-decoration-none color-inherit text-dark">
                                        <h5 class="card-title mb-2">Dikiş Makinası</h5>
                                    </a>
                                    <p class="text-secondary small mb-4 product-desc"></p>
                                    <div class="mt-auto">
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <p class="fw-bold text-danger mb-0 fs-5">500₺</p>
                                        </div>
                                        <a href="{{ route('product-detail', ['id' => 5]) }}" class="btn btn-outline-dark w-100 mt-2">
                                            Detayları Gör
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card shadow-lg product-card overflow-hidden border-0">
                                <div class="position-relative overflow-hidden">
                                    <img src="{{ asset('site/assets/makina.png') }}" class="card-img-top product-card-img" alt="">
                                </div>
                                <div class="card-body d-flex flex-column p-4">
                                    <a href="{{ route('product-detail', ['id' => 5]) }}" class="text-decoration-none color-inherit text-dark">
                                        <h5 class="card-title mb-2">Dikiş Makinası</h5>
                                    </a>
                                    <p class="text-secondary small mb-4 product-desc"></p>
                                    <div class="mt-auto">
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <p class="fw-bold text-danger mb-0 fs-5">500₺</p>
                                        </div>
                                        <a href="{{ route('product-detail', ['id' => 5]) }}" class="btn btn-outline-dark w-100 mt-2">
                                            Detayları Gör
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card shadow-lg product-card overflow-hidden border-0">
                                <div class="position-relative overflow-hidden">
                                    <img src="{{ asset('site/assets/makina.png') }}" class="card-img-top product-card-img" alt="">
                                </div>
                                <div class="card-body d-flex flex-column p-4">
                                    <a href="{{ route('product-detail', ['id' => 5]) }}" class="text-decoration-none color-inherit text-dark">
                                        <h5 class="card-title mb-2">Dikiş Makinası</h5>
                                    </a>
                                    <p class="text-secondary small mb-4 product-desc"></p>
                                    <div class="mt-auto">
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <p class="fw-bold text-danger mb-0 fs-5">500₺</p>
                                        </div>
                                        <a href="{{ route('product-detail', ['id' => 5]) }}" class="btn btn-outline-dark w-100 mt-2">
                                            Detayları Gör
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card shadow-lg product-card overflow-hidden border-0">
                                <div class="position-relative overflow-hidden">
                                    <img src="{{ asset('site/assets/makina.png') }}" class="card-img-top product-card-img" alt="">
                                </div>
                                <div class="card-body d-flex flex-column p-4">
                                    <a href="{{ route('product-detail', ['id' => 5]) }}" class="text-decoration-none color-inherit text-dark">
                                        <h5 class="card-title mb-2">Dikiş Makinası</h5>
                                    </a>
                                    <p class="text-secondary small mb-4 product-desc"></p>
                                    <div class="mt-auto">
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <p class="fw-bold text-danger mb-0 fs-5">500₺</p>
                                        </div>
                                        <a href="{{ route('product-detail', ['id' => 5]) }}" class="btn btn-outline-dark w-100 mt-2">
                                            Detayları Gör
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card shadow-lg product-card overflow-hidden border-0">
                                <div class="position-relative overflow-hidden">
                                    <img src="{{ asset('site/assets/makina.png') }}" class="card-img-top product-card-img" alt="">
                                </div>
                                <div class="card-body d-flex flex-column p-4">
                                    <a href="{{ route('product-detail', ['id' => 5]) }}" class="text-decoration-none color-inherit text-dark">
                                        <h5 class="card-title mb-2">Dikiş Makinası</h5>
                                    </a>
                                    <p class="text-secondary small mb-4 product-desc"></p>
                                    <div class="mt-auto">
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <p class="fw-bold text-danger mb-0 fs-5">500₺</p>
                                        </div>
                                        <a href="{{ route('product-detail', ['id' => 5]) }}" class="btn btn-outline-dark w-100 mt-2">
                                            Detayları Gör
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection