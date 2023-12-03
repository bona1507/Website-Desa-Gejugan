<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi UMKM</title>
    @include('layouts.favicon')
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/registrasi-umkm.css') }}">
</head>

<body>
    @include('layouts.navbar')

    <main class="mb-3">
        <div class="container">
            <div class="container">
                <div class="d-flex welcome justify-content-between align-items-center">
                    <div>
                        <h1 style="margin: 0;">Selamat datang di,</h1>
                        <h3 style="text-decoration: underline; ">Menu Registrasi UMKM Desa Gejugan</h3>
                    </div>
                    <div class="container card p-3 me-0" style="width: fit-content;">
                        <h3 class="mb-1 text-center">Cek status UMKM</h3>
                        <a href="check-form" class="d-flex justify-content-center text-decoration-none">
                            <button type="submit" class="btn btn-success submit-button" style="width: 8rem">
                                <h3>Cek di sini</h3>
                            </button>
                        </a>
                    </div>
                </div>

                <div class="d-flex">
                    <a href="/data-umkm" class="ms-0 text-decoration-none" style="">
                        <button type="submit" class="d-flex btn btn-warning submit-button gap-1 align-items-center"
                            style="width: fit-content; height: 1.75rem;">
                            <i class="fa-solid fa-chevron-left"></i>
                            <h4>Data UMKM</h4>
                        </button>
                    </a>
                </div>

                <div class="card mt-1">
                    <div class="card-header text-center">
                        <h2>Registrasi Data UMKM</h2>
                    </div>
                    <article>
                        <form action="/umkm/store" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="d-flex flex-column align-items-center">
                                <div class="col-sm-3x">
                                    <div class="card card-hover">
                                        <img id="fotoThumbnail">
                                        <div class="card-body">
                                            <h5 class="card-title text-wrap">(Nama UMKM)</h5>
                                            <div class="btn btn-primary">
                                                <h4>Lihat Detail</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <span style="color: grey">*tampilan di daftar UMKM</span>

                                <input type="file" id="fileThumbnail" name="fileThumbnail"
                                    accept=".jpg, .jpeg, .png, image/jpeg, image/png" required>
                                <label for="fileThumbnail"
                                    class="btn btn-outline-primary my-3 d-flex justify-content-center gap-2 "
                                    style="width: fit-content"><i class="fa-solid fa-upload"></i>
                                    <h3>Upload Foto Thumbnail</h3>
                                </label>
                            </div>
                            <h4>Nama UMKM</h4>
                            <div class="mb-3 margin-sm">
                                <input type="text" class="form-control form-control-sm" name="namaUMKM"
                                    title="" required>
                            </div>
                            <h4>Nama Pemilik</h4>
                            <div class="mb-3 margin-sm">
                                <input type="text" class="form-control form-control-sm" name="namaPemilik"
                                    title="" required>
                            </div>
                            <h4>Alamat Usaha</h4>
                            <div class="input-group mb-3 margin-sm">
                                <input type="text" class="form-control" name="alamatUsaha" title="" required>
                            </div>
                            <h4>Nomor HP</h4>
                            <div class="input-group mb-3 margin-sm">
                                <input type="number" inputmode="numeric" class="form-control" name="noHP"
                                    title="" requiredx>
                            </div>

                            <h4>Deskripsi Usaha (maks. 255 karakter)</h4>
                            <div class="mb-3 margin-sm">
                                <textarea class="form-control" name="deskripsiUsaha" id="deskripsiUsaha" rows="4" spellcheck="false"
                                    title="" style="resize: none" oninput="limitTextarea(this, 255)" required></textarea>
                            </div>
                            <div style="display:flex; justify-content:center; margin-top:1.5rem;">
                                <button type="submit" class="btn btn-primary submit-button" id="submitButton"
                                    style="width: 80%" onclick="validateForm(event)">
                                    <h3>Submit</h3>
                                </button>
                            </div>
                        </form>
                    </article>

                </div>
            </div>
        </div>

    </main>

    @include('layouts.footer')

    <script src="{{ asset('js/registrasi-umkm.js') }}"></script>
</body>

</html>
