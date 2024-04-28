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

// Define data siswa sebagai array asosiatif
$studentData = array(
    array("No Urut", "Nama", "Poin"),
    array(1, "Adi", 75),
    array(2, "Joni", 80),
    array(3, "Jihan", 65),
    array(4, "Aya", 70),
    array(5, "Ita", 85),
    array(6, "Budi", 90),
    array(7, "Tini", 95),
    array(8, "Sari", 65),
);

// Menampilkan data siswa dengan nomor urut 5
echo "Siswa dengan nomor urut 5: ";
foreach ($studentData as $row) {
    if ($row[0] == 5) {
        echo $row[1] . " (" . $row[2] . " poin)";
        break;
    }
}

echo "<br>";

// Menampilkan semua siswa dengan 90 poin
echo "Siswa dengan poin 90: ";
$count90 = 0; // Penghitung untuk siswa dengan 90 poin
foreach ($studentData as $row) {
    if ($row[2] == 90) {
        echo $row[1] . ", ";
        $count90++;
    }
}

if ($count90 == 0) {
    echo "Tidak ada.";
}

echo "<br>";

// Menampilkan semua siswa dengan 100 poin (tidak ada hasil)
echo "Siswa dengan poin 100: ";
$count100 = 0; // Penghitung untuk siswa dengan 100 poin
foreach ($studentData as $row) {
    if ($row[2] == 100) {
        echo $row[1] . ", ";
        $count100++;
    }
}

if ($count100 == 0) {
    echo "Tidak ada.";
}
?>

</body>
</html>
