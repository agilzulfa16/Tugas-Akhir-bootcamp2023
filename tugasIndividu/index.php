<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siliwangi Guna Jaya</title>
</head>
<body>
    <fieldset style="width: 30%;margin:auto; padding: 0px 20px 40px 20px">
    <h2 align = "center">Siliwangi Guna Jaya</h2>
    <hr>
    <form action="nota.php" method="POST">
   <br>
    

    <div class="kontainer">
    <div class="lab">
    <label for="nama">Nama Customer: </label><br><br><br>
    <label for="nohp">No HP: </label> <br><br>
    <label for="alamat">Alamat: </label> <br><br><br><br><br>
    <label for="tanggal">Tanggal: </label> <br><br>
    <label for="jenis_cat">Jenis Cat: </label> <br><br>
    <label for="warna">Warna Cat:</label> <br><br>
    <label for="jumlah">Jumlah Beli</label> <br><br><br>
    </div>
    
    <div class="input">
        <input type="text" name="nama_customer" required><br><br>
        <input type="text" name="no_hp"> <br><br>
    <textarea name="alamat"  cols="21" rows="5"></textarea>
    <input type="date" name="tgl_penjualan" required> <br><br>
    <select name="jenis_cat" required style="margin-bottom: 10px;">
        <option value="Bituminous Paint">Bituminous Paint</option>
        <option value="Chlorinated Rubber">Chlorinated Rubber</option>
        <option value="Vinyl">Vinyl</option>
    </select> <br>
    <input type="radio" name="warna" value="Merah"> Merah
    <input type="radio" name="warna" value="Biru"> Biru
    <input type="radio" name="warna" value="Kuning"> kuning <br><br>
    <input type="number" name="jml_beli" required><br><br>

    </div></div>

    <input type="submit" value="submit">
    <input type="reset" value="Reset">

    </form></fieldset>
</body>
</html>

<style>
    .kontainer{
        display: flex;
    }

    .input{
        margin-left: 0px;
    }

    input{
        height: 20px;
    }

    .lab{
        width: 50%;
    }
</style>
  