<?php

define ("nombre", "Sebastian");
$nombre="Agustin";

include("cosa.php");


$var= 7+3/2+8*9-5/7+9-1>>4;
$var= (7+3)/(2+8*9)-5/7+9-1;
$var= 7+(3/2)+(8*9)-5/7+9-1;

$var = 4>>2;

echo $nombre;
echo nombre;

$alumno=array('Agustin', 'Calderon', "agustincl");




echo "<pre>";
print_r($_SERVER);
echo "</pre>";

echo $_SERVER['DOCUMENT_ROOT'];

// var_dump($alumno);



















