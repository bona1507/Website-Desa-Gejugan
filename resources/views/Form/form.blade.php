<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pengajuan Administrasi</title>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
    <style>
        #kategori option[disabled] {
            color: red !important;
        }
    </style>
</head>

<body>
    @include('layouts.navbar')

    <main>
        <div class="container">
            <div class="container">
    
                <div class="d-flex welcome justify-content-between align-items-center mx-2 gap-1">
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
    
                <a href="/" class="ms-0">
                    <button type="submit" class="btn btn-danger submit-button" style="width: fit-content">
                        <h4>kembali ke beranda</h4>
                    </button>
                </a>
    
                <div class="card my-2">
                    <div class="card-header text-center">
                        <h2>Formulir Pengajuan Administrasi</h2>
                    </div>
                    <article class="d-flex">
                        <select id="kategori" name="kategori" class="form-control" onchange="getInputField()">
                            <option value="" disabled selected hidden>Pilih Kategori Keperluan</option>
                            <option value="Akta Kelahiran">Akta Kelahiran</option>
                            <option value="Akta Kematian">Akta Kematian</option>
                            <option value="Pembuatan Kartu Keluarga">Pembuatan Kartu Keluarga</option>
                            <option value="Surat Datang">Surat Datang</option>
                            <option value="Surat Pindah">Surat Pindah</option>
                            <option value="Surat Keterangan Catatan Kepolisian">Surat Keterangan Catatan Kepolisian
                            </option>
                            <option value="Surat Keterangan Usaha">Surat Keterangan Usaha</option>
                            <option value="Surat Kehilangan">Surat Kehilangan</option>
                        </select>
                        <span class="btn btn-danger submit-button" onclick="clearSelect()">Batal</span>
                    </article>
                </div>
    
                <section id="input-keperluan"></section>
            </div>
        </div>
    </main>

    @include('layouts.footer')
</body>

<script>
    function getInputField() {
        var selectBox = document.getElementById("kategori");
        var selectedValue = selectBox.options[selectBox.selectedIndex].value;

        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                document.getElementById("input-keperluan").innerHTML = xhr.responseText;
            }
        };

        xhr.open("GET", "{{ url('Form/form-input') }}?selectedValue=" + selectedValue, true);
        xhr.send();
    }

    function clearSelect() {
        document.getElementById("kategori").value = "";

        var selectBox = document.getElementById("kategori");
        selectBox.onchange();
    }
</script>

</html>
