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

    function convertNilai($nilaiAngka) {
        if ($nilaiAngka >= 90 && $nilaiAngka <= 100) {
            $nilaiHuruf = "A";
        } else if ($nilaiAngka >= 80 && $nilaiAngka <= 89) {
            $nilaiHuruf = "AB";
        } else if ($nilaiAngka >= 70 && $nilaiAngka <= 79) {
            $nilaiHuruf = "B";
        } else if ($nilaiAngka >= 60 && $nilaiAngka <= 69) {
            $nilaiHuruf = "BC";
        } else if ($nilaiAngka >= 50 && $nilaiAngka <= 59) {
            $nilaiHuruf = "C";
        } else {
            $nilaiHuruf = "E"; 
        }
        return $nilaiHuruf;
    }

    // Input nilai angka
    $nilaiAngka = readline("Masukkan nilai angka: ");

    // Panggil fungsi untuk konversi
    $nilaiHuruf = convertNilai($nilaiAngka);

    // Tampilkan hasil konversi
    echo "Nilai Angka: $nilaiAngka\nNilai Huruf: $nilaiHuruf";

    ?>

</body>
</html>