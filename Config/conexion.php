<?php
$manejador="mysql";
$servidor="db";
$usuario="user";
$pass="pass";
$base="proyecto";
$cadena="$manejador:host=$servidor;dbname=$base";
$cnx = new PDO($cadena,$usuario,$pass);
/*$tns = "(DESCRIPTION=(ADDRESS=(PROTOCOL=TCP)(HOST=localhost)(PORT=1521))(CONNECT_DATA=(SID=xe)))";
$db_username = "tienda24";
$db_password = "12345";
$cnx = new PDO("oci:dbname=".$tns,$db_username,$db_password);*/
?>