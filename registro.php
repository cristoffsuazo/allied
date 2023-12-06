<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

include('db.php');

//Creacion de variables del formulario
$codigo=$_POST["codigo"];
$nombre=$_POST["nombre"];
$skill=$_POST["skill"];
$nota=$_POST["nota"];
$numero=$_POST["numero"];
$llamada=$_POST["llamada"];
$duracion=$_POST["duracion"];
$fecha=$_POST["fecha"];
$caso=$_POST["caso"];
$reportado=$_POST["reportado"];
$oportunidad=$_POST["oportunidad"];

$consulta="INSERT INTO `asesores` (`Codigo`, `Nombre`, `Skill`, `Nota`, `Numero`, `Llamada`, `Duracion`, `Fecha`, `Caso`, `Problema`, `Oportunidad`) VALUES ('$codigo', '$nombre', '$skill', '$nota', '$numero', '$llamada', '$duracion', '$fecha', '$caso', '$reportado', '$oportunidad');";

$resultado=mysqli_query($conexion, $consulta) or die("Error de Registro de Asesores");

mysqli_close($conexion);
header("location:index.php");

?>