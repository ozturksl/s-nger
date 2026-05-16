@extends('layouts.layout')

@section('title')
    Ürün Detayı
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('site/css/main.css') }}">
@endsection

@section('content')
    <div class="product-detail-section overflow-hidden">
        <div class="container">
            <div class="breadcrumb-section mx-0">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Anasayfa</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('product') }}">Ürünler</a></li>
                        <li class="breadcrumb-item active"></li>
                    </ol>
                </nav>
            </div>
            <div class="row g-4 mb-5">
                <div class="col-lg-6 col-12">
                    <div class="product-gallery">
                        <img src="{{ asset('site/assets/makina.png') }}" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6 col-12">
                    <div class="product-info">
                        <h1 class="product-title">Dikiş Makinası</h1>

                        <div class="product-rating">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="text-muted small">(127 değerlendirme)</span>
                        </div>

                        <div class="product-price">500₺</div>

                        <div class="price-info">
                            <i class="fas fa-shipping-fast"></i> <strong>Kargo:</strong> ₺50 - 3 iş günü içinde teslimat<br>
                            <i class="fas fa-check-circle"></i> <strong>Stok:</strong> Tersevmekte<br>
                            <i class="fas fa-undo"></i> <strong>İade:</strong> 30 gün içinde ücretsiz iade
                        </div>

                        <div class="product-description">
                            Müşterilerin sıkça beğendiği ucuz fiyatlı dikiş makinası modeli.
                        </div>

                        <div class="product-features">
                            <h6><i class="fas fa-check"></i> Ürün Özellikleri</h6>
                            <ul class="features-list">
                                <li><i class="fas fa-check"></i> Yüksek kalite malzeme</li>
                                <li><i class="fas fa-check"></i> Uzun ömür garantisi</li>
                                <li><i class="fas fa-check"></i> Kolay kurulum ve kullanım</li>
                                <li><i class="fas fa-check"></i> Teknik destek hizmeti</li>
                                <li><i class="fas fa-check"></i> Sertifikalı ürün</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="related-products">
                <h5>Benzer Ürünler</h5>
                <div class="row g-4">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                        <div class="related-card">
                            <img src="{{ asset('site/assets/makina.png') }}" class="img-fluid">
                            <div class="related-card-body">
                                <div class="related-card-title text-truncate">Dikiş Makinası</div>
                                <div class="related-card-price">500₺</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                        <div class="related-card">
                            <img src="{{ asset('site/assets/makina.png') }}" class="img-fluid">
                            <div class="related-card-body">
                                <div class="related-card-title text-truncate">Dikiş Makinası</div>
                                <div class="related-card-price">500₺</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                        <div class="related-card">
                            <img src="{{ asset('site/assets/makina.png') }}" class="img-fluid">
                            <div class="related-card-body">
                                <div class="related-card-title text-truncate">Dikiş Makinası</div>
                                <div class="related-card-price">500₺</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                        <div class="related-card">
                            <img src="{{ asset('site/assets/makina.png') }}" class="img-fluid">
                            <div class="related-card-body">
                                <div class="related-card-title text-truncate">Dikiş Makinası</div>
                                <div class="related-card-price">500₺</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
