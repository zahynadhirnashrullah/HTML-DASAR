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
// Deklarasi variabel
$jumlah_penarikan = 1387500; // Jumlah uang yang ditarik Ani dari Bank
$pecahan_uang = array(100000, 50000, 20000, 10000, 5000, 2000, 500); // Nilai dari masing-masing pecahan uang
$banyak_pecahan = array(); // Array untuk menyimpan banyaknya masing-masing pecahan uang

// Menghitung banyaknya masing-masing pecahan uang
foreach ($pecahan_uang as $nilai) {
    // Menghitung banyaknya pecahan uang yang diperoleh Ani
    $jumlah = floor($jumlah_penarikan / $nilai);
    // Menyimpan banyaknya pecahan uang ke dalam array
    $banyak_pecahan[$nilai] = $jumlah;
    // Mengurangi jumlah uang yang telah diterima Ani
    $jumlah_penarikan -= $jumlah * $nilai;
}

// Menampilkan hasil
echo "Ani menerima pecahan uang sebagai berikut:<br>";
foreach ($banyak_pecahan as $nilai => $jumlah) {
    echo "Uang pecahan Rp. " . number_format($nilai, 0, ',', '.') . " sebanyak " . $jumlah . " lembar<br>";
}
?>
 
</body>
</html>
