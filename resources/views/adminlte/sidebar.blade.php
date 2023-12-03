<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image" style="margin-top:10px;">
            <img src="{{ asset('gejugan-icon.png') }}" class="logo-icon" alt="Avatar">
        </div>
        <div class="info">
            <?php
            date_default_timezone_set('Asia/Jakarta');
            $currentTime = date('H');

            if ($currentTime < 11) {
                $greeting = 'Selamat pagi';
            } elseif ($currentTime < 15) {
                $greeting = 'Selamat siang';
            } elseif ($currentTime < 19) {
                $greeting = 'Selamat sore';
            } else {
                $greeting = 'Selamat malam';
            }
            ?>
            <a style="color: #ffffff;" href="/dashboard"><?php echo $greeting; ?>!
                <br> {{ auth()->user()->name }}
            </a>
        </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-sidebar">
                    <i class="fas fa-search fa-fw"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="/dashboard" class="nav-link">
                    <i class="nav-icon fas fa-chart-bar"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/administrasi" class="nav-link">
                    <i class="nav-icon fas fa-file-alt"></i>    
                    <p>Administrasi</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/umkm" class="nav-link">
                    <i class="nav-icon fas fa-store"></i>
                    <p>UMKM</p>
                </a>
            </li>
            @if(auth()->user()->name === 'Admin')
            <li class="nav-item">
                <a href="/user" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                        Kelola Admin
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/validasi" class="nav-link">
                    <i class="nav-icon fas fa-exclamation-circle"></i>
                    <p>
                        Validasi
                    </p>
                </a>
            </li>
            @endif
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>