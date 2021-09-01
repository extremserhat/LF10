<?php
function rechne($a, $b) {
	echo "a=" . $a . "<br>";
	echo "b=" . $b . "<br>";
	echo "a+b=" . $a + $b  . "<br>";
}

function intrechne(int $a, int $b) {
	echo "Typ von a im Funktionskörper: ". gettype($a) . "<br>";
	echo "a=" . $a . "<br>";
	echo "b=" . $b . "<br>";
	echo "a+b=" . $a + $b  . "<br>";
}

function floatrechne(float $a, float $b, int $scale) {
	echo "a=" . $a . "<br>";
	echo "b=" . $b . "<br>";
	echo "a+b=" . $a + $b  . "<br>";
	echo "bcadd Funktion: a+b=" . bcadd($a, $b, $scale) . "<br>";
}
// Hauptprogramm
rechne(2.3, 2.7);
echo "<hr>";

rechne(45.78963, 0.0012);
echo "<hr>";

$x = 2.3;
echo "Typ von x vor Funktionskörper: ". gettype($x) . "<br>";
intrechne($x, 2.7);
echo "<hr>";

echo "<p>Gleitkommazahl float</p>";
rechne(45.78963, 0.0012);

echo "<p>Float Berechnung mit Anzahl Nachkommastellen</p>";
floatrechne(63.12345, 7.654321, 3);

date_default_timezone_set('Europe/Berlin');
echo "<p>heutiges Datum: " . date("d.m.y");
$tage = array("Sonntag", "Montag", "Dienstag", "Mittwoch", "Donnerstag", "Freitag", "Samstag");
$monate = array("Januar", "Februar", "März", "April");
$tag = date("w");
$monat = date("m") - 1;
echo "<br>tag=" . $tag . "  " . $monat ."<br>";
//echo "<p>heute ist " . $tage[$tag] .  ", der " .date("d. F Y G:i:s");
echo "<p>heute ist " . $tage[$tag] .  ", der " .date("d. ")
	. $monate[$monat] . date(" Y G:i:s");
	 

//phpinfo();
?>