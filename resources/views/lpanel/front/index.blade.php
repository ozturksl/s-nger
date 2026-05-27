@extends('lpanel.layouts.layout')

@section('title')
    Dashboard
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('admin/css/main.css') }}">
@endsection

@if (session('success'))
    <div class="alert alert-success d-flex align-items-center mb-4" role="alert">
        <i class="bi bi-check-circle-fill me-2"></i>
        <div>{{ session('success') }}</div>
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger d-flex align-items-center mb-4" role="alert">
        <i class="bi bi-exclamation-triangle-fill me-2"></i>
        <div>{{ session('error') }}</div>
    </div>
@endif



@section('content')
    <div class="d-flex flex-row min-vh-100">
        @include('lpanel.partials.sidebar')

        <div class="d-flex flex-column flex-grow-1 custom-color min-w-0">
            @include('lpanel.partials.topbar')

            <div class="flex-grow-1 p-3 p-md-4">
                <h1 class="fs-2 fw-bold text-wrap">Dashboard</h1>
                <p class="fw-normal text-wrap">Sistemi gerçek zamanlı izleyin ve kontrol edin.</p>

                <div class="row g-3 g-md-4 cards">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="custom-border rounded-4 bg-white p-4 h-100 w-100 overflow-hidden">
                            <i class="bi bi-clipboard-data text-danger fs-1"></i>
                            <div class="mt-4">
                                <h2 class="fw-bold fs-5 text-truncate">AKTİF ÜRÜN / MODEL SAYISI</h2>
                                <p class="fs-2 mb-0 text-truncate">{{ $urunSayisi }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="custom-border rounded-4 bg-white p-4 h-100 w-100 overflow-hidden">
                            <i class="bi bi-envelope text-danger fs-1"></i>
                            <div class="mt-4">
                                <h2 class="fw-bold fs-5 text-truncate">GELEN MESAJLAR</h2>
                                <p class="fs-2 mb-0 text-truncate">{{ $mesajSayisi }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="custom-border rounded-4 bg-white p-4 h-100 w-100 overflow-hidden">
                            <i class="bi bi-person-raised-hand text-danger fs-1"></i>
                            <div class="mt-4">
                                <h2 class="fw-bold fs-5 text-truncate">TOPLAM MÜŞTERİ TALEPLERİ</h2>
                                <p class="fs-2 mb-0 text-truncate">{{ $talepSayisi }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row pt-4 pt-md-5 mx-0 w-100">
                    <div class="col-12 px-0">
                        <div class="custom-border rounded-4 bg-white overflow-hidden w-100">
                            <div class="custom-border-bottom p-4">
                                <h2 class="fw-bold fs-5 mb-0 text-truncate">MÜŞTERİ TALEPLERİ</h2>
                            </div>

                            <div class="table-responsive w-100">
                                <table class="table table-hover mb-0 text-nowrap">
                                    <thead>
                                        <tr class="custom-border-bottom">
                                            <th>Müşteri</th>
                                            <th>Tarih</th>
                                            <th>Telefon</th>
                                            <th>Hizmet Türü</th>
                                            <th>Makina Modeli</th>
                                            <th>Eylem</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($services as $service)
                                            <tr>
                                                <td>{{ $service->servicereq_taker }}</td>
                                                <td>{{ date('d.m.Y', strtotime($service->created_at)) }}</td>
                                                <td>{{ $service->servicereq_number }}</td>
                                                <td>{{ $service->servicereq_message }}</td>
                                                <td>{{ $service->servis_tip_adi }}</td>
                                                <td>
                                                    <a href="{{ route('deleterequest', $service->servicereq_id) }}"><i
                                                            class="bi bi-trash text-danger"></i></a>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="6" class="text-center text-muted py-4">
                                                    <i class="bi bi-person me-2"></i> Sistemde kayıtlı herhangi bir
                                                    veri bulunamadı.
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-4 pt-md-5 mx-0 w-100">
                    <div class="col-12 px-0">
                        <div class="custom-border rounded-4 bg-white overflow-hidden w-100">
                            <div class="custom-border-bottom p-4">
                                <h2 class="fw-bold fs-5 mb-0 text-truncate">MÜŞTERİ MESAJLARI</h2>
                            </div>

                            <div class="table-responsive w-100">
                                <table class="table table-hover mb-0 text-nowrap">
                                    <thead>
                                        <tr class="custom-border-bottom">
                                            <th>Müşteri</th>
                                            <th>Tarih</th>
                                            <th>Mesaj</th>
                                            <th>Eylem</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($messages as $message)
                                            <tr>
                                                <td>{{ $message->customer_name }}</td>
                                                <td>{{ date('d.m.Y', strtotime($message->created_at)) }}</td>
                                                <td>{{ $message->customer_message }}</td>
                                                <td>
                                                    <a href="{{ route('deletemessage', $message->customer_id) }}"><i
                                                            class="bi bi-trash text-danger"></i></a>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="6" class="text-center text-muted py-4">
                                                    <i class="bi bi-person me-2"></i> Sistemde kayıtlı herhangi bir
                                                    veri bulunamadı.
                                                </td>
                                            </tr>
                                        @endforelse
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
