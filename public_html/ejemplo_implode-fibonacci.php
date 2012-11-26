<html>
<head>
<title>Ejercicio #2 CTA: Serie de Fibonacci</title>
</head>
<body>
<?php 

define("N",128);  // N: (non-reachable) upper bound of the Fibonacci sequence

$fibo=array();
$operando1=0;
$operando2=1;
$suma=$operando1+$operando2;

if ($operando1<N)
	$fibo[0]=0;
if ($operando2<N)
	$fibo[1]=1;
while($suma<N)
{
	$fibo[]=$suma;
	$operando1=$operando2;
	$operando2=$suma;
	$suma=$operando1+$operando2;
};

echo implode(',', $fibo)."</p>\n";
?>
</body>
</html>