@extends('lpanel.layouts.layout')

@section('title')
    Ürün Yönetimi
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('admin/css/main.css') }}">
@endsection

@section('content')
    <div class="d-flex flex-row min-vh-100">
        @include('lpanel.partials.sidebar')
        <div class="d-flex flex-column flex-grow-1 custom-color">
            @include('lpanel.partials.topbar')
            <div class="flex-grow-1 p-4">
                <div>
                    <div class="container">
                        <h1 class="fs-2 fw-bold">Ürün Ekle</h1>
                        <p>Yeni ürün eklenilen sayfa</p>
                        <div class="">
                            <div>
                                <h1><i class="bi bi-cart fs-4 fw-bold me-2"></i>Ürün Bilgileri</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('admin/js/main.js') }}"></script>
@endsection
