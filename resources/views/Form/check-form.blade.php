<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pengajuan Administrasi</title>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/check-form.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
</head>

<body>
    @include('layouts.navbar')

    <main class="d-flex align-items-center justify-content-center" style="height: calc(100vh - 8rem)">
        <div class="container" style="width: fit-content">
            <div class="card">
                <div class="card-header">
                    <a href="/form" class="text-decoration-none mb-5">
                        <button type="submit" class="btn btn-danger submit-button" style="width: fit-content">
                            <h4>kembali</h4>
                        </button>
                    </a>
                </div>
                <div>

                </div>
                <div class="card-body">
                    <h3>Masukkan nomor tiket pengajuan</h3>
                    <form action="/cek-tiket" method="POST">
                        {{ csrf_field() }}
                        <div class="mt-2">
                            <input type="number" class="form-control form-control-sm" name="kode_tiket" title=""
                                oninvalid="this.setCustomValidity('kolom wajib disi')"
                                oninput="this.setCustomValidity('')" placeholder="isi disini" required>
                        </div>
                        @if (Session::has('ticket_not_found'))
                            <p class="text-danger m-1">{{ Session::get('ticket_not_found') }}</p>
                        @endif
                        <div class="d-flex justify-content-end mt-2">
                            <button type="submit" class="btn btn-primary submit-button" style="width: fit-content">
                                <h3>Submit</h3>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    @include('layouts.footer')
</body>

</html>
