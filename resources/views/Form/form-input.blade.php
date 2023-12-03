@php
    $selectedValue = $_GET['selectedValue'];
@endphp

@if ($selectedValue === 'Akta Kelahiran')
    <label for="kartuKeluarga">Masukkan nomor kartu keluarga:</label>
    <input type="text" id="kartuKeluarga" name="kartuKeluarga">
@elseif ($selectedValue === 'Akta Kematian')
    @include('Form.detail-form-akta-kematian')
@elseif ($selectedValue === 'Pembuatan Kartu Keluarga')
    <label for="kartuKeluarga">Masukkan nomor kartu keluarga:</label>
    <input type="text" id="kartuKeluarga" name="kartuKeluarga">
@else
    
@endif
