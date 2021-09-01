<?php
$vorname = "Axel";
$nachname = "Pratzner";
/*
echo 'Test1 $vorname';
echo "<br>";
echo "Test2 $vorname";
echo "<br>";
*/
echo "<p align=\"center\">Herzlich willkommen $vorname $nachname<br>
zum [\"PHP-Kurs.com\"]</p>";

$kursname = "PHP-Kurs";
$praefix  = ".com";
$version = 1.3;

echo "Herzlich willkommen zum " . $kursname . $version . $praefix;
?>
