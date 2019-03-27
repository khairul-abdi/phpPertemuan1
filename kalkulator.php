<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <input type="text" name="nilai1" placeholder="Masukkan Nilai1">
        <input type="text" name="nilai2" placeholder="Masukkan Nilai2">
        <input type="submit" value="Hitung">



    </form>

    <?php


    $nilai1 = $_POST['nilai1'];
    $nilai2 = $_POST['nilai2'];


    $tamba = $nilai1 + $nilai2;
    $kurang =  $nilai1 - $nilai2;
    $kali =  $nilai1 * $nilai2;
    $bagi =  $nilai1 / $nilai2;




    echo "<br/> Tambah = " . $tamba;
    echo "<br/> Kurang = " . $kurang;
    echo "<br/> Kali = " . $kali;
    echo "<br/> Bagi = " . $bagi;



    ?>


</body>

</html> 