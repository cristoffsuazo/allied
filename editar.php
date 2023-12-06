<?php

include('db.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calidad Allied</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/132449e2a4.js" crossorigin="anonymous"></script>
</head>
<body>

<h4 class="text-center text-secondary mt-3">Registro de Asesores</h4>
<br>

            <!--Mostrando datos de BD-->
            <tbody>
                <?php
                    $id = $_GET["id"];
                    $sql="SELECT * FROM asesores where ID='$id'";
                    $result = mysqli_query($conexion, $sql);

                    while($mostrar = mysqli_fetch_array($result)){
                        
                ?>
                
                <div class="container">

                    <form class="row g-4" action="procesar_editar.php" method="POST">
                        
                        <div class="col-6">
                            <label for="codigo" class="form-label">Codigo</label>
                            <input type="text" class="form-control" value="<?php echo $mostrar['Codigo'] ?>"  name="txtCodigo">
                        </div>

                        <div class="col-6">
                            <label for="nombre" class="form-label">Nombre del Asesor</label>
                            <input type="text" class="form-control" value="<?php echo $mostrar['Nombre'] ?>"    name="txtNombre">
                        </div>

                        <div class="col-6">
                            <label for="skill" class="form-label">Skill</label>
                            <input type="text" class="form-control" value="<?php echo $mostrar['Skill'] ?>"    name="txtSkill">
                        </div>

                        <div class="col-6">
                            <label for="nota" class="form-label">Nota</label>
                            <input type="text" class="form-control" value="<?php echo $mostrar['Nota'] ?>"    name="txtNota">
                        </div>

                        <div class="col-6">
                            <label for="numero" class="form-label">Numero</label>
                            <input type="text" class="form-control" value="<?php echo $mostrar['Numero'] ?>"    name="txtNumero">
                        </div>

                        <div class="col-6">
                            <label for="llamada" class="form-label">Id Llamada</label>
                            <input type="text" class="form-control" value="<?php echo $mostrar['Llamada'] ?>"    name="txtLlamada">
                        </div>

                        <div class="col-6">
                            <label for="duracion" class="form-label">Duracion</label>
                            <input type="text" class="form-control" value="<?php echo $mostrar['Duracion'] ?>"    name="txtDuracion">
                        </div>

                        <div class="col-6">
                            <label for="fecha" class="form-label">Fecha Actual</label>
                            <input type="date" class="form-control" value="<?php echo $mostrar['Fecha'] ?>"    name="txtFecha">
                        </div>

                        <div class="col-6">
                            <label for="caso" class="form-label">Caso Qflow</label>
                            <input type="text" class="form-control" value="<?php echo $mostrar['Caso'] ?>"    name="txtCaso">
                        </div>

                        <div class="col-6">
                            <label for="reportado" class="form-label">Problema Reportado</label>
                            <input type="text" class="form-control" value="<?php echo $mostrar['Problema'] ?>"  name="txtreportado">
                            <input type="hidden" value="<?php echo $id ?>" name="txtID" readonly>
                        </div>

                        <div class="col-6">
                            <label for="Aoportunidad" class="form-label">Areas de Oportunidad</label>
                            <input type="text" class="form-control" value="<?php echo $mostrar['Oportunidad'] ?>"    name="txtOportunidad" rows="1" cols="30">
                        
                        </div>

                       
                <?php
                    }
                ?>
                 <div class="modal-footer col-12">
                            <button type="submit" class="btn btn-success">Guardar</button>
                        </div>

                    </form>
                </div>
            </tbody>
            <!--Fin mostrando datos de BD-->  
        </table>
    </div>
<!--Fin tabla mostrando datos desde BD-->

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>