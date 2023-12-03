<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.favicon')
    <style>
        @media (max-width: 767.98px) {
            .text-end {
                text-align: start !important;
            }
        }
    </style>
</head>

<body>

    <div class="card mb-4">
        <div class="card-header">
            <h2 class="text-center">Surat Keterangan Kematian</h2>
        </div>
        <div class="card-body">
            <form action="/suratkematian" method="POST">
                @csrf
                @if (isset($_POST['kategori']))
                    <?php
                    $kategori = request('kategori');
                    echo '<input type="hidden" name="keperluan" value="' . $kategori . '">';
                    ?>
                @endif

                <section>
                    <h2 class="text-center my-3 text-uppercase">Identitas Jenazah</h2>

                    {{--  Nama Kepala Keluarga  --}}
                    <div class="row mb-2 align-items-center">
                        <div class="col-md-2 text-end">
                            <label for="namaKepalaKeluarga" class="col-form-label py-0">Nama Kepala Keluarga</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="namaKepalaKeluarga" name="namaKepalaKeluarga"
                                title="" required>
                        </div>
                    </div>

                    {{-- Nomor Kartu Keluarga --}}
                    <div class="row mb-2 align-items-center">
                        <div class="col-md-2 text-end">
                            <label for="nomorKartuKeluarga" class="col-form-label py-0">Nomor Kartu Keluarga</label>
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" id="nomorKartuKeluarga" name="nomorKartuKeluarga"
                                title="" required>
                        </div>
                    </div>

                    <div class="row mb-2 align-items-center">
                        <div class="col-md-2 text-end">
                            <label for="nomorIndukKependudukanJenazah" class="col-form-label py-0">NIK</label>
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" id="nomorIndukKependudukanJenazah"
                                name="nomorIndukKependudukanJenazah" title="" required>
                        </div>
                    </div>

                    {{-- Jenazah Nama Lengkap  --}}
                    <div class="row mb-2 align-items-center">
                        <div class="col-md-2 text-end">
                            <label for="namaLengkapJenazah" class="col-form-label py-0">Nama Lengkap</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="namaLengkapJenazah" name="namaLengkapJenazah"
                                title="" required>
                        </div>
                    </div>

                    {{-- Jenazah Jenis Kelamin --}}
                    <div class="row mb-2 align-items-center">
                        <div class="col-md-2 text-end">
                            <label for="jenisKelaminJenazah" class="col-form-label py-0">Jenis Kelamin</label>
                        </div>
                        <div class="col">
                            <select class="form-control" id="jenisKelaminJenazah" name="jenisKelaminJenazah"
                                title="" required>
                                <option value="" selected hidden>( Pilih Jenis Kelamin )</option>
                                <option value="1">Laki-laki</option>
                                <option value="2">Perempuan</option>
                            </select>
                        </div>
                    </div>

                    {{-- Tanggal Lahir Jenazah --}}
                    Tanggal Lahir :
                    <div class="row mb-3 align-items-center justify-content-center">
                        <div class="col pe-0 text-end">
                            <label for="tanggalLahirJenazah" class="col-form-label py-0">Tanggal</label>
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" id="tanggalLahirJenazah"
                                name="tanggalLahirJenazah" style="width: 2.875rem;"
                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                maxlength="2" title="" required>
                        </div>
                        <div class="col pe-0 text-end">
                            <label for="bulanLahirJenazah" class="col-form-label py-0">Bulan</label>
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" id="bulanLahirJenazah" name="bulanLahirJenazah"
                                style="width: 2.875rem;"
                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                maxlength="2" title="" required>
                        </div>
                        <div class="col pe-0 text-end">
                            <label for="tahunLahirJenazah" class="col-form-label py-0">Tahun</label>
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" id="tahunLahirJenazah" name="tahunLahirJenazah"
                                style="width: 4.25rem;"
                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                maxlength="4" title="" required>
                        </div>
                        <div class="col pe-0 text-end">
                            <label for="umurJenazah" class="col-form-label py-0">Umur</label>
                        </div>
                        <div class="d-flex col">
                            <input type="number" class="form-control" id="umurJenazah" name="umurJenazah"
                                style="width: 3.5rem;"
                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                maxlength="3" title="" required>
                        </div>
                    </div>

                    {{--  Tempat Kelahiran  --}}
                    <div class="row mb-2 align-items-center">
                        <div class="col-md-2 text-end">
                            <label for="tempatKelahiranJenazah" class="col-form-label py-0">Tempat Kelahiran</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="tempatKelahiranJenazah"
                                name="tempatKelahiranJenazah" title="" required>
                        </div>
                    </div>

                    {{--  Agama  --}}
                    <div class="row mb-2 align-items-center">
                        <div class="col-md-2 text-end">
                            <label for="agamaJenazah" class="col-form-label py-0">Agama</label>
                        </div>
                        <div class="col">
                            <select class="form-control" id="agamaJenazah" name="agamaJenazah" title=""
                                required>
                                <option value="" selected hidden>( Pilih Agama )</option>
                                <option value="1">Islam</option>
                                <option value="2">Kristen</option>
                                <option value="3">Katolik</option>
                                <option value="4">Hindu</option>
                                <option value="5">Budha</option>
                                <option value="6">Lainnya</option>
                            </select>
                        </div>
                    </div>

                    {{--  Pekerjaan  --}}
                    <div class="row mb-2 align-items-center">
                        <div class="col-md-2 text-end">
                            <label for="pekerjaanJenazah" class="col-form-label py-0">Pekerjaan</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="pekerjaanJenazah" name="pekerjaanJenazah"
                                title="" required>
                        </div>
                    </div>

                    {{--  Alamat  --}}
                    <div class="row mb-2 align-items-center">
                        <div class="col-md-2 text-end">
                            <label for="alamatJenazah" class="col-form-label py-0">Alamat</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="alamatJenazah" name="alamatJenazah"
                                title="" required>
                        </div>
                    </div>

                    {{--  Alamat-Desa  --}}
                    <div class="row mb-2 align-items-center ps-4">
                        <div class="col-md-2 text-end">
                            <label for="alamatJenazah" class="col-form-label py-0">Desa/Kelurahan</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="alamatJenazah" name="desaJenazah"
                                title="" required>
                        </div>
                    </div>

                    {{--  Alamat-Kecamatan  --}}
                    <div class="row mb-2 align-items-center ps-4">
                        <div class="col-md-2 text-end">
                            <label for="alamatJenazah" class="col-form-label py-0">Kecamatan</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="alamatJenazah" name="kecJenazah"
                                title="" required>
                        </div>
                    </div>

                    {{--  Alamat-Kab/Kota  --}}
                    <div class="row mb-2 align-items-center ps-4">
                        <div class="col-md-2 text-end">
                            <label for="alamatJenazah" class="col-form-label py-0">Kab/Kota</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="alamatJenazah" name="kabJenazah"
                                title="" required>
                        </div>
                    </div>

                    {{--  Alamat-Provinsi  --}}
                    <div class="row mb-2 align-items-center ps-4">
                        <div class="col-md-2 text-end">
                            <label for="alamatJenazah" class="col-form-label py-0">Provinsi</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="alamatJenazah" name="provJenazah"
                                title="" required>
                        </div>
                    </div>

                    {{--  Anak ke-  --}}
                    <div class="row mb-2 align-items-center">
                        <div class="col-md-2 text-end">
                            <label for="anakKeJenazah" class="col-form-label py-0">Anak Ke-</label>
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" id="anakKeJenazah" name="anakKeJenazah"
                                style="width: 2.875rem;"
                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                maxlength="2" title="" required>
                        </div>
                    </div>

                    {{-- Tanggal Kematian --}}
                    Tanggal Kematian :
                    <div class="row mb-3 align-items-center justify-content-center">
                        <div class="col">
                            <div class="row align-items-center">
                                <div class="col text-end">
                                    <label for="tanggalLahirJenazah" class="col-form-label py-0"
                                        style="width: fit-content">Tanggal</label>
                                </div>
                                <div class="col">
                                    <input type="number" class="form-control" id="tanggalLahirJenazah"
                                        name="tanggalMatiJenazah" style="width: 2.875rem;"
                                        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                        maxlength="2" title="" required>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row align-items-center">
                                <div class="col text-end">
                                    <label for="bulanLahirJenazah" class="col-form-label py-0">Bulan</label>
                                </div>
                                <div class="col">
                                    <input type="number" class="form-control" id="bulanLahirJenazah"
                                        name="bulanMatiJenazah" style="width: 2.875rem;"
                                        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                        maxlength="2" title="" required>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row align-items-center">
                                <div class="col text-end">
                                    <label for="tahunLahirJenazah" class="col-form-label py-0">Tahun</label>
                                </div>
                                <div class="col">
                                    <input type="number" class="form-control" id="tahunLahirJenazah"
                                        name="tahunMatiJenazah" style="width: 4.25rem;"
                                        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                        maxlength="4" title="" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{--  Sebab Kematian  --}}
                    <div class="row mb-2 align-items-center">
                        <div class="col-md-2 text-end">
                            <label for="sebabKematianJenazah" class="col-form-label py-0">Sebab Kematian</label>
                        </div>
                        <div class="col">
                            <select class="form-control" id="sebabKematianJenazah" name="sebabKematianJenazah"
                                title="" required>
                                <option value="" selected hidden>( Pilih Sebab )</option>
                                <option value="1">Sakit Biasa/Tua</option>
                                <option value="2">Wabah Penyakit</option>
                                <option value="2">Kecelakaan</option>
                                <option value="3">Kriminalitas</option>
                                <option value="4">Bunuh Diri</option>
                                <option value="5">Lainnya</option>
                            </select>
                        </div>
                    </div>

                    {{--  Tempat Kematian  --}}
                    <div class="row mb-2 align-items-center">
                        <div class="col-md-2 text-end">
                            <label for="tempatKematianJenazah" class="col-form-label py-0">Tempat Kematian</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="tempatKematianJenazah"
                                name="tempatKematianJenazah" title="" required>
                        </div>
                    </div>

                    {{--  Yang Menerangkan  --}}
                    <div class="row mb-5 align-items-center">
                        <div class="col-md-2 text-end">
                            <label for="yangMenerangkanKematianJenazah" class="col-form-label py-0">Yang
                                Menerangkan</label>
                        </div>
                        <div class="col">
                            <select class="form-control" id="yangMenerangkanKematianJenazah"
                                name="yangMenerangkanKematianJenazah" title="" required>
                                <option value="" selected hidden>( Pilih Pihak )</option>
                                <option value="1">Dokter</option>
                                <option value="2">Tenaga Kesehatan</option>
                                <option value="3">Kepolisian</option>
                                <option value="4">Lainnya</option>
                            </select>
                        </div>
                    </div>
                </section>

                <section>
                    <hr>
    
                    <h2 class="text-center my-4 text-uppercase">Identitas Ayah</h2>
    
                    {{-- Ayah NIK  --}}
                    <div class="row mb-2 align-items-center">
                        <div class="col-md-2 text-end">
                            <label for="nomorIndukKependudukanAyah" class="col-form-label py-0">NIK</label>
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" id="nomorIndukKependudukanAyah"
                                name="nomorIndukKependudukanAyah" title="">
                        </div>
                    </div>
    
                    {{-- Ayah Nama Lengkap  --}}
                    <div class="row mb-2 align-items-center">
                        <div class="col-md-2 text-end">
                            <label for="namaLengkapAyah" class="col-form-label py-0">Nama Lengkap</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="namaLengkapAyah" name="namaLengkapAyah"
                                title="">
                        </div>
                    </div>
    
                    {{-- Tanggal Lahir Ayah --}}
                    Tanggal Lahir :
                    <div class="row mb-3 align-items-center justify-content-center">
                        <div class="col pe-0 text-end">
                            <label for="tanggalLahirAyah" class="col-form-label py-0">Tanggal</label>
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" id="tanggalLahirAyah" name="tanggalLahirAyah"
                                style="width: 2.875rem;"
                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                maxlength="2" title="">
                        </div>
                        <div class="col pe-0 text-end">
                            <label for="bulanLahirAyah" class="col-form-label py-0">Bulan</label>
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" id="bulanLahirAyah" name="bulanLahirAyah"
                                style="width: 2.875rem;"
                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                maxlength="2" title="">
                        </div>
                        <div class="col pe-0 text-end">
                            <label for="tahunLahirAyah" class="col-form-label py-0">Tahun</label>
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" id="tahunLahirAyah" name="tahunLahirAyah"
                                style="width: 4.25rem;"
                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                maxlength="4" title="">
                        </div>
                        <div class="col pe-0 text-end">
                            <label for="umurAyah" class="col-form-label py-0">Umur</label>
                        </div>
                        <div class="d-flex col">
                            <input type="number" class="form-control" id="umurAyah" name="umurAyah"
                                style="width: 3.5rem;"
                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                maxlength="3" title="">
                        </div>
                    </div>
    
                    {{--  Pekerjaan Ayah --}}
                    <div class="row mb-2 align-items-center">
                        <div class="col-md-2 text-end">
                            <label for="pekerjaanAyah" class="col-form-label py-0">Pekerjaan</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="pekerjaanAyah" name="pekerjaanAyah"
                                title="">
                        </div>
                    </div>
    
                    {{--  Alamat  --}}
                    <div class="row mb-2 align-items-center">
                        <div class="col-md-2 text-end">
                            <label for="alamatAyah" class="col-form-label py-0">Alamat</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="alamatAyah" name="alamatAyah"
                                title="">
                        </div>
                    </div>
    
                    {{--  Alamat-Desa  --}}
                    <div class="row mb-2 align-items-center ps-4">
                        <div class="col-md-2 text-end">
                            <label for="alamatAyah" class="col-form-label py-0">Desa/Kelurahan</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="alamatAyah" name="desaAyah"
                                title="">
                        </div>
                    </div>
    
                    {{--  Alamat-Kecamatan  --}}
                    <div class="row mb-2 align-items-center ps-4">
                        <div class="col-md-2 text-end">
                            <label for="alamatAyah" class="col-form-label py-0">Kecamatan</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="alamatAyah" name="kecAyah"
                                title="">
                        </div>
                    </div>
    
                    {{--  Alamat-Kab/Kota  --}}
                    <div class="row mb-2 align-items-center ps-4">
                        <div class="col-md-2 text-end">
                            <label for="alamatAyah" class="col-form-label py-0">Kab/Kota</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="alamatAyah" name="kabAyah"
                                title="">
                        </div>
                    </div>
    
                    {{--  Alamat-Provinsi  --}}
                    <div class="row mb-5 align-items-center ps-4">
                        <div class="col-md-2 text-end">
                            <label for="alamatAyah" class="col-form-label py-0">Provinsi</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="alamatAyah" name="provAyah"
                                title="">
                        </div>
                    </div>
                </section>

                <section>
                    <hr>
    
                    <h2 class="text-center my-4 text-uppercase">Identitas Ibu</h2>
    
                    {{-- Ibu NIK  --}}
                    <div class="row mb-2 align-items-center">
                        <div class="col-md-2 text-end">
                            <label for="nomorIndukKependudukanIbu" class="col-form-label py-0">NIK</label>
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" id="nomorIndukKependudukanIbu"
                                name="nomorIndukKependudukanIbu" title="">
                        </div>
                    </div>
    
                    {{-- Ibu Nama Lengkap  --}}
                    <div class="row mb-2 align-items-center">
                        <div class="col-md-2 text-end">
                            <label for="namaLengkapIbu" class="col-form-label py-0">Nama Lengkap</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="namaLengkapIbu" name="namaLengkapIbu"
                                title="">
                        </div>
                    </div>
    
                    {{-- Tanggal Lahir Ibu --}}
                    Tanggal Lahir :
                    <div class="row mb-3 align-items-center justify-content-center">
                        <div class="col pe-0 text-end">
                            <label for="tanggalLahirIbu" class="col-form-label py-0">Tanggal</label>
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" id="tanggalLahirIbu" name="tanggalLahirIbu"
                                style="width: 2.875rem;"
                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                maxlength="2" title="">
                        </div>
                        <div class="col pe-0 text-end">
                            <label for="bulanLahirIbu" class="col-form-label py-0">Bulan</label>
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" id="bulanLahirIbu" name="bulanLahirIbu"
                                style="width: 2.875rem;"
                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                maxlength="2" title="">
                        </div>
                        <div class="col pe-0 text-end">
                            <label for="tahunLahirIbu" class="col-form-label py-0">Tahun</label>
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" id="tahunLahirIbu" name="tahunLahirIbu"
                                style="width: 4.25rem;"
                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                maxlength="4" title="">
                        </div>
                        <div class="col pe-0 text-end">
                            <label for="umurIbu" class="col-form-label py-0">Umur</label>
                        </div>
                        <div class="d-flex col">
                            <input type="number" class="form-control" id="umurIbu" name="umurIbu"
                                style="width: 3.5rem;"
                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                maxlength="3" title="">
                        </div>
                    </div>
    
                    {{--  Pekerjaan Ibu --}}
                    <div class="row mb-2 align-items-center">
                        <div class="col-md-2 text-end">
                            <label for="pekerjaanIbu" class="col-form-label py-0">Pekerjaan</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="pekerjaanIbu" name="pekerjaanIbu"
                                title="">
                        </div>
                    </div>
    
                    {{--  Alamat  --}}
                    <div class="row mb-2 align-items-center">
                        <div class="col-md-2 text-end">
                            <label for="alamatIbu" class="col-form-label py-0">Alamat</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="alamatIbu" name="alamatIbu" title="">
                        </div>
                    </div>
    
                    {{--  Alamat-Desa  --}}
                    <div class="row mb-2 align-items-center ps-4">
                        <div class="col-md-2 text-end">
                            <label for="alamatIbu" class="col-form-label py-0">Desa/Kelurahan</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="alamatIbu" name="desaIbu" title="">
                        </div>
                    </div>
    
                    {{--  Alamat-Kecamatan  --}}
                    <div class="row mb-2 align-items-center ps-4">
                        <div class="col-md-2 text-end">
                            <label for="alamatIbu" class="col-form-label py-0">Kecamatan</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="alamatIbu" name="kecIbu" title="">
                        </div>
                    </div>
    
                    {{--  Alamat-Kab/Kota  --}}
                    <div class="row mb-2 align-items-center ps-4">
                        <div class="col-md-2 text-end">
                            <label for="alamatIbu" class="col-form-label py-0">Kab/Kota</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="alamatIbu" name="kabIbu" title="">
                        </div>
                    </div>
    
                    {{--  Alamat-Provinsi  --}}
                    <div class="row mb-5 align-items-center ps-4">
                        <div class="col-md-2 text-end">
                            <label for="alamatIbu" class="col-form-label py-0">Provinsi</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="alamatIbu" name="kotaIbu" title="">
                        </div>
                    </div>
                </section>

                <section>
                    <hr>
    
                    <h2 class="text-center my-4 text-uppercase">Identitas Pelapor</h2>
    
                    {{-- Pelapor NIK  --}}
                    <div class="row mb-2 align-items-center">
                        <div class="col-md-2 text-end">
                            <label for="nomorIndukKependudukanPelapor" class="col-form-label py-0">NIK</label>
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" id="nomorIndukKependudukanPelapor"
                                name="nomorIndukKependudukanPelapor" title="">
                        </div>
                    </div>
    
                    {{-- Pelapor Nama Lengkap  --}}
                    <div class="row mb-2 align-items-center">
                        <div class="col-md-2 text-end">
                            <label for="namaLengkapPelapor" class="col-form-label py-0">Nama Lengkap</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="namaLengkapPelapor" name="namaLengkapPelapor"
                                title="">
                        </div>
                    </div>
    
                    {{-- Tanggal Lahir Pelapor --}}
                    Tanggal Lahir :
                    <div class="row mb-3 align-items-center justify-content-center">
                        <div class="col pe-0 text-end">
                            <label for="tanggalLahirPelapor" class="col-form-label py-0">Tanggal</label>
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" id="tanggalLahirPelapor"
                                name="tanggalLahirPelapor" style="width: 2.875rem;"
                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                maxlength="2" title="">
                        </div>
                        <div class="col pe-0 text-end">
                            <label for="bulanLahirPelapor" class="col-form-label py-0">Bulan</label>
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" id="bulanLahirPelapor" name="bulanLahirPelapor"
                                style="width: 2.875rem;"
                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                maxlength="2" title="">
                        </div>
                        <div class="col pe-0 text-end">
                            <label for="tahunLahirPelapor" class="col-form-label py-0">Tahun</label>
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" id="tahunLahirPelapor" name="tahunLahirPelapor"
                                style="width: 4.25rem;"
                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                maxlength="4" title="">
                        </div>
                        <div class="col pe-0 text-end">
                            <label for="umurPelapor" class="col-form-label py-0">Umur</label>
                        </div>
                        <div class="d-flex col">
                            <input type="number" class="form-control" id="umurPelapor" name="umurPelapor"
                                style="width: 3.5rem;"
                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                maxlength="3" title="">
                        </div>
                    </div>
    
                    {{--  Pekerjaan Pelapor --}}
                    <div class="row mb-2 align-items-center">
                        <div class="col-md-2 text-end">
                            <label for="pekerjaanPelapor" class="col-form-label py-0">Pekerjaan</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="pekerjaanPelapor" name="pekerjaanPelapor"
                                title="">
                        </div>
                    </div>
    
                    {{--  Alamat  --}}
                    <div class="row mb-2 align-items-center">
                        <div class="col-md-2 text-end">
                            <label for="alamatPelapor" class="col-form-label py-0">Alamat</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="alamatPelapor" name="alamatPelapor"
                                title="">
                        </div>
                    </div>
    
                    {{--  Alamat-Desa  --}}
                    <div class="row mb-2 align-items-center ps-4">
                        <div class="col-md-2 text-end">
                            <label for="alamatPelapor" class="col-form-label py-0">Desa/Kelurahan</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="alamatPelapor" name="desaPelapor"
                                title="">
                        </div>
                    </div>
    
                    {{--  Alamat-Kecamatan  --}}
                    <div class="row mb-2 align-items-center ps-4">
                        <div class="col-md-2 text-end">
                            <label for="alamatPelapor" class="col-form-label py-0">Kecamatan</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="alamatPelapor" name="kecPelapor"
                                title="">
                        </div>
                    </div>
    
                    {{--  Alamat-Kab/Kota  --}}
                    <div class="row mb-2 align-items-center ps-4">
                        <div class="col-md-2 text-end">
                            <label for="alamatPelapor" class="col-form-label py-0">Kab/Kota</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="alamatPelapor" name="kabPelapor"
                                title="">
                        </div>
                    </div>
    
                    {{--  Alamat-Provinsi  --}}
                    <div class="row mb-5 align-items-center ps-4">
                        <div class="col-md-2 text-end">
                            <label for="alamatPelapor" class="col-form-label py-0">Provinsi</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="alamatPelapor" name="kotaPelapor"
                                title="">
                        </div>
                    </div>
                </section>

                <section>
                    <hr>
    
                    <h2 class="text-center my-4 text-uppercase">Identitas Saksi 1</h2>
    
                    {{-- Saksi1 NIK  --}}
                    <div class="row mb-2 align-items-center">
                        <div class="col-md-2 text-end">
                            <label for="nomorIndukKependudukanSaksi1" class="col-form-label py-0">NIK</label>
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" id="nomorIndukKependudukanSaksi1"
                                name="nomorIndukKependudukanSaksi1" title="">
                        </div>
                    </div>
    
                    {{-- Saksi1 Nama Lengkap  --}}
                    <div class="row mb-2 align-items-center">
                        <div class="col-md-2 text-end">
                            <label for="namaLengkapSaksi1" class="col-form-label py-0">Nama Lengkap</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="namaLengkapSaksi1" name="namaLengkapSaksi1"
                                title="">
                        </div>
                    </div>
    
                    {{-- Tanggal Lahir Saksi1 --}}
                    Tanggal Lahir :
                    <div class="row mb-3 align-items-center justify-content-center">
                        <div class="col pe-0 text-end">
                            <label for="tanggalLahirSaksi1" class="col-form-label py-0">Tanggal</label>
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" id="tanggalLahirSaksi1" name="tanggalLahirSaksi1"
                                style="width: 2.875rem;"
                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                maxlength="2" title="">
                        </div>
                        <div class="col pe-0 text-end">
                            <label for="bulanLahirSaksi1" class="col-form-label py-0">Bulan</label>
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" id="bulanLahirSaksi1" name="bulanLahirSaksi1"
                                style="width: 2.875rem;"
                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                maxlength="2" title="">
                        </div>
                        <div class="col pe-0 text-end">
                            <label for="tahunLahirSaksi1" class="col-form-label py-0">Tahun</label>
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" id="tahunLahirSaksi1" name="tahunLahirSaksi1"
                                style="width: 4.25rem;"
                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                maxlength="4" title="">
                        </div>
                        <div class="col pe-0 text-end">
                            <label for="umurSaksi1" class="col-form-label py-0">Umur</label>
                        </div>
                        <div class="d-flex col">
                            <input type="number" class="form-control" id="umurSaksi1" name="umurSaksi1"
                                style="width: 3.5rem;"
                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                maxlength="3" title="">
                        </div>
                    </div>
    
                    {{--  Pekerjaan Saksi1 --}}
                    <div class="row mb-2 align-items-center">
                        <div class="col-md-2 text-end">
                            <label for="pekerjaanSaksi1" class="col-form-label py-0">Pekerjaan</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="pekerjaanSaksi1" name="pekerjaanSaksi1"
                                title="">
                        </div>
                    </div>
    
                    {{--  Alamat  --}}
                    <div class="row mb-2 align-items-center">
                        <div class="col-md-2 text-end">
                            <label for="alamatSaksi1" class="col-form-label py-0">Alamat</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="alamatSaksi1" name="alamatSaksi1"
                                title="">
                        </div>
                    </div>
    
                    {{--  Alamat-Desa  --}}
                    <div class="row mb-2 align-items-center ps-4">
                        <div class="col-md-2 text-end">
                            <label for="alamatSaksi1" class="col-form-label py-0">Desa/Kelurahan</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="alamatSaksi1" name="desaSaksi1"
                                title="">
                        </div>
                    </div>
    
                    {{--  Alamat-Kecamatan  --}}
                    <div class="row mb-2 align-items-center ps-4">
                        <div class="col-md-2 text-end">
                            <label for="alamatSaksi1" class="col-form-label py-0">Kecamatan</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="alamatSaksi1" name="kecSaksi1"
                                title="">
                        </div>
                    </div>
    
                    {{--  Alamat-Kab/Kota  --}}
                    <div class="row mb-2 align-items-center ps-4">
                        <div class="col-md-2 text-end">
                            <label for="alamatSaksi1" class="col-form-label py-0">Kab/Kota</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="alamatSaksi1" name="kabSaksi1"
                                title="">
                        </div>
                    </div>
    
                    {{--  Alamat-Provinsi  --}}
                    <div class="row mb-5 align-items-center ps-4">
                        <div class="col-md-2 text-end">
                            <label for="alamatSaksi1" class="col-form-label py-0">Provinsi</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="alamatSaksi1" name="provSaksi1"
                                title="">
                        </div>
                    </div>
                </section>

                <section>
                    <hr>
    
                    <h2 class="text-center my-4 text-uppercase">Identitas Saksi 2</h2>
    
                    {{-- Saksi2 NIK  --}}
                    <div class="row mb-2 align-items-center">
                        <div class="col-md-2 text-end">
                            <label for="nomorIndukKependudukanSaksi2" class="col-form-label py-0">NIK</label>
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" id="nomorIndukKependudukanSaksi2"
                                name="nomorIndukKependudukanSaksi2" title="">
                        </div>
                    </div>
    
                    {{-- Saksi2 Nama Lengkap  --}}
                    <div class="row mb-2 align-items-center">
                        <div class="col-md-2 text-end">
                            <label for="namaLengkapSaksi2" class="col-form-label py-0">Nama Lengkap</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="namaLengkapSaksi2" name="namaLengkapSaksi2"
                                title="">
                        </div>
                    </div>
    
                    {{-- Tanggal Lahir Saksi2 --}}
                    Tanggal Lahir :
                    <div class="row mb-3 align-items-center justify-content-center">
                        <div class="col pe-0 text-end">
                            <label for="tanggalLahirSaksi2" class="col-form-label py-0">Tanggal</label>
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" id="tanggalLahirSaksi2" name="tanggalLahirSaksi2"
                                style="width: 2.875rem;"
                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                maxlength="2" title="">
                        </div>
                        <div class="col pe-0 text-end">
                            <label for="bulanLahirSaksi2" class="col-form-label py-0">Bulan</label>
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" id="bulanLahirSaksi2" name="bulanLahirSaksi2"
                                style="width: 2.875rem;"
                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                maxlength="2" title="">
                        </div>
                        <div class="col pe-0 text-end">
                            <label for="tahunLahirSaksi2" class="col-form-label py-0">Tahun</label>
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" id="tahunLahirSaksi2" name="tahunLahirSaksi2"
                                style="width: 4.25rem;"
                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                maxlength="4" title="">
                        </div>
                        <div class="col pe-0 text-end">
                            <label for="umurSaksi2" class="col-form-label py-0">Umur</label>
                        </div>
                        <div class="d-flex col">
                            <input type="number" class="form-control" id="umurSaksi2" name="umurSaksi2"
                                style="width: 3.5rem;"
                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                maxlength="3" title="">
                        </div>
                    </div>
    
                    {{--  Pekerjaan Saksi2 --}}
                    <div class="row mb-2 align-items-center">
                        <div class="col-md-2 text-end">
                            <label for="pekerjaanSaksi2" class="col-form-label py-0">Pekerjaan</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="pekerjaanSaksi2" name="pekerjaanSaksi2"
                                title="">
                        </div>
                    </div>
    
                    {{--  Alamat  --}}
                    <div class="row mb-2 align-items-center">
                        <div class="col-md-2 text-end">
                            <label for="alamatSaksi2" class="col-form-label py-0">Alamat</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="alamatSaksi2" name="alamatSaksi2"
                                title="">
                        </div>
                    </div>
    
                    <div class="row mb-2 align-items-center ps-4">
                        <div class="col-md-2 text-end">
                            <label for="alamatSaksi2" class="col-form-label py-0">Desa/Kelurahan</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="alamatSaksi2" name="desaSaksi2"
                                title="">
                        </div>
                    </div>
    
                    <div class="row mb-2 align-items-center ps-4">
                        <div class="col-md-2 text-end">
                            <label for="alamatSaksi2" class="col-form-label py-0">Kecamatan</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="alamatSaksi2" name="kecSaksi2"
                                title="">
                        </div>
                    </div>

                    <div class="row mb-2 align-items-center ps-4">
                        <div class="col-md-2 text-end">
                            <label for="alamatSaksi2" class="col-form-label py-0">Kab/Kota</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="alamatSaksi2" name="kabSaksi2"
                                title="">
                        </div>
                    </div>
    
                    <div class="row mb-5 align-items-center ps-4">
                        <div class="col-md-2 text-end">
                            <label for="alamatSaksi2" class="col-form-label py-0">Provinsi</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="alamatSaksi2" name="provSaksi2"
                                title="">
                        </div>
                    </div>
                </section>

                <div class="d-flex justify-content-center">
                    <button class="btn btn-primary" type="submit">Unduh Form dan Lanjutkan</button>
                </div>
            </form>
        </div>
    </div>
</body>