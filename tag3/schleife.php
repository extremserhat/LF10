<!DOCTYPE html><html><head><meta charset="utf-8"></head><body>
<?php
$i = 1;
echo "While Schleife (i <= 10)<br>";
while ($i <= 10)
{
    echo $i;         // es wird $i ausgegeben
    echo "<br>"; 
    $i++  ;            // Wert wird um 1 erhöht
//	$i = $i + 2;
}
echo "nach dem Schleifenende i=$i <br>";

$i = 33;
echo "Do-While Schleife mit (i <= 10) am Ende<br>";
do {
    if ( $i > 10 )
    {
        echo "i ist bereits größer als 10<br>";
        break;
    }
	echo $i;         // es wird $i ausgegeben
    echo "<br>"; 
    $i++  ;            // Wert wird um 1 erhöht
} while ($i <= 10);
echo "nach dem Schleifenende i=$i <br>";

echo "For bzw. Zählschleife<br>";
for ($i = 10; $i > 0; $i-- )
{
    echo $i . "<br>";
}
echo "nach dem for-Schleifenende i=$i <br>";
?>
</body></html>