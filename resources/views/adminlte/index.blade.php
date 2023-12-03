<!DOCTYPE html>
<html lang="en">
<head>
    @include('adminlte/header')
    <title>Dashboard</title>
</head>

<body style="background-color:#f4f6f9;" class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    @include('adminlte/bootloader')
    
    <!-- Dashboard Sidebar Layout -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      @include('adminlte/sidebar')
    </aside>
    
    <!-- Main Sidebar Container -->
    <div class="content-wrapper">
      <section class="mt-2 content">
        <div class="row">
          <div class="col-md-6 col-lg-6">
            <div class="row">
              <div class="col-12">
                <!-- small box -->
                <div class="small-box bg-danger">
                  <div class="inner">
                    <h3>{{ $activeCount }}</h3>
                    <p>Administrasi Belum Diproses</p>
                  </div>
                  <div class="icon">
                    <i class="fas fa-times"></i>
                  </div>
                  <a href="/administrasi" class="small-box-footer">Info Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <div class="col-12">
                <!-- small box -->
                <div class="small-box bg-warning">
                  <div class="inner">
                    <h3>{{ $adminCount }}</h3>
                    <p>Jumlah Admin</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-person-add"></i>
                  </div>
                  @if(auth()->user()->name === 'Admin')
                  <a href="/user" class="small-box-footer">Info Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                  @else
                  <a href="#" class="small-box-footer">Info Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                  @endif
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-6">
            <div class="row">
              <div class="col-12">
                <!-- small box -->
                <div class="small-box bg-success">
                  <div class="inner">
                    <h3>{{ $completedCount }}</h3>
                    <p>Administrasi Selesai</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-checkmark"></i>
                  </div>
                  <a href="/administrasi" class="small-box-footer">Info Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <div class="col-12">
                <!-- small box -->
                <div class="small-box bg-info">
                  <div class="inner">
                    <h3>{{ $umkmCount }}</h3>
                    <p>Daftar UMKM</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-ios-cart"></i>
                  </div>
                  <a href="/umkm" class="small-box-footer">Info Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Log Aktivitas</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Waktu</th>
                      <th>Aktivitas</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if($adminAdded)
                    <tr>
                      <td>{{ $adminAdded->created_at }}</td>
                      <td>Menambah admin baru</td>
                    </tr>
                    @endif
                    @if($adminRemoved)
                    <tr>
                      <td>{{ $adminRemoved->created_at }}</td>
                      <td>Menghapus akun admin</td>
                    </tr>
                    @endif
                    @if($fileAdded)
                    <tr>
                      <td>{{ $fileAdded->created_at }}</td>
                      <td>Pengajuan administrasi baru</td>
                    </tr>
                    @endif
                    @if($fileStatusChanged)
                    <tr>
                      <td>{{ $fileStatusChanged->updated_at }}</td>
                      <td>Administrasi selesai diproses</td>
                    </tr>
                    @endif
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>  
      </section>
    </div>
  </div>
  @include('adminlte/script')
</body>
</html>