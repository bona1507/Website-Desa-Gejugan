<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UMKM Desa Gejugan</title>
    @include('layouts.favicon')
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/data-umkm.css') }}">
</head>

<body>
    @include('layouts.navbar')

    <main>
        <div class="container">
            <div class="container">
                <header>
                    <div class="mt-4">
                        <h1 style="margin: 0;">Daftar UMKM Desa Gejugan</h1>

                    </div>

                    <div class="d-flex justify-content-between text-decoration-none mt-4">
                        <a href="/" class="d-flex justify-content-start text-decoration-none">
                            <button type="submit" class="btn btn-danger submit-button" style="width: fit-content">
                                <h4>kembali ke beranda</h4>
                            </button>
                        </a>
                        <a href="registrasi-umkm" class="d-flex justify-content-center text-decoration-none">
                            <button type="submit" class="btn btn-success submit-button" style="width: fit-content">
                                <h4>+ Registrasi UMKM</h4>
                            </button>
                        </a>
                    </div>
                </header>

                <article class="py-3">
                    <div class="row gy-3">
                        @foreach ($dataUmkm as $umkm)
                        <div class="col-sm-3">
                            <div class="card card-hover">
                                <a href="detail-umkm/{{ $umkm->nama_umkm }}">
                                    <img src="storage/thumbnail/{{ $umkm->foto_thumbnail }}"
                                        class="card-img-top img-control" alt="" srcset="">
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title text-wrap">{{ $umkm->nama_umkm }}</h5>
                                    <a href="detail-umkm/{{ $umkm->nama_umkm }}" class="btn btn-primary">
                                        <h4>Lihat Detail</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </article>
            </div>
        </div>

    </main>

    @include('layouts.footer')
</body>

</html>
