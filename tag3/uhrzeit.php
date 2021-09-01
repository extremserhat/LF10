<!DOCTYPE html><html><head><meta charset="utf-8"></head><body>
<?php
function ausgabe_uhrzeit()
{
    echo "<p>Es ist gerade: ". date("H:i:s"). "</p>";
}

function dividieren( float $zahl, float $divisor )
{
	if ($divisor != 0)
		echo bcdiv ($zahl, $divisor, 4); 
		// ohne den 3. Parameter wird nur der Ganzahlanteil ausgegeben !!
	else
		echo "$zahl / 0 ist nicht erlaubt";
}

ausgabe_uhrzeit();


echo "<p>Berechnung von 18 / 5 = ";
dividieren( 18.0, 5);

ausgabe_uhrzeit();
?>
</body></html>