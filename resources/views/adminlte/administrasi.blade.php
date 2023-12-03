<!DOCTYPE html>
<html lang="en">

<head>
  @include('adminlte/header')
  <title>Administrasi</title>
  <style>
    .modal-content {
      width: 100%;
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
              <h3 class="card-title" style="margin-top:10px; font-weight:bold;">Daftar Administrasi</h3>
              <div class="float-right">
                <button type="button" class="btn btn-light" onclick="filterStatus('all')">Semua</button>
                <button type="button" class="btn btn-success" onclick="filterStatus('validated')">Valid</button>
                <button type="button" class="btn btn-danger" onclick="filterStatus('non-validated')">Belum Valid</button>
              </div>
            </div>
            <div class="card-body">
              <div class="input-group mb-3 ml-auto">
                <input type="text" class="form-control" placeholder="Cari Nomor Tiket" id="searchInput" onkeyup="searchTable()">
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body" id="filtered-results">
              <table class="table">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nomor Tiket</th>
                    <th>Dokumen</th>
                    <th>Status</th>
                    <th>Kategori</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($dataFile as $key => $data)
                  <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $data->kode_tiket }}</td>
                    <td>
                      <div>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#addUserModal">Lihat
                          Dokumen</button>
                        <div class="modal fade" id="addUserModal" tabindex="-1" role="dialog"
                          aria-labelledby="addUserModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="addUserModalLabel">Daftar Dokumen</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <div class="container">
                                  <div class="row">
                                    <div class="col-md-12" style="margin-bottom: 10px;">
                                      <a href="{{ asset('public/ktpkematian/' . $data->ktp) }}" class="btn btn-sm btn-primary btn-block" download>Download KTP Jenazah</a>
                                    </div>
                                    <div class="col-md-12" style="margin-bottom: 10px;">
                                      <a href="{{ asset('public/kkkematian/' . $data->kk) }}" class="btn btn-sm btn-primary btn-block" download>Download KK Jenazah</a>
                                    </div>
                                    <div class="col-md-12" style="margin-bottom: 10px;">
                                      <a href="{{ asset('public/ktp2kematian/' . $data->ktp2) }}" class="btn btn-sm btn-primary btn-block" download>Download KTP Pelapor</a>
                                    </div>
                                    <div class="col-md-12">
                                      <a href="{{ $data->form }}" class="btn btn-sm btn-primary btn-block" download>Download Formulir Surat Kematian</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    </td>
                    <td>{{ $data->status ? 'Sudah Validasi' : 'Belum Validasi' }}</td>
                    <td>
                    @if (str_contains($data->form, 'spkematian'))
                    Surat Pengantar Kematian
                    @else
                    Administrasi
                    @endif
                    </td>
                    <td>
                      @if ($data->status == false)
                      <form method="POST" action="{{ route('file.updateStatus', ['id' => $data->id]) }}">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-sm btn-success">Validasi</button>
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