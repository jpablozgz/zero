<?php
function llenarMinas($matriz, $tamano, $numminas)
{
	for($i=0;$i<=$numminas;$i++)
	{
		$matriz[rand(0,$tamano-1)][rand(0,$tamano-1)]="*";
	}
	return $matriz;
}