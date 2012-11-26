<?php
function contarMinas($matriz, $tamano)
{
	$filas=$tamano;
	$columnas=$tamano;

	for($i=0;$i<$filas;$i++)
	{
		for($b=0;$b<$columnas;$b++)
		{
			if($matriz[$i][$b]!="*")
			{
				if($matriz[$i-1][$b]=="*")
					$matriz[$i][$b]++;
				if($matriz[$i+1][$b]=="*")
					$matriz[$i][$b]++;
				if($matriz[$i][$b+1]=="*")
					$matriz[$i][$b]++;
				if($matriz[$i][$b-1]=="*")
					$matriz[$i][$b]++;
				if($matriz[$i+1][$b+1]=="*")
					$matriz[$i][$b]++;
				if($matriz[$i+1][$b-1]=="*")
					$matriz[$i][$b]++;
				if($matriz[$i-1][$b-1]=="*")
					$matriz[$i][$b]++;
				if($matriz[$i-1][$b+1]=="*")
					$matriz[$i][$b]++;
			}
		}
	}
	return $matriz;
}