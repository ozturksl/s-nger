@extends('layouts.layout')

@section('title')
    Ürünler
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('site/css/main.css') }}">
@endsection

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12">
                    <h1 class="fw-bold">ÜRÜNLER</h1>
                    <p class="text-muted">Endüstriyel makineler ve ekipmanlar arasından ihtiyacınıza uygun ürünleri seçin.
                    </p>
                </div>
            </div>

            <div class="row g-4">
                <aside class="col-lg-3">
                    <div class="card shadow-sm filter-card border-0">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h5 class="card-title mb-0">Filtreler</h5>
                                <a href="#" class="small text-primary text-decoration-none">Sıfırla</a>
                            </div>

                            <div class="mb-4">
                                <label class="form-label filter-section-title">Ara</label>
                                <div class="position-relative">
                                    <input type="search" class="form-control filter-search" placeholder="Ürün ara...">
                                    <span class="filter-icon">🔍</span>
                                </div>
                            </div>

                            <div class="mb-4">
                                <h6 class="filter-section-title">Kategori</h6>
                                <ul class="filter-list list-unstyled mb-0">
                                    <li><a href="#" class="filter-link">Tüm Ürünler <span class="badge">12</span></a>
                                    </li>
                                    <li><a href="#" class="filter-link">Makineler <span class="badge">8</span></a>
                                    </li>
                                    <li><a href="#" class="filter-link">Aksesuarlar <span class="badge">5</span></a>
                                    </li>
                                    <li><a href="#" class="filter-link">Yedek Parçalar <span
                                                class="badge">3</span></a></li>
                                </ul>
                            </div>

                            <div class="mb-4">
                                <h6 class="filter-section-title">Fiyat Aralığı</h6>
                                <div class="range-control">
                                    <div class="d-flex justify-content-between mb-2">
                                        <small class="text-muted">500 TL</small>
                                        <small class="text-muted">2.000 TL</small>
                                    </div>
                                    <input type="range" class="form-range" min="0" max="3000" value="1500">
                                </div>
                            </div>

                            <div>
                                <h6 class="filter-section-title">Sırala</h6>
                                <select class="form-select filter-select">
                                    <option>Öne Çıkanlar</option>
                                    <option>Fiyata Göre Artan</option>
                                    <option>Fiyata Göre Azalan</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </aside>

                <div class="col-lg-9">
                    <div class="row g-3">
                        @php
                            $products = [
                                [
                                    'title' => 'Endüstriyel Makina',
                                    'price' => '600 TL',
                                    'image' => 'site/assets/makina.png',
                                ],
                                [
                                    'title' => 'Yüksek Kapasiteli Pres',
                                    'price' => '1.250 TL',
                                    'image' => 'site/assets/makina.png',
                                ],
                                [
                                    'title' => 'Hassas Kesme Ünitesi',
                                    'price' => '950 TL',
                                    'image' => 'site/assets/makina.png',
                                ],
                                [
                                    'title' => 'Otomatik Besleme Sistemi',
                                    'price' => '1.750 TL',
                                    'image' => 'site/assets/makina.png',
                                ],
                                ['title' => 'Taşıma Arabası', 'price' => '420 TL', 'image' => 'site/assets/makina.png'],
                                ['title' => 'Bakım Kiti', 'price' => '220 TL', 'image' => 'site/assets/makina.png'],
                            ];
                        @endphp

                        @foreach ($products as $key => $product)
                            @php
                                $price = str_replace([' TL', '.'], ['', ''], $product['price']);
                            @endphp
                            <div class="col-md-6 col-xl-4">
                                <div class="card h-100 shadow-lg product-card overflow-hidden border-0">
                                    <div class="position-relative overflow-hidden">
                                        <img src="../{{ $product['image'] }}" class="card-img-top product-card-img"
                                            alt="{{ $product['title'] }}">
                                    </div>
                                    <div class="card-body d-flex flex-column p-4">
                                        <a href="{{ route('product-detail', ['id' => $key]) }}" style="text-decoration: none; color: inherit;">
                                            <h5 class="card-title mb-2">{{ $product['title'] }}</h5>
                                        </a>
                                        <p class="text-secondary small mb-4">Yüksek performanslı, güvenilir ürün.</p>
                                        <div class="mt-auto">
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <p class="fw-bold text-danger mb-0 fs-5">{{ $product['price'] }}</p>
                                            </div>
                                            <a href="{{ route('product-detail', ['id' => $key]) }}" class="btn btn-outline-dark w-100 mt-2">
                                                Detayları Gör
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
