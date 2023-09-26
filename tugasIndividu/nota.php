<?php
$nama = $_POST['nama_customer'];
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];
$tanggal = $_POST['tgl_penjualan'];
$jenis = $_POST['jenis_cat'];
$warna = $_POST['warna'];
$jumlah = $_POST['jml_beli'];
$harga = 0;

// Hitung harga berdasarkan jenis cat
switch($jenis){
    case "Bituminous Paint":
        $harga = 20000;
        break;
    case "Chlorinated Rubber":
        $harga = 30000; // Ubah harga sesuai dengan jenis cat
        break;
    case "Vinyl":
        $harga = 40000;
        break;
    default:
        $harga = 0; // Harga default jika jenis tidak dikenali
};

// Hitung total harga
$total = $harga * $jumlah;

// Hitung diskon berdasarkan jumlah beli
$diskon = 0;
if($jumlah >= 5 && $jumlah < 10){
    $diskon = $total * 0.05;
}elseif($jumlah >= 10){
    $diskon = $total * 0.1;
}

// Hitung total bayar
$tolbay = $total - $diskon;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siliwangi Guna Jaya</title>
</head>
<body>
    <fieldset  style=" width : 30%; margin:auto">
        <hr>
        <h3 align = "center";>Toko Cat Siliwangi Guna Jaya</h3>
        <hr>
        
        
        <?php ;
        echo "<div class = 'var'>";
        echo "Nama Customer <br><br>";
        echo "Nomor HP <br><br>";
        echo "Alamat <br><br>";
        echo "Tanggal <br><br>";
        echo "Jenis Cat <br><br>";
        echo "Warna <br><br>";
        echo "Harga <br><br>";
        echo "Jumlah beli <br>";
      
        echo "<div class = 'nama'>";
        echo ": $nama<br><br>";
        echo ": $no_hp<br><br>";
        echo ": $alamat<br><br>";
        echo ": $tanggal<br><br>";
        echo ": $jenis<br><br>";
        echo ": $warna<br><br>";
        echo ": Rp.  $harga<br><br>";
        echo ": $jumlah<br>";
        echo "</div></div>";

        echo "<hr>";

        echo "<div class = 'var'>";
        echo "Total harga <br><br>";
        echo "Diskon <br>";

        echo "<div class = 'nam'>";
        echo ":  Rp. $total <br><br>"; 
        echo ":  Rp. $diskon<br>";
        echo "</div></div>";
        echo "<hr>";

        echo "<div class = 'var'>";
        echo "Total Bayar:<br><br>";

        echo "<div class = 'na'>";
        echo ":  Rp. $tolbay <br><br>"; 
        echo "</div></div>";

        echo "<hr>";
        ?>

    </fieldset>
</body>
</html>


<style> 
    .var{
        display: flex;
        padding-left: 20px;
    }
    .nama{
        margin-left: 50px;
        
    }

    .nam{
        margin-left: 82px;
    }

    .na{
        margin-left: 75px;
    }
   
</style>

