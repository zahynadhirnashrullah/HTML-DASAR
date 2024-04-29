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

// contoh fungsi
function writeMsg($nama) {
    echo "selamat datang".$nama."<br>" ;
}
writemsg(nama:"zahy"); // pemanggilan fungsi

// fungsi dengan mengirim nilai balik
function tambah (int $angka1, int $angka2) {
    $a= $angka1 + $angka2;
    return $a; // mengirim nilai $a ke pemanggil
}
$hasil = tambah(angka1: 5, angka2: 5); 
echo ($hasil);

?>

</body>
</html>
