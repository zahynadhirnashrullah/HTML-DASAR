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
// Mengulangi angka dari 1 hingga 10 menggunakan perulangan for
for ($i = 1; $i <= 10; $i++) {
    echo "Angka ke-" . $i . " adalah " . $i . "<br>";
}

// Mengulangi angka dari 1 hingga 10 menggunakan perulangan while
$j = 1;
while ($j <= 10) {
    echo "Angka ke-" . $j . " adalah " . $j . "<br>";
    $j++;
}

// Mengulangi angka dari 1 hingga 10 menggunakan perulangan do-while
$k = 1;
do {
    echo "Angka ke-" . $k . " adalah " . $k . "<br>";
    $k++;
} while ($k <= 10);

?>
</body>
</html>
