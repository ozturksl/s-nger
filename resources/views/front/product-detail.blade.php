@extends('layouts.layout')

@section('title')
    Ürün Detayı
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('site/css/main.css') }}">
    <style>
        .product-detail-section {
            margin-top: 80px;
            margin-bottom: 50px;
        }

        .product-gallery {
            background: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        .product-gallery img {
            width: 100%;
            height: 400px;
            object-fit: cover;
            border-radius: 6px;
        }

        .product-info {
            background: white;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        .product-title {
            font-size: 28px;
            font-weight: 600;
            color: #333;
            margin-bottom: 15px;
        }

        .product-rating {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            gap: 10px;
        }

        .stars {
            color: #ffc107;
            font-size: 14px;
        }

        .product-price {
            font-size: 36px;
            font-weight: 700;
            color: #b01c28;
            margin: 20px 0;
        }

        .price-info {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 6px;
            margin-bottom: 20px;
            font-size: 14px;
        }

        .product-description {
            color: #666;
            line-height: 1.8;
            margin: 20px 0;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 6px;
            border-left: 4px solid #b01c28;
        }

        .quantity-section {
            display: flex;
            align-items: center;
            gap: 15px;
            margin: 25px 0;
        }

        .product-features {
            margin: 30px 0;
        }

        .product-features h6 {
            font-weight: 600;
            color: #333;
            margin-bottom: 15px;
        }

        .features-list {
            list-style: none;
            padding: 0;
        }

        .features-list li {
            padding: 10px 0;
            border-bottom: 1px solid #e9ecef;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .features-list li:last-child {
            border-bottom: none;
        }

        .features-list i {
            color: #b01c28;
            width: 20px;
        }

        .related-products {
            margin-top: 50px;
            padding-top: 40px;
            border-top: 2px solid #e9ecef;
        }

        .related-products h5 {
            font-weight: 600;
            color: #333;
            margin-bottom: 25px;
        }

        .related-card {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            transition: transform 0.2s;
        }

        .related-card:hover {
            transform: translateY(-5px);
        }

        .related-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .related-card-body {
            padding: 15px;
        }

        .related-card-title {
            font-weight: 600;
            color: #333;
            margin-bottom: 10px;
        }

        .related-card-price {
            color: #b01c28;
            font-weight: 600;
            font-size: 18px;
        }

        .breadcrumb-section {
            margin-bottom: 20px;
        }

        .breadcrumb {
            background: transparent;
            padding: 0;
        }

        .breadcrumb-item.active {
            color: #b01c28;
        }
    </style>
@endsection

@section('content')
<div class="product-detail-section">
    <div class="container">
        <!-- Breadcrumb -->
        <div class="breadcrumb-section">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Anasayfa</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('product') }}">Ürünler</a></li>
                    <li class="breadcrumb-item active" id="breadcrumbProduct">Ürün Detayı</li>
                </ol>
            </nav>
        </div>

        <!-- Product Detail -->
        <div class="row mb-5">
            <div class="col-lg-6">
                <div class="product-gallery">
                    <img id="productImage" src="https://via.placeholder.com/400" alt="Ürün Resmi">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="product-info">
                    <h1 class="product-title" id="productTitle">Ürün Adı</h1>

                    <div class="product-rating">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <span class="text-muted">(127 değerlendirme)</span>
                    </div>

                    <div class="product-price" id="productPrice">₺0.00</div>

                    <div class="price-info">
                        <i class="fas fa-shipping-fast"></i> <strong>Kargo:</strong> ₺50 - 3 iş günü içinde teslimat<br>
                        <i class="fas fa-check-circle"></i> <strong>Stok:</strong> Tersevmekte<br>
                        <i class="fas fa-undo"></i> <strong>İade:</strong> 30 gün içinde ücretsiz iade
                    </div>

                    <div class="product-description" id="productDescription">
                        Yüksek performanslı, güvenilir ve dayanıklı ürün. Endüstriyel kullanımlar için tasarlanmış, 
                        uzun ömürlü ve verimli çalışma garantisidir.
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

        <!-- Related Products -->
        <div class="related-products">
            <h5>Benzer Ürünler</h5>
            <div class="row g-4">
                @php
                    $relatedProducts = [
                        ['id' => 1, 'name' => 'Yüksek Kapasiteli Pres', 'price' => '1.250', 'image' => '../site/assets/makina.png'],
                        ['id' => 2, 'name' => 'Hassas Kesme Ünitesi', 'price' => '950', 'image' => '../site/assets/makina.png'],
                        ['id' => 3, 'name' => 'Otomatik Besleme Sistemi', 'price' => '1.750', 'image' => '../site/assets/makina.png'],
                        ['id' => 4, 'name' => 'Taşıma Arabası', 'price' => '420', 'image' => '../site/assets/makina.png'],
                    ];
                @endphp

                @foreach($relatedProducts as $item)
                    <div class="col-md-6 col-lg-3">
                        <div class="related-card">
                            <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}">
                            <div class="related-card-body">
                                <div class="related-card-title">{{ $item['name'] }}</div>
                                <div class="related-card-price">₺{{ $item['price'] }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<script>
    // URL parametrelerinden ürün ID'sini al
    const urlParams = new URLSearchParams(window.location.search);
    const productId = urlParams.get('id');

    // Ürün verileri
    const products = {
        0: { name: 'Endüstriyel Makina', price: 600, image: '../site/assets/makina.png', desc: 'Endüstriyel işlemler için tasarlanmış yüksek performanslı makine.' },
        1: { name: 'Yüksek Kapasiteli Pres', price: 1250, image: '../site/assets/makina.png', desc: 'Büyük kapasiteli pres sistemi, yoğun kullanım için uygun.' },
        2: { name: 'Hassas Kesme Ünitesi', price: 950, image: '../site/assets/makina.png', desc: 'Hassas kesme işlemleri için optimize edilmiş ekipman.' },
        3: { name: 'Otomatik Besleme Sistemi', price: 1750, image: '../site/assets/makina.png', desc: 'Otomatik besleme işlemlerini kontrol eden akıllı sistem.' },
        4: { name: 'Taşıma Arabası', price: 420, image: '../site/assets/makina.png', desc: 'Ağır yükleri taşımak için tasarlanmış metal arabaları.' },
        5: { name: 'Bakım Kiti', price: 220, image: '../site/assets/makina.png', desc: 'Tüm makinalar için kapsamlı bakım ve onarım kiti.' }
    };

    function loadProductDetail() {
        const id = productId || 0;
        const product = products[id];

        if (product) {
            document.getElementById('productTitle').textContent = product.name;
            document.getElementById('productPrice').textContent = '₺' + product.price.toFixed(2);
            document.getElementById('productImage').src = product.image;
            document.getElementById('productDescription').textContent = product.desc;
            document.getElementById('breadcrumbProduct').textContent = product.name;
        }
    }

    // Sayfa yüklendiğinde ürün detaylarını yükle
    document.addEventListener('DOMContentLoaded', loadProductDetail);
</script>
@endsection
