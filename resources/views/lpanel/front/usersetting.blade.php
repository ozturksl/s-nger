@extends('lpanel.layouts.layout')

@section('title')
    Kullanıcı Yönetimi
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
                <div
                    class="d-flex flex-column flex-sm-row align-items-start align-items-sm-center justify-content-between gap-3 mb-4">
                    <div class="min-w-0">
                        <h1 class="fs-2 fw-bold text-wrap mb-1">Kullanıcı Yönetimi</h1>
                        <p class="text-muted mb-0 text-wrap">Kullanıcı yönetiminin sağlandığı sayfa</p>
                    </div>
                    <div class="w-100 w-sm-auto">
                        <a href="{{ route('newuser') }}"
                            class="px-4 py-2 text-white btn btn-danger rounded-2 text-decoration-none fw-bold d-inline-flex align-items-center justify-content-center text-nowrap">
                            YENI KULLANICI EKLE
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
                                            <th>Kullanıcı Adı</th>
                                            <th>Ad-Soyad</th>
                                            <th>Kullanıcı Türü</th>
                                            <th>Durum</th>
                                            <th>Eylem</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{ $user->user_nickname }}</td>
                                                <td>{{ $user->user_name }}</td>
                                                <td>{{ $user->tur_adi }}</td>
                                                <td>
                                                    @if ($user->durum_adi == 'Aktif' || $user->durum_adi == 'Etkin')
                                                        <span class="badge bg-success">{{ $user->durum_adi }}</span>
                                                    @else
                                                        <span class="badge bg-danger">{{ $user->durum_adi }}</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route('updateuser', $user->user_id) }}" class="me-2"
                                                        title="Düzenle"><i class="bi bi-pencil text-success"></i></a>
                                                    <a href="{{ route('deleteuser', $user->user_id) }}"
                                                        onclick="return confirm('Bu kullanıcıyı silmek istediğinize emin misiniz?')"
                                                        title="Sil"><i class="bi bi-trash text-danger"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
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
