<?php
$dividend = 33;
$divisor  = 5;
$zahl = 88888;
$quotient = 5555;
// aus didaktischen Gründen
echo "<p>Werte außerhalb und VOR der Funktion";
echo '<br> $dividend :' . $dividend;
echo '<br> $divisor  :' . $divisor;
echo '<br> $zahl     :' . $zahl;
echo '<br> $quotient :' . $quotient;
echo '<br>';

function dividieren( $zahl, $quotient )
{
    echo bcdiv($zahl, $quotient, 2);

    // aus didaktischen Gründen
    echo "<p>Werte INNERHALB der Funktion";
    echo '<br> $dividend :' . $dividend;
    echo '<br> $divisor  :' . $divisor;
    echo '<br> $zahl     :' . $zahl;
    echo '<br> $quotient :' . $quotient;
    echo '<br>';
}

echo "<p>Berechnung von $dividend / $divisor = ";
dividieren( $dividend, $divisor );

// aus didaktischen Gründen
echo "<p>Werte außerhalb und NACH der Funktion";
echo '<br> $dividend :' . $dividend;
echo '<br> $divisor  :' . $divisor;
echo '<br> $zahl     :' . $zahl;
echo '<br> $quotient :' . $quotient;
echo '<br>';
