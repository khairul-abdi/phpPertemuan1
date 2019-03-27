<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kalkulator Sederhana</title>

    <style>
        .body {
            background: #F2F2F2;
            font-family: sans-serif;
        }

        .kalkulator {
            width: 335px;
            background: #2F495A;
            margin: 100px auto;
            padding: 10px 20px 50px 20px;
            border-radius: 5px;
            box-shadow: 15px 15px 20px 0px #D1D1D1;
        }

        .nilai {
            width: 130px;
            margin: 5px;
            border: none;
            font-size: 11pt;
            border-radius: 5px;
            padding: 10px;
        }

        .hitung {
            width: 100px;
            background: yellow;
            font-family: elephant;
            font-size: 12pt;
            margin: 30px 100px 0px;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="kalkulator">
        <h1>Kalkulator Sederhana</h1>
        <form action="kalkulator_sederhana.php" method="post">
            <input type="text" name="nilai1" class="nilai" placeholder="Masukkan Nilai1">
            <input type="text" name="nilai2" class="nilai" placeholder="Masukkan Nilai1">
            <h4>Operasi</h4>
            <input type="radio" name="operasi" value="tambah">Penjumlahan<br>
            <input type="radio" name="operasi" value="kurang">Pengurangan<br>
            <input type="radio" name="operasi" value="kali">Perkalian<br>
            <input type="radio" name="operasi" value="bagi">Pembagian<br>
            <input type="submit" name="submit" class="hitung" value="HITUNG">
        </form>


    </div>

    <?php
    $a = $_POST['nilai1'];
    $b = $_POST['nilai2'];
    $operasi = $_POST['operasi'];

    echo "Nilai 1 = $a <br>";
    echo "Nilai 2 = $b <br>";

    if ($operasi == "tambah") {
        $c = $a + $b;
        echo "Hasil penjumlahan $a + $b = $c";
    } else if ($operasi == "kurang") {
        $c = $a - $b;
        echo "Hasil Pengurangan $a - $b = $c";
    } else if ($operasi == "kali") {
        $c = $a * $b;
        echo "Hasil Perkalian $a x $b = $c";
    } else if ($operasi == "bagi") {
        $c = $a / $b;
        echo "Hasil Pembagian $a / $b = $c";
    } else {
        echo "<h1>Pilih Operasi Dulu</h1>";
    }
    ?>

</body>

</html> 