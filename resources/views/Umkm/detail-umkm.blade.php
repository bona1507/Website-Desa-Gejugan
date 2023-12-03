<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $umkm->nama_umkm }}</title>
    @include('layouts.favicon')
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/detail-umkm.css') }}">
</head>

<body>
    @include('layouts.navbar')

    <main class="container mt-3">
        <section class="d-flex my-4">
            <a href="/data-umkm" class="ms-0 text-decoration-none" style="">
                <button type="submit" class="d-flex btn btn-warning submit-button gap-1 p-3 align-items-center"
                    style="width: fit-content; height: 1.75rem;">
                    <i class="fa-solid fa-chevron-left"></i>
                    <h3>Kembali</h3>
                </button>
            </a>
        </section>
        <section>
            <div class="gap-4 flex-container flex-to-grid">
                <div class="img-container">
                    <img class="fotoUMKM" src="{{ asset('storage/thumbnail/' . $umkm->foto_thumbnail) }}"
                        alt="halo" draggable="false">
                </div>
                <div class="d-grid grid-container">
                    <h1 class="">{{ $umkm->nama_umkm }}</h1>
                    <div class="d-flex gap-2 align-items-center pt-1">
                        <h4>{{ $umkm->nama_pemilik }}</h4>
                        <div class="d-flex align-items-center gap-1 kontak px-2 py-1">
                            <i class="fa-regular fa-address-book"></i>
                            <h5>{{ $umkm->no_hp }}</h5>
                        </div>
                    </div>
                    <div class="mt-4">
                        <div class="d-flex align-items-center gap-2">
                            <i class="fa-solid fa-map-pin fa-xl" style="color: #ff0000;"></i>
                            <h5>{{ $umkm->alamat_usaha }}</h5>
                        </div>
                    </div>
                    <div class="mt-5">
                        <h5>Deskripsi</h5>
                    </div>
                    <div class="mt-2">
                        <p>{{ $umkm->deskripsi_usaha }}</p>
                    </div>
                </div>

            </div>
        </section>
    </main>

    @include('layouts.footer')
</body>
