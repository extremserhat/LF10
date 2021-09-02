<?php
/*
 * Der erste Abschnitt kann ignoriert werden;
 * er dient nur zu Formatierungszwecken, um die Ausgabe deutlicher zu machen.
 */

$format = '(%1$2d = %1$04b) = (%2$2d = %2$04b)'
        . ' %3$s (%4$2d = %4$04b)' . "\n <br>";

echo <<<EOH
 ---------     ---------  -- ---------
 "\n Ergebnis      Wert 1     Op Wert 2 \n <br>"
 ---------     ---------  -- ---------
EOH;


/*
 * Hier kommen die Beispiele.
 */

$values = array(0, 1, 2, 4, 8);
$test = 1 + 4;

echo "<p> \n Bitweises UND \n </p><br>";
foreach ($values as $value) {
    $result = $value & $test;
    printf($format, $result, $value, '&', $test);
}

echo "<p>\n Bitweises einschließendes ODER \n </p><br>";
foreach ($values as $value) {
    $result = $value | $test;
    printf($format, $result, $value, '|', $test);
}

echo "<p>\n Bitweises ausschließendes ODER (XODER) \n </p><br>";
foreach ($values as $value) {
    $result = $value ^ $test;
    printf($format, $result, $value, '^', $test);
}
?>