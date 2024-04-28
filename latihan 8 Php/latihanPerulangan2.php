<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>halaman zahy</title>
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
// Mendefinisikan sebuah array angka
$angka = array(12,13, 15, 16, 67, 189, 346, 876, 54232, 3256);

// Mengulangi array dan menampilkan apakah setiap angka ganjil atau genap
foreach ($angka as $nilai) {
    if ($nilai % 2 == 0) {
        echo "Angka " . $nilai . " adalah genap<br>";
    } else {
        echo "Angka " . $nilai . " adalah ganjil<br>";
    }
}

?>

</body>
</html>
