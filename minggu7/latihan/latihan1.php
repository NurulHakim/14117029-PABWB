<?php

function tukar(&$a, &$b){
    $temp = $a;
    $a = $b;
    $b = $temp; 
}

$a = 5;
$b = 7;

echo "sebelum ditukar <br>"; 
echo "a = $a <br>";
echo "b = $b <br>";

echo "setelah di tukar <br>";
tukar($a, $b);
echo "a = $a <br>";
echo "b = $b <br>";
?>