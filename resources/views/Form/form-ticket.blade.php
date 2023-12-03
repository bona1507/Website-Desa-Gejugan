<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pengajuan Administrasi</title>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/form-ticket.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
</head>

<body>
    @include('layouts.navbar')

    <main class="d-flex align-items-center justify-content-center" style="height: calc(100vh - 8rem)">
        <div class="container" style="width: fit-content">
            <div class="card">
                <div class="card-body text-center">
                    <h3 class="text-muted">Berikut nomor pengajuan anda</h3>
                    <h4 class="text-muted">mohon disimpan untuk melihat status pengajuan</h4>

                    <h1 class="text-center my-3" style="font-size: 4rem">
                        @if (session('kode_tiket'))
                            {{ session('kode_tiket') }}
                        @endif
                    </h1>

                    <h4 class="text-primary text-start">Butuh respon cepat?</h4>
                    <a href="https://wa.me/6282213197509" type="button" class="wa-button d-flex btn btn-success text-start gap-2 mt-1 px-3 py-2">
                        <i class="fa-brands fa-whatsapp"></i>
                        <h4>Hubungi di whatsapp</h4>
                    </a>
                    <a href="/" class="d-flex justify-content-start text-decoration-none mt-3">
                        <button type="submit" class="btn btn-danger submit-button" style="width: 100%;">
                            <h4>kembali ke beranda</h4>
                        </button>
                    </a>
                </div>

            </div>
        </div>
    </main>

    @include('layouts.footer')
</body>

</html>
