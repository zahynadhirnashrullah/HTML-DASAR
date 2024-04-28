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

// Define the grade conversion array
$gradeConversion = array(
    "A" => array(90, 100),
    "B" => array(80, 89),
    "C" => array(70, 79),
    "D" => array(60, 69),
    "F" => array(0, 59)
);

// Get the numerical grade from the user
$numericalGrade = $_GET["nilai"];

// Validate the numerical grade
if (!is_numeric($numericalGrade)) {
    echo "Nilai harus berupa angka.";
    exit;
}

// Convert the numerical grade to a letter grade
$letterGrade = "Invalid grade";
foreach ($gradeConversion as $letter => $range) {
    if ($numericalGrade >= $range[0] && $numericalGrade <= $range[1]) {
        $letterGrade = $letter;
        break;
    }
}

// Display the result
echo "Nilai angka: " . $numericalGrade . "<br>";
echo "Nilai huruf: " . $letterGrade;

?>

</body>
</html>