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

<!--DATATABLE-->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.13.1/datatables.min.css"/>

</head>
<body>

<h4 class="text-center text-secondary mt-3">Registro de Asesores</h4>

<div class="container mt-5">
        <div class="col-6">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Agregar</button>
        </div>
</div>

<!--Formulario con Modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registro de Asesores</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

            <form class="row g-4" action="registro.php" method="POST">
                
                <div class="col-6">
                    <label for="codigo" class="form-label">Codigo</label>
                    <input type="text" class="form-control"  name="codigo">
                </div>

                <div class="col-6">
                    <label for="nombre" class="form-label">Nombre del Asesor</label>
                    <input type="text" class="form-control"  name="nombre">
                </div>

                <div class="col-6">
                    <label for="skill" class="form-label">Skill</label>
                    <input type="text" class="form-control"  name="skill">
                </div>

                <div class="col-6">
                    <label for="nota" class="form-label">Nota</label>
                    <input type="text" class="form-control"  name="nota">
                </div>

                <div class="col-6">
                    <label for="numero" class="form-label">Numero</label>
                    <input type="text" class="form-control"  name="numero">
                </div>

                <div class="col-6">
                    <label for="llamada" class="form-label">Id Llamada</label>
                    <input type="text" class="form-control"  name="llamada">
                </div>

                <div class="col-6">
                    <label for="duracion" class="form-label">Duracion</label>
                    <input type="text" class="form-control"  name="duracion">
                </div>

                <div class="col-6">
                    <label for="fecha" class="form-label">Fecha Actual</label>
                    <input type="date" class="form-control"  name="fecha">
                </div>

                <div class="col-6">
                    <label for="caso" class="form-label">Caso Qflow</label>
                    <input type="text" class="form-control"  name="caso">
                </div>

                <div class="col-6">
                    <label for="reportado" class="form-label">Problema Reportado</label>
                    <input type="text" class="form-control"  name="reportado">
                </div>

                <div class="col-6">
                    <label for="Aoportunidad" class="form-label">Areas de Oportunidad</label>
                    <textarea class="form-control"  name="oportunidad" rows="1" cols="30"></textarea>
                </div>

                 <div class="modal-footer col-12">
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>

        </form>
      </div>

    </div>
  </div>
</div>
<!--Fin formulario con Modal-->

<!--Tabla mostrando datos desde BD-->
<div class="container mt-4">
        <table class="table" id="MyTable">
                <thead class="bg-info">
                    <tr>
                <!--  <th scope="col">ID</th>-->
                    <th scope="col">Codigo</th>
                    <th scope="col">Asesor</th>
                    <th scope="col">Skill</th>
                    <th scope="col">Nota</th>
                    <th scope="col">Areas de Oportunidad</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    
                    </tr>
                </thead>

            <!--Mostrando datos de BD-->
            <tbody>
                <?php
                    $sql="SELECT * FROM asesores";
                    $result = mysqli_query($conexion, $sql);

                    while($mostrar = mysqli_fetch_array($result)){
                        
                ?>

                <tr>
                    <td><?php echo $mostrar["Codigo"] ?></td>
                    <td><?php echo $mostrar["Nombre"] ?></td>
                    <td><?php echo $mostrar["Skill"] ?></td>
                    <td><?php echo $mostrar["Nota"] ?></td>
                    <td><?php echo $mostrar["Oportunidad"] ?></td>

                    <!--Boton Eliminar-->
                    <td>
                        <form action="eliminar.php" method="post">
                            <input type="hidden" value="<?php echo $mostrar["ID"] ?>" name="txtID" readonly>
                            <td><input type="submit" value="Eliminar" name="btnEliminar" class="btn btn-danger"></td>
                        </form>
                    </td>
                     <!--Fin boton Eliminar-->
                    
                    <!--Boton Editar-->
                    <td>
                        <a class="btn btn-warning" href="editar.php?id=<?php echo $mostrar["ID"]?>">Editar</a>
                    </td>
                     <!--Fin boton Editar-->

                </tr>
                <?php
                    }
                ?>
            </tbody>
            <!--Fin mostrando datos de BD-->  
        </table>
    </div>
<!--Fin tabla mostrando datos desde BD-->

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<!--JQUERY-->
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
 
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.13.1/datatables.min.js"></script>

<script>
        $(document).ready(function() {
    $('#MyTable').DataTable( {
        language: {
            url: 'https://cdn.datatables.net/plug-ins/1.13.1/i18n/es-MX.json'
        }
    } );
} );
</script>


</body>
</html>