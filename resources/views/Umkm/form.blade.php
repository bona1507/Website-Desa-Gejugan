<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pengajuan Administrasi</title>
    @include('layouts.favicon')
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
</head>

<body>
    @include('layouts.navbar')

    <main>
        <div class="container">
            <div class="container">
                <div class="d-flex welcome justify-content-between align-items-center">
                    <div>
                        <h1 style="margin: 0;">Selamat datang di,</h1>
                        <h3 style="text-decoration: underline; ">Sistem Administrasi Desa Gejugan</h3>
                    </div>
                    <div class="container card p-3 me-0" style="width: fit-content;">
                        <h3 class="mb-1 text-center">Sudah pernah mengajukan?</h3>
                        <a href="check-form" class="d-flex justify-content-center text-decoration-none">
                            <button type="submit" class="btn btn-success submit-button" style="width: 8rem">
                                <h3>Cek di sini</h3>
                            </button>
                        </a>
                    </div>
                </div>

                <a href="main" class="d-flex justify-content-start text-decoration-none">
                    <button type="submit" class="btn btn-danger submit-button" style="width: fit-content">
                        <h4>kembali ke beranda</h4>
                    </button>
                </a>

                <div class="card mt-1">

                    <div class="card-header text-center">
                        <h2>Formulir Pengajuan Administrasi</h2>
                    </div>
                    <article>

                        <form action="simpan-file" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <h4>NIK</h4>
                            <div class="mb-3 margin-sm">
                                <input type="number" class="form-control form-control-sm" name="nik" title=""
                                    oninvalid="this.setCustomValidity('Harap isi NIK anda')"
                                    oninput="this.setCustomValidity('')" placeholder="Masukkan Nomor Induk Kependudukan"
                                    required>
                            </div>
                            <h4>Nama</h4>
                            <div class="mb-3 margin-sm">
                                <input type="text" class="form-control form-control-sm" title="" name="nama"
                                    oninvalid="this.setCustomValidity('Harap isi nama sesuai NIK anda')"
                                    oninput="this.setCustomValidity('')" placeholder="Nama Sesuai NIK" required>
                            </div>
                            <h4>Upload File</h4>
                            <div class="input-group mb-3 margin-sm">
                                <input type="file" class="form-control" name="file" title=""
                                    oninvalid="this.setCustomValidity('Pilih file yang ingin anda kirim')"
                                    oninput="this.setCustomValidity('')" placeholder="pilih file" required>
                                <label class="input-group-text" for="form-file">
                                    <h3>Pilih File</h3>
                                </label>
                            </div>
                            <h4>Deskripsi</h4>
                            <div class="mb-3 margin-sm">
                                <textarea class="form-control myDeskripsi" name="deskripsi" rows="4" spellcheck="false" title=""
                                    oninvalid="this.setCustomValidity('Harap mengisi deskripsi')" oninput="this.setCustomValidity('')"
                                    placeholder="jelaskan tujuan pengajuan administrasi" required></textarea>
                            </div>
                            <div style="display:flex; justify-content:center; margin-top:1.5rem;">
                                <button type="submit" class="btn btn-primary submit-button" style="width: 80%">
                                    <h3>Submit</h3>
                                </button>
                            </div>
                        </form>

                    </article>

                </div>
            </div>
        </div>

    </main>


</body>

</html>
