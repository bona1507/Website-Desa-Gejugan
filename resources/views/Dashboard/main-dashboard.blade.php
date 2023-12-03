<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Website Desa Gejugan</title>
    @include('layouts.favicon')
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/main-dashboard.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@next/dist/aos.css" rel="stylesheet" />
</head>

<body>
    @include('layouts.navbar')

    <section>
        <div id="carouselIndicator" class="carousel slide" data-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselIndicator" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselIndicator" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselIndicator" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselIndicator" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="carousel/Carousel-1.jpeg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Balai Desa Gejugan</h5>
                        <p>Kecamatan Pajarakan, Kabupaten Probolinggo, Provinsi Jawa Timur</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="carousel/Carousel-2.JPG" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Mahasiswa Membangun Desa</h5>
                        <p>Program sosialisasi pemberdayaan UMKM oleh Mahasiswa Universitas Brawijaya</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="carousel/Carousel-3.JPG" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Tahun Baru Islam</h5>
                        <p>Kegiatan kirab obor kolaborasi Desa Gejugan dengan SDN Gejugan</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="carousel/Carousel-4.jpg" alt="Fourth slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Pemasangan Keramba Penampung</h5>
                        <p>Program dana hibah pengabdian masyarakat strategis 1000 desa Universitas Brawijaya</p>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselIndicator"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselIndicator"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <section class="menu-utama">
        <div class="container d-flex flex-column align-items-center">
            <p class="badge rounded-pill text-primary mb-1" style="background-color: rgb(222, 239, 255)">Beranda</p>
            <h1 class="font-3 text-center px-4">Menu Utama</h1>
            <p class="font-1 mb-3 text-muted">Website Resmi <span class="text-primary">Desa Gejugan</span></p>

            <div class="menu-list d-flex align-items-center justify-content-center">
                <a href="javascript:void(0)" onclick="scrollToElement('profil-desa')"
                    class="profile text-decoration-none" draggable="false" data-aos="fade-up" data-aos-delay="100"
                    data-aos-anchor-placement="bottom-bottom" data-aos-once="true">
                    <div class="card text-white bg-success">
                        <div class="menu-card card-body p-4 d-flex align-items-center text-center gap-3"
                            style="border-radius: 7rem">
                            <svg class="profile-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path
                                    d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm80 256h64c44.2 0 80 35.8 80 80c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16c0-44.2 35.8-80 80-80zm-32-96a64 64 0 1 1 128 0 64 64 0 1 1 -128 0zm256-32H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16z" />
                            </svg>
                            <h3>Profil Desa</h3>
                        </div>
                    </div>
                </a>
                <a href="form" class="administrasi text-decoration-none" draggable="false" data-aos="fade-up"
                    data-aos-delay="150" data-aos-anchor-placement="bottom-bottom" data-aos-once="true">
                    <div class="card text-white bg-primary">
                        <div
                            class="menu-card card-body p-4 d-flex align-items-center justify-content-center text-center gap-3">
                            <svg class="home-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                <path
                                    d="M480 0c-17.7 0-32 14.3-32 32V192 512h64V192H624c8.8 0 16-7.2 16-16V48c0-8.8-7.2-16-16-16H512c0-17.7-14.3-32-32-32zM416 159L276.8 39.7c-12-10.3-29.7-10.3-41.7 0l-224 192C1 240.4-2.7 254.5 2 267.1S18.6 288 32 288H64V480c0 17.7 14.3 32 32 32h64c17.7 0 32-14.3 32-32V384c0-17.7 14.3-32 32-32h64c17.7 0 32 14.3 32 32v96c0 17.7 14.3 32 32 32h64.7l.2 0h-1V159z" />
                            </svg>
                            <h3>Administrasi Desa</h3>
                        </div>
                    </div>
                </a>

                <a href="data-umkm" class="umkm text-decoration-none" draggable="false" data-aos="fade-up"
                    data-aos-delay="200" data-aos-anchor-placement="bottom-bottom" data-aos-once="true">
                    <div class="card text-dark bg-warning">
                        <div
                            class="menu-card card-body p-4 d-flex align-items-center justify-content-center text-center gap-3">
                            <svg class="shop-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                <path
                                    d="M36.8 192H603.2c20.3 0 36.8-16.5 36.8-36.8c0-7.3-2.2-14.4-6.2-20.4L558.2 21.4C549.3 8 534.4 0 518.3 0H121.7c-16 0-31 8-39.9 21.4L6.2 134.7c-4 6.1-6.2 13.2-6.2 20.4C0 175.5 16.5 192 36.8 192zM64 224V384v80c0 26.5 21.5 48 48 48H336c26.5 0 48-21.5 48-48V384 224H320V384H128V224H64zm448 0V480c0 17.7 14.3 32 32 32s32-14.3 32-32V224H512z" />
                            </svg>
                            <h3>UMKM</h3>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section class="tentang-desa" id="profil-desa">
        <div class="container d-flex flex-column align-items-center">
            <div class="d-flex flex-column align-items-center" data-aos="fade-right" data-aos-duration="1500">
                <p class="badge rounded-pill text-primary mb-1" style="background-color: rgb(222, 239, 255)">Tentang
                </p>
                <h1 class="font-3 text-center px-4 pb-3" id="desa-title">Desa Gejugan</h1>
            </div>

            <div class="lokasi d-flex">
                <div class="align-self-center" data-aos="fade-left" style="max-width: 15rem"
                    data-aos-anchor-placement="bottom-bottom" data-aos-duration="1000">
                    <h1 class="font-2">Lokasi</h1>
                    <p class="font-1">Gejugan, sebuah desa yang terletak di Kecamatan Pajarakan, Kabupaten Probolinggo,
                        Provinsi Jawa Timur.</p>
                </div>
                <div class="google-lokasi mt-3" data-aos="fade-up" data-aos-anchor-placement="center-bottom"
                    data-aos-delay="300" data-aos-duration="1000">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15812.796326253365!2d113.34284818733998!3d-7.768701876008566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7aaede5ccc037%3A0xe94756c1b9c43ee0!2sGejugan%2C%20Kec.%20Pajarakan%2C%20Kabupaten%20Probolinggo%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1690652895262!5m2!1sid!2sid"
                        width="400" height="300" style="border-radius :1rem;" allowfullscreen=""
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

    <section class="potensi-alam">
        <div class="container d-flex flex-column align-items-center">
            <div class="d-flex flex-column align-items-center" data-aos="fade-right" data-aos-duration="1000">
                <h1 class="font-3 text-center p-3 ">Potensi Alam</h1>
            </div>

            <div class="card card-img" data-aos="fade-up" data-aos-duration="800">
                <img class="potensi-img-hero" src="{{ asset('storage/dashboard/tembakau-1.png') }}"
                    alt="petani-tembakau" draggable="false" data-aos="fade-right" data-aos-duration="800">
                <img class="potensi-img-hero" src="{{ asset('storage/dashboard/udang.jpg') }}"
                    alt="hasil-tangkap-udang" draggable="false" data-aos="fade-up" data-aos-duration="800"
                    data-aos-delay="100">
                <img class="potensi-img-hero" src="{{ asset('storage/dashboard/lumut-2.jpg') }}"
                    alt="hasil-lumut-laut" draggable="false" data-aos="fade-left" data-aos-duration="800"
                    data-aos-delay="200">
            </div>
        </div>

        <div class="container d-flex flex-column mb-3">
            <div class="pertanian">
                <div class="potensi-deskripsi" data-aos="fade-right" data-aos-duration="1000">
                    <h2 class="font-2">Hasil Tani</h2>
                    <p class="font-1">Para petani di Desa Gejugan melakukan penanaman <span
                            class="text-primary">tembakau, bawang, ataupun jagung</span>
                        tergantung dari kondisi cuaca dan musim yang cocok dari masing masing tumbuhan.</p>
                </div>
                <div class="" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <img class="potensi-img-detail" src="{{ asset('storage/dashboard/tembakau-2.jpg') }}"
                        alt="halo" draggable="false">
                </div>
            </div>
            <div class="pertanian">
                <div class="potensi-deskripsi" data-aos="fade-right" data-aos-duration="1000">
                    <h2 class="font-2">Lumut Laut</h2>
                    <p class="font-1">Ketika pada <span class="text-primary">musim tertentu banyak lumut laut</span>
                        yang berada di daerah pesisir
                        pantai, hal ini dimanfaatkan warga sekitar untuk dijual ke pengepul lumut laut.</p>
                </div>
                <div class="" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <img class="potensi-img-detail" src="{{ asset('storage/dashboard/lumut-1.jpg') }}" alt="halo"
                        draggable="false">
                </div>
            </div>
            <div class="kelautan">
                <div class="" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <img class="potensi-img-detail" src="{{ asset('storage/dashboard/ikan.jpg') }}" alt="halo"
                        draggable="false">
                </div>
                <div class="potensi-deskripsi" data-aos="fade-left" data-aos-duration="1000">
                    <h2 class="font-2">Hasil Tangkap Laut</h2>
                    <p class="font-1">Nelayan di Desa Gejugan menangkap ikan ikan dengan metode tradisional dengan
                        menggunakan <span class="text-primary">bagan tancap</span>, beberapa hasil diantaranya <span
                            class="text-primary">cumi-cumi, ikan asin, ikan belanak, dan
                            ikan ikan lainnya</span>. Ikan ikan tersebut dijual di <span class="text-primary">Pasar
                            Ikan di dekat Pantai Klasik
                            ramai dari pukul 5</span>.
                    </p>
                </div>
            </div>
            <div class="kelautan">
                <div class="" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <img class="potensi-img-detail" src="{{ asset('storage/dashboard/tambak-udang.jpg') }}"
                        alt="halo" draggable="false">
                </div>
                <div class="potensi-deskripsi" data-aos="fade-left" data-aos-duration="1000">
                    <h2 class="font-2">Tambak Udang</h2>
                    <p class="font-1">Desa Gejugan sebagai desa dekat dengan pesisir pantai yang cocok menjadi
                        ekosistem bagi pertumbuhan udang, beberapa tambak dimiliki PT.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="wisata">
        <div class="container d-flex flex-column align-items-center">
            <div class="d-flex flex-column align-items-center" data-aos="fade-right" data-aos-duration="1500">
                <p class="badge rounded-pill text-primary mb-1" style="background-color: rgb(222, 239, 255)">Wisata
                </p>
                <h1 class="font-3 text-center px-4 pb-3" id="desa-title">Destinasi Wisata</h1>
            </div>
            <div class="d-flex wisata-contain mt-5">
                <div class="" >
                    <img src="{{ asset('storage/dashboard/tambak-udang.jpg') }}"
                        alt="halo" draggable="false">
                </div>
                <div class="wisata-deskripsi align-self-center" data-aos="fade-left" style="max-width: 20rem"
                    data-aos-anchor-placement="bottom-bottom" data-aos-duration="1000">
                    <h2 class="font-2">Pantai Klasik</h2>
                    <p class="font-1">Pantai Klasik terletak di paling barat desa Gejugan, tepatnya di daerah Dusun Mayangan.</p>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.footer')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/main-dashboard.js') }}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();

        function scrollToElement(id) {
            const element = document.getElementById(id);
            if (element) {
                element.scrollIntoView({
                    behavior: "smooth"
                });
            }
        }

        function autoClickNext() {
            document.querySelector('#carouselIndicator .carousel-control-next').click();
        }

        setInterval(autoClickNext, 4000);
    </script>
</body>

</html>
