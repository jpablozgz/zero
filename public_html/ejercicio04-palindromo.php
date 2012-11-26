<html>

<head>
<title>Ejercicio #4 CTA: Palíndromo</title>
</head>

<body>
<?php
$cadena = "Dabale arroz a la zorra el abad";

//Quitar espacios y comas a la cadena
$vect_cadena=explode(" ",$cadena);
$cadena=implode("",$vect_cadena);
$vect_cadena=explode(",",$cadena);
$cadena=implode("",$vect_cadena);

$cadena_inv=strrev($cadena);
if (strcasecmp($cadena,$cadena_inv))
	echo "No es palíndromo";
else
	echo "Es palíndromo";
?>
</body>

</html>