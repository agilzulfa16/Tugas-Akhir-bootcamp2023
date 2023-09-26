<?php
    //Warning! : Jika error lihat peringatan di baris akhir code ini
    require 'koneksi.php';
    $id = $_GET['id'];

    $result = mysqli_query($conn, "DELETE FROM penjualan WHERE `id` = '$id'");

    // Redirect ke halaman utama(link url mungkin berbeda beda di setiap device maka harus dibah terlebih dahulu sesuai folder penyimpanan)
    header('location: http://localhost/BELAJAR-PHP/tugasAkhir/tugasKelompok')
?>