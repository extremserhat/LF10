<?php

$a_bool = True;         // ein Boolean (Wahrheitsweirt)
$a_str = "foo";         // eine Zeichenkette (String)
$a_str2 = 'foo';        // eine Zeichenkette (String)
$an_int = 12;           // ein Iteger (Ganzzhal)

echo gettype($a_bool);  // gibt aus: boolean

echo gettype($a_str);   // gibt aus: string 

// Falls es ein Integer ist, erhöhe ihm um vier!
if (is_int($an_int)){
   echo $an_int += 4;
}

//Falls $a_bool ein String ist, gib ihn aus
//NOTE: (gibt überhaupt nichts aus!)
if (is_string($a_bool)){
    echo $a_bool;
}

?>