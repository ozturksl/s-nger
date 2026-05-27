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
            <div class="row g-4 mb-5">
                <div class="col-lg-6 col-12">
                    <div class="product-gallery">
                        <img src="{{ asset('site/assets/makina.png') }}" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6 col-12">
                    <div class="product-info">
                        <h1 class="product-title">Dikiş Makinası</h1>

                        <div class="product-price">500₺</div>

                        <div class="product-description">
                            Müşterilerin sıkça beğendiği ucuz fiyatlı dikiş makinası modeli.
                        </div>

                        <div class="product-features">
                            <h6>Ürün Özellikleri</h6>
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque odio, corporis vel ducimus ab tenetur deserunt officiis dignissimos eius nobis sunt adipisci! Perferendis necessitatibus qui ipsam. Deleniti eos asperiores laboriosam.</p>
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
