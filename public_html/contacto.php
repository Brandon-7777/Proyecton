<?php

include_once 'conexion.php';
$nombre=$_POST['nombre'];
$mail=$_POST['mail'];

$mensaje=$_POST['mensaje'];


$sql= "INSERT INTO contacto(nombre,mail,mensaje) VALUES ('$nombre','$mail','$mensaje')";
if(mysqli_query($conexion,$sql)){
	echo  '<script>
                        window.location.href = "index.html";
                        alert("Su mensaje a sido enviado, en breve lo atendemos")
                    </script>';
}
else{
	echo "No se pudo".mysqli_error($conexion);
}


mysqli_close($conexion);
?>