<!DOCTYPE html>
<html lang="en">

<head>
    @include('adminlte/header')
    <title>Validasi</title>
</head>

<body style="background-color:#f4f6f9;" class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Dashboard Sidebar Layout -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            @include('adminlte/sidebar')
        </aside>

        <!-- Main Sidebar Container -->
        <div class="content-wrapper">
            <section class="content">
                <div class="container-fluid">
                    <div style="margin-top:20px" class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title" style="margin-top:10px; font-weight:bold;">Pengajuan Validasi Kepala Desa</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body" id="filtered-results">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Formulir</th>
                                        <th>Kategori</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($administrasi as $key => $data)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <div class="col-md-12">
                                                <a href="{{ asset($data->form) }}" class="btn btn-sm btn-primary btn-block" download>Download Formulir Surat Kematian</a>
                                            </div>
                                        </td>
                                        <td>
                                        @if (str_contains($data->form, 'spkematian'))
                                        Surat Pengantar Kematian
                                        @else
                                        Administrasi
                                        @endif
                                        </td>
                                        <td>
                                        @if ($data->status == 1)
                                            <form method="POST" action="{{ route('file.tombolvalid', ['id' => $data->id]) }}">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" class="btn btn-sm btn-success">Konfirmasi</button>
                                            </form>
                                            @else
                                            Administrasi Selesai
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </section>
        </div>
    </div>
    @include('adminlte/script')
</body>
</html>