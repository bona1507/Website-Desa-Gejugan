<!DOCTYPE html>
<html lang="en">
<head>
    @include('adminlte/header')
    <title>UMKM</title>
    <link rel="stylesheet" href="{{ asset ('css\data-umkm.css') }}">
    
    <!-- Add the CSS styling for full preview container here -->
    <style>
        .thumbnail-img {
            max-width: 100px; /* Set your desired width for the thumbnail */
            max-height: 100px; /* Set your desired height for the thumbnail */
        }
    </style>
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
                            <h3 class="card-title">UMKM List</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Usaha</th>
                                        <th>Pemilik</th>
                                        <th>Alamat</th>
                                        <th>Kontak</th>
                                        <th>Deskripsi</th>
                                        <th>Foto Usaha</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dataUmkm as $umkm)
                                    <tr class="list-data-umkm" >
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $umkm->nama_umkm }}</td>
                                        <td>{{ $umkm->nama_pemilik }}</td>
                                        <td>{{ $umkm->alamat_usaha }}</td>
                                        <td>{{ $umkm->no_hp }}</td>
                                        <td>{{ $umkm->deskripsi_usaha }}</td>
                                        <td>
                                            <img class="thumbnail-img" src="storage/thumbnail/{{ $umkm->foto_thumbnail }}" alt="{{ $umkm->nama_umkm }}">
                                        </td>
                                        <td>
                                            @if ($umkm->status == 0)
                                            <form method="POST" action="/umkm-accept/{{ $umkm->id }}">
                                                @method('PUT')
                                                @csrf
                                                <button type="submit" class="btn btn-success btn-sm">Setujui</button>
                                            </form>
                                            @else
                                                Disetujui
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
