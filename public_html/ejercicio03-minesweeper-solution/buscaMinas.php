<?php
// Hacer el buscaminas

// Inicializar matriz
// Llenar de minas la matriz
// Contar minas
// Pintar matriz

include("pintarMatriz.php");
include("inicializarMatriz.php");
include("llenarMinas.php");
include("contarMinas.php");

$tamano=9;
$numminas=($tamano^2/2);

$matriz=inicializarMatriz($tamano);
$matriz=llenarMinas($matriz, $tamano, $numminas);
$matriz=@contarMinas($matriz, $tamano);
pintarMatriz($matriz, $tamano);

