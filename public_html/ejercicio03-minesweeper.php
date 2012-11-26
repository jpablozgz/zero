<html>

<head>
<title>Ejercicio #3 CTA: Minesweeper</title>
</head>

<body>
<?php
define("N",7);						// N: dimension of the (square) game board
define("MINE_CHAR","*");				// character that represents a mine

if(N%2==0) // if even dimension
	define("M",rand(1,N*N/2-1));	// M: number of mines, with 0 < M < N*N/2
else 		// odd dimension
	define("M",rand(1,N*N/2));		// M: number of mines, with 0 < M < N*N/2
	
echo "<p>Game board dimension: ".N."</p>\n";
echo "<p>Number of mines: ".M."</p>\n\n";

$board=array();		// Creating the game board: indexes [0,...,(N-1)*(N-1)]

// Initializing the cells of the game board
for($row=1;$row<=N;$row++)
	for($col=1;$col<=N;$col++)
		$board[$row][$col]="0";		

function update_adjacent_mine_counter(&$board, $row, $col)
{
	if (($row >= 1) && ($row <= N) && ($col >= 1) && ($col <= N))
		if($board[$row][$col]!=MINE_CHAR)
			$board[$row][$col]++;
}

// Placing the mines in the game board
for($mine_counter=1;$mine_counter<=M;$mine_counter++)
{
	do {
		$mine_x=rand(1,N);
		$mine_y=rand(1,N);
	} while ($board[$mine_x][$mine_y]=="*");
	$board[$mine_x][$mine_y]=MINE_CHAR; // mine placed in ($mine_x, $mine_y)

	//Now we will update the counter of the adjacent cells
	update_adjacent_mine_counter($board,$mine_x-1,$mine_y-1);
	update_adjacent_mine_counter($board,$mine_x-1,$mine_y);
	update_adjacent_mine_counter($board,$mine_x-1,$mine_y+1);
	update_adjacent_mine_counter($board,$mine_x,$mine_y-1);
	update_adjacent_mine_counter($board,$mine_x,$mine_y+1);
	update_adjacent_mine_counter($board,$mine_x+1,$mine_y-1);
	update_adjacent_mine_counter($board,$mine_x+1,$mine_y);
	update_adjacent_mine_counter($board,$mine_x+1,$mine_y+1);
}

// Printing the game board on screen
echo "<table>\n<tr>\n\t<td>";
for($row=1;$row<=N;$row++)
{
	echo "<tr>\n";
	for($col=1;$col<=N;$col++)
		echo "\t<td>".$board[$row][$col]."</td>\n";
	echo "</tr>\n";
}
echo "</table>\n";
?>
</body>

</html>