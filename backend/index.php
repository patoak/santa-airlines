<?php

require "Aircraft.php";
require "Airport.php";

echo "I am the monster rawr rawr rawr <br>";
function addFour($x) {
    $rez = $x+4;
    echo " $rez";             }

addFour(5);
addFour(8);

echo "<br><br>";

$myplane = new Aircraft("Airbus", "A220-300", 120, 850);
var_dump($myplane);

echo "<br><br>";

$destination = new Airport("RIX", 56.924, 23.971);
var_dump($destination);

?>