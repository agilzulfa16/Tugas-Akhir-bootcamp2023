<?php
//Warning! : Jika error lihat peringatan di baris akhir code ini

require 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama_customer'];
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];
$tanggal = $_POST['tgl_penjualan'];
$jenis = $_POST['jenis_cat'];
$warna = $_POST['warna'];
$jumlah = $_POST['jml_beli'];

$update =   "UPDATE `penjualan` SET `nama_customer` = '$nama', `no_hp` = '$no_hp', `alamat` = '$alamat', `tgl_penjualan` = '$tanggal', `jenis_cat` = '$jenis', `warna` = '$warna', `jml_beli` = '$jumlah' WHERE `id` = '$id'";
$result = mysqli_query($conn, $update);

// Redirect ke halaman utama(link url mungkin berbeda beda di setiap device maka harus dibah terlebih dahulu sesuai folder penyimpanan)
header('location: http://localhost/BELAJAR-PHP/tugasAkhir/tugasKelompok')
   

?>
