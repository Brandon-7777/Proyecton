<?php
$servidor="localhost";
$usuario="root";
$contra="";
$base="brandon";
$conexion=mysqli_connect($servidor,$usuario,$contra,$base);
if(!$conexion)
{
	die("Algo salio ".mysqli_connect_error());
}
else{
	echo("tuani");
}

?>