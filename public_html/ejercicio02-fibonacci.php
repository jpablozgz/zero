<html>
<head>
<title>Ejercicio #2 CTA: Serie de Fibonacci</title>
</head>
<body>
<?php 

define("N",128);  // N: (non-reachable) upper bound of the Fibonacci sequence

$operando1=0;
$operando2=1;
$suma=$operando1+$operando2;

if ($operando1<N)
	echo "<p>".$operando1;
if ($operando2<N)
	echo ",".$operando2;
while($suma<N)
{
	echo ",".$suma;
	$operando1=$operando2;
	$operando2=$suma;
	$suma=$operando1+$operando2;
};
echo "</p>\n";
?>
</body>
</html>