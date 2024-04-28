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
function konversiTerbilang($angka) {
    switch ($angka) {
        case "1":
            echo "satu";
            break;
        case "2":
            echo "dua";
            break;
        case "3":
            echo "tiga";
            break;
        case "4":
            echo "empat";
            break;
        case "5":
            echo "lima";
            break;
        case "6":
            echo "enam";
            break;
        case "7":
            echo "tujuh";
            break;
        case "8":
            echo "delapan";
            break;
        case "9":
            echo "sembilan";
            break;
        default:
            return "Angka tidak valid";
    }
}

// Memeriksa apakah tombol konversi ditekan
if (isset($_POST['konversi'])) {
    // Mendapatkan angka dari input form
    $angka = $_POST['angka'];
    
    // Memanggil fungsi konversiTerbilang() untuk mengkonversi angka menjadi terbilang
    $terbilang = konversiTerbilang($angka);

    // Menampilkan hasil konversi
    echo "<p>Angka $angka terbilang menjadi: $terbilang</p>";
}
?>

</body>
</html>
