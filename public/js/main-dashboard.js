document.addEventListener('DOMContentLoaded', function () {     

const umkmElems = document.querySelectorAll('.umkm, .profile, .administrasi');

    // Tambahkan event listener untuk event AOS
    umkmElems.forEach(function (umkmElem) {
        umkmElem.addEventListener('mouseenter', function () {
            // Setelah animasi AOS selesai, tambahkan transisi box-shadow dan transform scale
            umkmElem.style.transition = 'box-shadow 0.3s ease, transform 0.3s ease';
            umkmElem.style.transform = 'scale(1.05)';
            umkmElem.style.boxShadow = '5px 5px 5px 1px rgba(44, 44, 44, 0.5)';
        });
        umkmElem.addEventListener('mouseleave', function () {
            // Setelah animasi AOS selesai, hapus transisi box-shadow dan transform scale
            umkmElem.style.transform = 'scale(1)';
            umkmElem.style.boxShadow = 'none';
        });
    });
});