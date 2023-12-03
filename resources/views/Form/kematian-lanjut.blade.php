<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('layouts.navbar')
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
        <h2 class="text-center">Data Pendukung</h2>
    </div>
    <div class="card-body">
    <form action="/postsuratkematian" method="POST" enctype="multipart/form-data">
    @csrf
    @if (isset($pdfDownloadUrl))
    <input type="hidden" name="pdfDownloadUrl" value="{{ $pdfDownloadUrl }}">
        <div class="row mb-3 align-items-center">
            <div class="col-md-2 text-end">
                <label for="fileSPkematian" class="col-form-label py-0">Formulir Surat Kematian</label>
            </div>
            <div class="col input-group">
                <a href="{{ $pdfDownloadUrl }}" class="btn btn-primary" download="spkematian.pdf">Download Surat Kematian</a>
            </div>
        </div>
        @endif
        <div class="mb-3">
            <label for="fileKTPJenazah" class="form-label">Unggah KTP Jenazah</label>
            <div class="input-group">
                <input type="file" class="form-control" id="fileKTPJenazah" name="fileKTPJenazah">
                <label for="fileKTPJenazah" class="input-group-text"><i class="fa-solid fa-upload"></i>Pilih File</label>
            </div>
        </div>
        <div class="mb-3">
            <label for="fileKKJenazah" class="form-label">Unggah KK Jenazah</label>
            <div class="input-group">
                <input type="file" class="form-control" id="fileKKJenazah" name="fileKKJenazah">
                <label for="fileKKJenazah" class="input-group-text"><i class="fa-solid fa-upload"></i>Pilih File</label>
            </div>
        </div>
        <div class="mb-3">
            <label for="fileKTPPelapor" class="form-label">Unggah KTP Pelapor</label>
            <div class="input-group">
                <input type="file" class="form-control" id="fileKTPPelapor" name="fileKTPPelapor">
                <label for="fileKTPPelapor" class="input-group-text"><i class="fa-solid fa-upload"></i>Pilih File</label>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <button class="btn btn-primary" type="submit">Kirimkan Formulir</button>
        </div>
    </form>
    </div>
</body>

</html>