<?php

include('db.php');

$Codigo=$_POST['txtCodigo'];
$Nombre=$_POST['txtNombre'];
$Skill=$_POST['txtSkill'];
$Nota=$_POST['txtNota'];
$Numero=$_POST['txtNumero'];
$Llamada=$_POST['txtLlamada'];
$Duracion=$_POST['txtDuracion'];
$Fecha=$_POST['txtFecha'];
$Caso=$_POST['txtCaso'];
$Problema=$_POST['txtreportado'];
$id=$_POST["txtID"];
$Oportunidad=$_POST['txtOportunidad'];

mysqli_query($conexion, "UPDATE `asesores` SET `Codigo` = '$Codigo', `Nombre` = '$Nombre', `Skill` = '$Skill', `Nota` = '$Nota', `Numero` = '$Numero', `Llamada` = '$Llamada', `Duracion` = '$Duracion', `Fecha` = '$Fecha', `Caso` = '$Caso', `Problema` = '$Problema', `Oportunidad` = '$Oportunidad' WHERE ID= '$id'");

/*mysqli_query($conexion, "UPDATE `asesores` SET `Codigo` = '$Codigo', `Nombre` = '$Nombre', `Skill` = '$Skill', ' '
`Nota` = '$Nota', `Numero` = '$Numero', `Llamada` = '$Llamada', `Duracion` = '$Duracion', `Fecha` = '$Fecha', `Caso` = '$Caso', `Problema` = '$Problema', `Oportunidad` = '$Oportunidad' WHERE ID = '$ID'") or die("Error al actualizar");*/



mysqli_close($conexion);
header("location:index.php");

?>