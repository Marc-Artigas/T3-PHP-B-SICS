<?php
//crea 2 arrays

$array1 = array(4,5,12,24,55);
$array2 = array(15,18,21);

//afegim un valor més a l'array2
$array2[4]=25;

// var_dump($array2); comprovat que el valor s'ha afegit correctament.
//ajuntem les dues arrays
var_dump(array_merge($array1,$array2));//imprimim el tamany i veiem com queda la nova array.


?>