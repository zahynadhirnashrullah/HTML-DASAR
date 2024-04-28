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

<h1>Halaman PHP zahy</h1>

<?php

// Data kelas dengan array 2 dimensi
$array = array(
    "1A" => array("Angger", "Noval", "Laduni"),
    "1B" => array("Zahy", "Ilham", "Yatno")
);

// Menampilkan data array
print_r($array);
echo "<br>";

// Menampilkan data kelas 1B
print_r($array['1B']);
echo "<br>";

// Menampilkan data kelas 1B dengan index 0
echo $array['1B'][0];
echo "<br>";

// Menampilkan Noval
echo $array['1A'][1];
echo "<br>";

// Menampilkan Laduni
echo $array['1A'][2];
echo "<br>";

// Data kelas bisa ditulis juga dengan
$array_simple = [     
    "1C" => ["Angger", "Noval", "Laduni"],
    "1B" => ["Zahy", "Ilham", "Yatno"]
];

?>

</body>
</html>
