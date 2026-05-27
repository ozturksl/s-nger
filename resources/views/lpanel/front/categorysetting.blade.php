@extends('lpanel.layouts.layout')

@section('title')
    Kategori Yönetimi
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
                <div
                    class="d-flex flex-column flex-sm-row align-items-start align-items-sm-center justify-content-between gap-3 mb-4">
                    <div class="min-w-0">
                        <h1 class="fs-2 fw-bold text-wrap mb-1">Kategori Yönetimi</h1>
                        <p class="text-muted mb-0 text-wrap">Mevcut kategorileri görüntüleyin.</p>
                    </div>
                    <div class="w-sm-auto">
                        <a href="{{ route('newcategory') }}"
                            class="px-4 py-2 text-white btn btn-danger rounded-2 text-decoration-none fw-bold d-inline-flex align-items-center justify-content-center text-nowrap">
                            YENI KATEGORİ EKLE
                        </a>
                    </div>
                </div>

                <div class="row mx-0 w-100">
                    <div class="col-12 px-0">
                        <div class="custom-border rounded-4 bg-white overflow-hidden w-100">
                            <div class="table-responsive w-100">
                                <table class="table table-hover mb-0 text-nowrap">
                                    <thead>
                                        <tr class="custom-border-bottom">
                                            <th>Kategori Adı</th>
                                            <th>Eylem</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($categories as $category)
                                            <tr>
                                                <td>{{ $category->category_name }}</td>
                                                <td>
                                                    <a href="{{ route('updatecategory', $category->category_id) }}"
                                                        class="me-2" title="Düzenle"><i
                                                            class="bi bi-pencil text-success"></i></a>
                                                    <a href="{{ route('deletecategory', $category->category_id) }}">
                                                        <i class="bi bi-trash text-danger"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5" class="text-center text-muted py-4">
                                                    <i class="bi bi-grid me-2"></i> Sistemde kayıtlı herhangi bir
                                                    kategori bulunamadı.
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
