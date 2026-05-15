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

                <div class="d-flex">
                    <div>
                        <h1 class="fs-2 fw-bold">Ürün Yönetimi</h1>
                        <p>Ürün yönetiminin sağlandığı sayfa</p>
                    </div>
                    <div class="ms-auto mt-4">
                        <a class="px-4 py-2 text-white bg-danger rounded-2 text-decoration-none fw-bold" href="#">YENİ
                            ÜRÜN
                            EKLE</a>
                    </div>

                </div>
                <div class="row pt-5">
                    <div class="col-sm-12">
                        <div class="custom-border rounded-4 bg-white overflow-hidden">
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr class="custom-border-bottom">
                                            <th>Ürün Adı</th>
                                            <th>Kategori</th>
                                            <th>Stok</th>
                                            <th>Fiyat</th>
                                            <th>Durum</th>
                                            <th>Eylem</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>PFAFF 6693</td>
                                            <td>Ev Tipi Dikiş Makinesi</td>
                                            <td>12</td>
                                            <td>250 ₺</td>
                                            <td><span class="badge bg-warning">Aktif Değil</span></td>
                                            <td>
                                                <a href="#" class="me-2"><i
                                                        class="bi bi-pencil text-success"></i></a>
                                                <a href="#"><i class="bi bi-trash text-danger"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>PFAFF 6693</td>
                                            <td>Ev Tipi Dikiş Makinesi</td>
                                            <td>12</td>
                                            <td>250 ₺</td>
                                            <td><span class="badge bg-warning">Aktif Değil</span></td>
                                            <td>
                                                <a href="#" class="me-2"><i
                                                        class="bi bi-pencil text-success"></i></a>
                                                <a href="#"><i class="bi bi-trash text-danger"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>PFAFF 6693</td>
                                            <td>Ev Tipi Dikiş Makinesi</td>
                                            <td>12</td>
                                            <td>250 ₺</td>
                                            <td><span class="badge bg-warning">Aktif Değil</span></td>
                                            <td>
                                                <a href="#" class="me-2"><i
                                                        class="bi bi-pencil text-success"></i></a>
                                                <a href="#"><i class="bi bi-trash text-danger"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>PFAFF 6693</td>
                                            <td>Ev Tipi Dikiş Makinesi</td>
                                            <td>12</td>
                                            <td>250 ₺</td>
                                            <td><span class="badge bg-warning">Aktif Değil</span></td>
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
