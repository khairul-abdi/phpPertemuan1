<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FORM TO PHP</title>
</head>

<body>
    <form method="post">
        <input type="text" name="nm_pembeli" placeholder="Masukkan Nama Pembeli">
        <input type="text" name="nm_buku" placeholder="Masukkan Nama Buku">
        <input type="text" name="tgl_beli" placeholder="Masukkan Tanggal Beli">
        <input type="text" name="jml_beli" placeholder="Masukkan Jumlah Beli">
        <input type="text" name="hrg" placeholder="Masukkan Harga Buku">
        <input type="submit" name="Cek Nilai Anda">

    </form>

    <?php

    echo "<br/> Nama Pembeli     = " . $nm_pembeli = $_POST['nm_pembeli'];
    echo "<br/> Nama Buku        = " . $nm_buku = $_POST['nm_buku'];
    echo "<br/> Tanggal Beli     = " . $tgl_beli = $_POST['tgl_beli'];
    echo "<br/> Jumlah Beli      = " . $jml_beli = $_POST['jml_beli'];
    echo "<br/> Harga Buku       = " . $hrg = $_POST['hrg'];

    $tot = $jml_beli * $hrg;

    echo "<br/> Total Harga Buku = " . $tot;
    ?>
</body>




</html> 