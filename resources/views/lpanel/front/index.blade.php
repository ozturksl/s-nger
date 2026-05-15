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
        <div class="d-flex flex-column flex-grow-1 custom-color">
            @include('lpanel.partials.topbar')
            <div class="flex-grow-1 p-4">
                <h1 class="fs-2 fw-bold">Dashboard</h1>
                <p class="fw-normal">Sistemi gerçek zamanlı izleyebildiğin ve kontrol edebildiğin alan.</p>

                <div class="row g-4 cards">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="custom-border rounded-4 bg-white p-4 h-100">
                            <i class="bi bi-clipboard-data text-danger fs-1"></i>
                            <div class="mt-4">
                                <h2 class="fw-bold fs-5">ÜRÜN SAYISI</h2>
                                <p class="fs-2 mb-0">30</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="custom-border rounded-4 bg-white p-4 h-100">
                            <i class="bi bi-car-front text-danger fs-1"></i>
                            <div class="mt-4">
                                <h2 class="fw-bold fs-5">BEKLEYEN KARGO</h2>
                                <p class="fs-2 mb-0">30</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="custom-border rounded-4 bg-white p-4 h-100">
                            <i class="bi bi-person-raised-hand text-danger fs-1"></i>
                            <div class="mt-4">
                                <h2 class="fw-bold fs-5">BEKLEYEN MÜŞTERİ</h2>
                                <p class="fs-2 mb-0">30</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row pt-5">
                    <div class="col-sm-12">
                        <div class="custom-border rounded-4 bg-white overflow-hidden">
                            <div class="custom-border-bottom p-4">
                                <h2 class="fw-bold fs-5 mb-0">SİPARİŞLER</h2>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
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
                                                <a href="#" class="me-2"><i
                                                        class="bi bi-pencil text-success"></i></a>
                                                <a href="#"><i class="bi bi-trash text-danger"></i></a>
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
                                                <a href="#" class="me-2"><i
                                                        class="bi bi-pencil text-success"></i></a>
                                                <a href="#"><i class="bi bi-trash text-danger"></i></a>
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
