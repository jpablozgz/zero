<table>
<tr>
	<td></td>
	<td>1</td>
	<td>2</td>	
	<td>3</td>
</tr>
<tr>
	<td>1</td>
	<td>1</td>
	<td>2</td>	
	<td>3</td>
</tr>
<tr>
	<td>2</td>
	<td>2</td>
	<td>4</td>	
	<td>6</td>
</tr>

</table>
<hr/>
<?php
$filas=6;
$columnas=4;

echo "<table>";
for($i=0;$i<$filas;$i++)
{
	echo "<tr>";
	for($b=0;$b<$columnas;$b++)
	{
		if($i==0 && $b==0)
		{
			echo "<td>";
			echo "*";
			echo "</td>";
		}
		elseif($i==0)
		{
			echo "<td>";
			echo $b;
			echo "</td>";
		}
		if($b==0 && $i!=0)
		{
			echo "<td>";
			echo $i;
			echo "</td>";
		}
		if($b!=0 && $i!=0)
		{
			echo "<td>";
			echo $i*$b;
			echo "</td>";
		}		
	}
	echo "</tr>";
}
echo "</table>";











