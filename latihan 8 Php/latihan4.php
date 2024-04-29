<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Halaman zahy</title>
    <link rel="icon" type="img/png" href="gambar/icon.png" sizes="16x16" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307060">
    <meta name="author" content="zahy nadhir">

</head>
<body>

<body>
<h1>Halaman PHP zahy</h1>

<?php

    $t = date( "H" ); //mendapatkan jam dengan format 1-24
    echo "if";
    if ($t < 16) {
        echo "Selamat siang!";
    }

    $t = date("H"); //mendapatkan jam dengan format 1-24
    echo "<br> If dan Else <br>";
    if ($t < 20) {
        echo "Selamat siang!";
    } else {
        echo "Selamat malam!";
    }

    echo "<br> Nested If <br>";
    if ($t < 20) {
        echo "Selamat pagi!";
    } elseif ($t < 16) {
        echo "Selamat sore!";
    } else {
        echo "Selamat Malam!";
    }

    ?>

</body>
</html>
