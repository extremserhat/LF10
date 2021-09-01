<?php
$teilnehmer = 5;
$teilnehmerinnen = 4;

echo gettype($teilnehmer);

$ergebnis = $teilnehmer + $teilnehmerinnen;

echo "<p>Ergebnis Teilnehmeranzahl: ". --$ergebnis . "</p>";
echo "<p>Ergebnis Teilnehmeranzahl: ". $ergebnis-- . "</p>";
echo "<p>Ergebnis Teilnehmeranzahl: ". $ergebnis . "</p>";
//echo "<p>Ergebnis Teilnehmeranzahl: --$ergebnis</p>";

echo "<p>---------------</p>";
echo "<p>Ergebnis Teilnehmeranzahl: $ergebnis</p>";
echo "<p>Ergebnis Teilnehmeranzahl: ".
     $teilnehmer + $teilnehmerinnen . "</p>";
echo "<p>Ergebnis Teilnehmeranzahl: ".
     ($teilnehmer + $teilnehmerinnen) . "</p>";

echo "<p>---- Addition von 5 + 1.7340------</p>";
$a = '5';
$b = '1.734';
echo bcadd($a, $b) . '<br>';	// 6 Nachkommastellen werden abgeschnitten
echo bcadd($a, $b, 4);  // 6.7340
?>