<?php
function inicializarMatriz($tamano)
{
	$filas=$tamano;
	$columnas=$tamano;

	for($i=0;$i<$filas;$i++)
	{
		for($b=0;$b<$columnas;$b++)
		{
			$matriz[$i][$b]="0";
		}
	}
	return $matriz;
}