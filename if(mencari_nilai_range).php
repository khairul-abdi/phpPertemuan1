<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nilai </title>
</head>

<body>
    <form method="post">
        <br>
        <input type="text" name="nilai" placeholder="Masukkan Nilai">
        <input type="submit" name="cek_nilai" value="Convert">

    </form>

    <?php
    $a = $_POST['nilai'];


    if ($a >= 90 && $a <= 100) {
        $grade = "A";
    } else if ($a >= 80) {
        $grade = "B";
    } else if ($a >= 70) {
        $grade = "C";
    } else if ($a >= 60) {
        $grade = "D";
    } else if ($a >= 50) {
        $grade = "E";
    } else {
        $grade = "Gagal";
    }


    echo "</br>Nilai Angka = $a <br>";
    echo "Nilai Huruf = $grade <br>";
    ?>
</body>

</html> 