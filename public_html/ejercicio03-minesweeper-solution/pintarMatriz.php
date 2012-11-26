<?php
function pintarMatriz($matriz, $tamano)
{
	$filas=$tamano;
	$columnas=$tamano;

	echo "<table>";
	for($i=0;$i<$filas;$i++)
	{
		echo "<tr>";
		for($b=0;$b<$columnas;$b++)
		{
			echo "<td>";
			echo $matriz[$i][$b];
			echo "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
}