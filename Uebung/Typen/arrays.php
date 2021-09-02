<?php

// mit () zum Zahlen einfügen
/*$array = array(
1, 2, 3, 4, 5, 6,
);
*/

// mit [] zum Wörter einfügen
$array = ["foo", "zoo", "noo", "doo", "hoo", "loo",
];


var_dump($array);    // Es ist auch möglich den Schlüssel nur 
                    // bei einigen Elementen anzugeben und bei anderen auszulassen:


?>

<?php
/*
$array = array(
    "foo" => "bar",
    "bar" => "foo",
    100   => -100,
    -100  => 100,
);


var_dump($array);
*/
?>


<?php 
$array = array(                     //Beispiel Zugriff auf Array-Elemente
    "foo" => "bar",
    42    => 24,
    "multi" => array(
         "dimensional" => array(
             "array" => "foo"
         )
    )
);

var_dump($array["foo"]);
var_dump($array[42]);
var_dump($array["multi"]["dimensional"]["array"]);
?>
