<?php 

$var1="Agustin";
$var2=0;

//$alumno=array('Agustin', 'Calderon', "agustincl");
$alumno=array(5,
			  "nombre"=>'Agustin',
			  "apellido"=>'Calderon',
			  "email"=>"agustincl",
			  TRUE=>'jo',
			  99,
			  FALSE=>'ja',
			  8.9=>'jejejeje');


echo $alumno['nombre'];
		
echo "<pre>";
	print_r($alumno);
echo "</pre>";

//var_dump($var1);
//var_dump($var2);
//var_dump($alumno);

//echo "<pre>";
//	print_r($_SERVER);
//echo "</pre>";

//echo $_SERVER['DOCUMENT_ROOT'];

foreach($alumno as $key => $value)
{
	echo "esto es key:".$key;
	echo "<br/>";
	echo "esto es value".$value;
	echo "<hr/>";
}
?>