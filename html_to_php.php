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
        <input type="text" name="nilai" placeholder="Masukkan Nilai">
        <input type="submit" name="Cek Nilai Anda">

    </form>

    <?php
    echo "<br/> Nilai Anda = " . $nilai = $_POST['nilai'];
    ?>
</body>

</html> 