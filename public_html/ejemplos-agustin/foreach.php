<?php
$alumno=array("agustin", "calderon", "agustincl");
$alumno=array("nombre"=>"agustin", 
			  "apellido"=>"calderon",
			  "email"=>"agustincl"
		);

foreach($alumno as $key => $value)
{
	echo "esto es key:".$key;
	echo "<br/>";
	echo "esto es value:".$value;
	echo "<hr/>";
}