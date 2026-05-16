@extends('lpanel.layouts.layout')

@section('title')
    Dashboard
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('admin/css/main.css') }}">
@endsection

@section('content')
    <div class="d-flex flex-row min-vh-100">
        @include('lpanel.partials.sidebar')

        <div class="d-flex flex-column flex-grow-1 custom-color min-w-0">
            @include('lpanel.partials.topbar')

            <div class="flex-grow-1 p-3 p-md-4">
                <h1 class="fs-2 fw-bold text-wrap">Dashboard</h1>
                <p class="fw-normal text-wrap">Sistemi gerçek zamanlı izleyebildiğin ve kontrol edebildiğin alan.</p>

                <div class="row g-3 g-md-4 cards">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="custom-border rounded-4 bg-white p-4 h-100 w-100 overflow-hidden">
                            <i class="bi bi-clipboard-data text-danger fs-1"></i>
                            <div class="mt-4">
                                <h2 class="fw-bold fs-5 text-truncate">ÜRÜN SAYISI</h2>
                                <p class="fs-2 mb-0 text-truncate">30</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="custom-border rounded-4 bg-white p-4 h-100 w-100 overflow-hidden">
                            <i class="bi bi-car-front text-danger fs-1"></i>
                            <div class="mt-4">
                                <h2 class="fw-bold fs-5 text-truncate">BEKLEYEN KARGO</h2>
                                <p class="fs-2 mb-0 text-truncate">30</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="custom-border rounded-4 bg-white p-4 h-100 w-100 overflow-hidden">
                            <i class="bi bi-person-raised-hand text-danger fs-1"></i>
                            <div class="mt-4">
                                <h2 class="fw-bold fs-5 text-truncate">BEKLEYEN MÜŞTERİ</h2>
                                <p class="fs-2 mb-0 text-truncate">30</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row pt-4 pt-md-5 mx-0 w-100">
                    <div class="col-12 px-0">
                        <div class="custom-border rounded-4 bg-white overflow-hidden w-100">
                            <div class="custom-border-bottom p-4">
                                <h2 class="fw-bold fs-5 mb-0 text-truncate">SİPARİŞLER</h2>
                            </div>

                            <div class="table-responsive w-100">
                                <table class="table table-hover mb-0 text-nowrap">
                                    <thead>
                                        <tr class="custom-border-bottom">
                                            <th>Müşteri</th>
                                            <th>Tarih</th>
                                            <th>Adres</th>
                                            <th>Fiyat</th>
                                            <th>Ürünler</th>
                                            <th>Durum</th>
                                            <th>Eylem</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Ahmet Yılmaz</td>
                                            <td>14.05.2026</td>
                                            <td>İstanbul</td>
                                            <td>250 ₺</td>
                                            <td>Ürün A</td>
                                            <td><span class="badge bg-warning">Beklemede</span></td>
                                            <td>
                                                <a href="#"><i class="bi bi-trash text-danger ms-3"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Ayşe Demir</td>
                                            <td>13.05.2026</td>
                                            <td>Ankara</td>
                                            <td>180 ₺</td>
                                            <td>Ürün B</td>
                                            <td><span class="badge bg-success">Onaylandı</span></td>
                                            <td>
                                                <a href="#"><i class="bi bi-trash text-danger ms-3"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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
