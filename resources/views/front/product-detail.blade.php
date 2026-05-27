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
                        <img src="{{ asset('storage/product/' . $product->product_photo) }}" class="img-fluid" alt="{{ $product->product_name }}">
                    </div>
                </div>

                <div class="col-lg-6 col-12">
                    <div class="product-info">
                        <h1 class="product-title">{{ $product->product_name }}</h1>

                        <div class="product-price">{{ $product->product_price }}₺</div>

                        <div class="product-description">
                            {{ $product->product_comment }}
                        </div>

                        @if(!empty($product->product_feature))
                            <div class="product-features">
                                <h6>Ürün Özellikleri</h6>
                                <p>{{ $product->product_feature }}</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            
            <div class="related-products">
                <h5>Benzer Ürünler</h5>
                <div class="row g-4">
                    @forelse($relatedProducts as $related)
                        <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                            <a href="{{ route('product-detail', ['id' => $related->product_id]) }}" class="text-decoration-none text-dark">
                                <div class="related-card">
                                    <img src="{{ asset('storage/product/' . $related->product_photo) }}" class="img-fluid" alt="{{ $related->product_name }}">
                                    <div class="related-card-body">
                                        <div class="related-card-title text-truncate">{{ $related->product_name }}</div>
                                        <div class="related-card-price">{{ $related->product_price }}₺</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @empty
                        <div class="col-12 text-muted">
                            <p>Benzer ürün bulunmamaktadır.</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
