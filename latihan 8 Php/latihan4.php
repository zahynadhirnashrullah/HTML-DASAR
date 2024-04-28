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

/* operator logika yang bisa di gunakan
* ==    sama dengan         $x==$y
* ===   identicial          $x===$y
* !=    tidak sama dengan   $x! =$y
* <>    tidak sama dengan   $x <> $y
* !==   not identical       $x !== $y
* >     lebih besar dari    $x>$y
* <     kurang dari         $x<$y
* >=    lebih besar dari atau sama dengan   $x>=$y
* <=    kurang dari atau sama dengan        $x<=$y
* <=>   spaceship                           $x <=> $y
*/
 
$t = date(format:"H"); // mendapatkan jam dengan format 24 jam
echo "<br> nested if <br>";
if ($t < 16) {
    echo "selamat pagi!";
} elseif ($t < 16) {
    echo "selamat siang!";
} else {
    echo "selamat malam!";
}
?>

</body>
</html>
