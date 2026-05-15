@extends('layouts.layout')

@section('title')
    Alışveriş Sepeti
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('site/css/main.css') }}">
    <style>
        .cart-section {
            margin-top: 80px;
            margin-bottom: 50px;
        }
        
        .cart-header {
            background: linear-gradient(135deg, #b01c28 0%, #ff9800 100%);
            color: white;
            padding: 30px 0;
            margin-bottom: 30px;
            border-radius: 8px;
        }
        
        .cart-table {
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        
        .cart-table th {
            background-color: #f8f9fa;
            border-bottom: 2px solid #e9ecef;
            font-weight: 600;
            color: #333;
            padding: 15px;
        }
        
        .cart-table td {
            padding: 15px;
            vertical-align: middle;
            border-bottom: 1px solid #e9ecef;
        }
        
        .product-item img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 6px;
        }
        
        .empty-cart {
            text-align: center;
            padding: 60px 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        
        .empty-cart i {
            font-size: 80px;
            color: #ccc;
            margin-bottom: 20px;
            display: block;
        }
        
        .summary-card {
            background: white;
            border-radius: 8px;
            padding: 25px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            position: sticky;
            top: 90px;
        }
        
        .summary-card h5 {
            border-bottom: 2px solid #b01c28;
            padding-bottom: 15px;
            margin-bottom: 20px;
            color: #333;
            font-weight: 600;
        }
        
        .summary-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 12px;
            font-size: 14px;
        }
        
        .summary-row.total {
            border-top: 2px solid #e9ecef;
            padding-top: 15px;
            font-size: 18px;
            font-weight: 600;
            color: #b01c28;
        }
        
        .btn-checkout {
            background: linear-gradient(135deg, #b01c28 0%, #ff9800 100%);
            border: none;
            color: white;
            font-weight: 600;
            padding: 12px;
            border-radius: 6px;
            width: 100%;
            margin-top: 20px;
            cursor: pointer;
        }
        
        .btn-checkout:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(176, 28, 40, 0.4);
            color: white;
        }
        
        .btn-continue {
            background-color: #6c757d;
            border: none;
            color: white;
            font-weight: 600;
            padding: 12px;
            border-radius: 6px;
            width: 100%;
            margin-top: 10px;
            display: block;
            text-align: center;
            text-decoration: none;
        }
        
        .btn-continue:hover {
            background-color: #5a6268;
            color: white;
        }
        
        .btn-delete {
            background-color: #dc3545;
            border: none;
            color: white;
            padding: 6px 12px;
            border-radius: 4px;
            font-size: 12px;
            cursor: pointer;
        }
        
        .btn-delete:hover {
            background-color: #c82333;
        }
    </style>
@endsection

@section('content')
<div class="cart-section">
    <div class="container">
        <div class="cart-header">
            <h1 class="mb-0">🛒 Alışveriş Sepeti</h1>
        </div>

        <div class="row">
            <div class="col-lg-8">
                <div class="cart-table">
                    <table class="table table-hover mb-0" id="cartTable">
                        <thead>
                            <tr>
                                <th style="width: 40%;">Ürün</th>
                                <th style="width: 15%;">Fiyat</th>
                                <th style="width: 20%;">Miktar</th>
                                <th style="width: 15%;">Toplam</th>
                                <th style="width: 10%;">İşlem</th>
                            </tr>
                        </thead>
                        <tbody id="cartItems">
                        </tbody>
                    </table>
                </div>

                <div id="emptyCart" class="empty-cart" style="display: none; margin-top: 20px;">
                    <i class="fas fa-shopping-cart"></i>
                    <h4>Sepetiniz Boş</h4>
                    <p class="text-muted">Henüz ürün eklemediniz. Alışverişe başlamak için ürünler sayfasını ziyaret edin.</p>
                    <a href="{{ route('product') }}" class="btn btn-primary" style="margin-top: 15px;">
                        <i class="fas fa-shopping-bag"></i> Alışverişe Devam Et
                    </a>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="summary-card">
                    <h5>Sipariş Özeti</h5>
                    
                    <div class="summary-row">
                        <span>Ürün Sayısı:</span>
                        <strong id="itemCount">0</strong>
                    </div>
                    
                    <div class="summary-row">
                        <span>Ara Toplam:</span>
                        <strong id="subtotal">₺0.00</strong>
                    </div>
                    
                    <div class="summary-row">
                        <span>Kargo Ücreti:</span>
                        <strong id="shipping">₺0.00</strong>
                    </div>
                    
                    <div class="summary-row total">
                        <span>Genel Toplam:</span>
                        <span id="total">₺0.00</span>
                    </div>
                    
                    <button class="btn-checkout">
                        <i class="fas fa-lock"></i> Güvenli Ödeme Yap
                    </button>
                    <a href="{{ route('product') }}" class="btn-continue">
                        <i class="fas fa-arrow-left"></i> Alışverişe Devam Et
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script src="{{ asset('site/js/cart.js') }}"></script>
@endsection
