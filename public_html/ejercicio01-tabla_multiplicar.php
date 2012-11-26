<html>
<head>
<title>Ejercicio #1 CTA: Tabla de multiplicar</title>
</head>
<body>
<table>
<?php

define("ROWS",3);
define("COLUMNS",4);

// header row: shows multiplicand 1
echo "<tr>\n\t<td>&nbsp;</td>\n";
for($col=1;$col<=COLUMNS;$col++)
	echo "\t<td align=\"center\">".$col."</td>\n";
echo "</tr>\n";

for($row=1;$row<=ROWS;$row++)
{
	// header column: shows multiplicand 2
	echo "<tr>\n\t<td align=\"center\">".$row."</td>\n";
	
	// inner cell loop: multiplies row head x column head
	for($col=1;$col<=COLUMNS;$col++)
		echo "\t<td align=\"center\">".$row*$col."</td>\n";
	echo "</tr>\n";
};
?>
</table>
</body>
</html>