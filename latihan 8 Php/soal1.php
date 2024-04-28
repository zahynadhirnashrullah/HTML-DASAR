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
$gaji_pokok = 3250000; // Gaji pokok Obi
$tunjangan_jabatan = 1200000; // Tunjangan jabatan Obi
$pajak_penghasilan = 0.1; // Persentase pajak penghasilan (10%)

// Menghitung gaji kotor (gaji pokok + tunjangan)
$gaji_kotor = $gaji_pokok + $tunjangan_jabatan;

// Menghitung jumlah pajak
$pajak = $gaji_kotor * $pajak_penghasilan;

// Menghitung gaji bersih (gaji kotor dikurangi pajak)
$gaji_bersih = $gaji_kotor - $pajak;

// Menampilkan hasil
echo "Gaji bersih Obi setiap bulannya adalah: Rp. " . number_format($gaji_bersih, 0, ',', '.') . ",-";
?>

</body>
</html>
