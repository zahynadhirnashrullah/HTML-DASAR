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
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $angka = $_POST['angka'];

        switch ($angka) {
            case 1:
                echo "Satu";
                break;
            case 2:
                echo "Dua";
                break;
            case 3:
                echo "Tiga";
                break;
            case 4:
                echo "Empat";
                break;
            case 5:
                echo "Lima";
                break;
            case 6:
                echo "Enam";
                break;
            case 7:
                echo "Tujuh";
                break;
            case 8:
                echo "Delapan";
                break;
            case 9:
                echo "Sembilan";
                break;
            default:
                echo "Angka tidak valid.";
        }
    }
    ?>

</body>
</html>
