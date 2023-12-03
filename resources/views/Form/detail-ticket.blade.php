<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.favicon')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/detail-ticket.css') }}" rel="stylesheet" type="text/css">
    <title>Detail Tiket | Website Desa Gejugan</title>
</head>
<body>
    @include('layouts.navbar')
    
    <div class="container-d mt-5 d-flex flex-column align-items-center">
        <a href="/check-form" class="mb-4">
            <button type="submit" class="btn btn-danger submit-button" style="width: fit-content">
                <h4>kembali</h4>
            </button>
        </a>

        <h1 class="mb-2">Tiket {{ $ticket->kode_tiket }} </h1>
        <div class="status-bar">
            <div class="one status-list active">
                <h6>1</h6>
                <p class="text-center px-2">Menunggu Diverifikasi oleh Admin</p>
            </div>
            <div class="two status-list">
                <h6>2</h6>
                <p class="text-center px-2">Menunggu Disetujui oleh Kepala Desa</p>
            </div>
            <div class="three status-list" style="border: 0">
                <h6>3</h6>
                <p class="text-center px-2">Selesai</p>
            </div>
        </div>
    </div>
    
    @include('layouts.footer')
</body>
</html>

<script>
    const one = document.querySelector('.one');
    const two = document.querySelector('.two');
    const three = document.querySelector('.three');
    const four = document.querySelector('.four');
    const dataStatus = <?php echo $ticket->status; ?>;

    function updateActiveClass() {
        document.querySelector('.status-list.active').classList.remove('active');

        if (dataStatus === 0) {
            one.classList.add('active');
        } else if (dataStatus === 1) {
            one.classList.remove('pending');
            two.classList.add('active');
        } else if (dataStatus === 2) {
            three.classList.add('finished');
        } 
    }

    updateActiveClass();
</script>
</script>