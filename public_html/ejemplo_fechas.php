<html>

<head>
<title>Ejemplo CTA: Fechas</title>
</head>

<body>
<?php

/* Para que no salga un warning, hay que entrar en la configuracion del servidor PHP (php.ini)
 * Lo haremos entrando en la consola del Zend Server (localhost:10081) -> Server Setup ->
 * -> Directives -> date -> date.timezone y fijarla como "Europe/Madrid" */

/* Desde el codigo podemos solucionarlo con la funcion:
 * date_default_timezone_set('Europe/Madrid'); */

echo date("\H\o\y l\, \d\i\a z \d\e\l \a\ñ\o Y");
?>
</body>

</html>