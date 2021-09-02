<?php
// Unser Closure
$double = function($a){
    return $a * 2;
};

// Dies ist unsere Menge an Zahlen
$Number = range(1, 6);

// Hier verwendet wir das Callback,
// um den Wert jedes Elements in unserer
// Menge zu verdoppeln

$new_number = array_map($double, $Number);

print implode('', $new_number);
?>