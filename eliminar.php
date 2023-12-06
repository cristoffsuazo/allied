<?php

include('db.php');

$ID=$_POST['txtID'];
mysqli_query($conexion, "DELETE FROM asesores where ID='$ID' ") or die("Error al eliminar");

mysqli_close($conexion);
header("location:index.php");

?>
