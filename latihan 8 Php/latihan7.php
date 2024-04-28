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

    $namaBuah = array("Nanas", "Mangga", "Jeruk", "Apel", "Melon", "Manggis");
    echo "saya suka" . $namaBuah[0] . ", " . $namaBuah[1] . " dan " . $namaBuah[2] . " . ";
    
    // tampilan Mangga
    echo "saya suka" . $namaBuah [0] ;
    
    // tampilan Jeruk
    echo "saya suka" . $namaBuah[1] ;

    // tampilan Apel
    echo "saya suka" . $namaBuah[2] ;

    // tampilan Melon
    echo "saya suka" . $namaBuah[3] ;

    // array dengan spesifik index
    $umur = array ("zahy" => "19 Tahun", "ringga" => "21 Tahun", "daffa" => "21 Tahun");
    $umur ['zahy'] = "19 Tahun";
    echo " umur ringga adalah " . $umur['ringga'] . " . ";

    // tampilan umur zahy  
    echo " umur zahy adalah " . $umur['zahy'] . " . ";

    // tampilan umur ringga
    echo " umur ringga adalah " . $umur['ringga'] . " . ";

    // tampilan umur daffa
    echo " umur daffa adalah " . $umur['daffa'] . " . ";

    ?>

</body>
</html>
