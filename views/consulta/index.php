<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php require 'views/header.php'; ?>

    <div  id="main"><br>
        <h2 class="center" >CONSULTA DE DATOS</h2>
        <div id="respuesta" class="center"></div> <br>

       <form action="<?php echo constant('URL');?>consulta/BuscarNombre" method="POST" autocomplete="off">
        <input type="submit" value="Buscar">
        <input type="text" name="buscar">
        </form> 
   
        <table  > 
            <thead > 
                <tr >
                    <th>Matricula</th>
                    <th>Nombre</th>
                    <th>Paterno</th>
                    <th>Materno</th>
                    <th>Telefono</th>
                    <th>Email</th>
                    <th>Fotografia</th>
                    <th>OPCIONES</th> 
                </tr>
            </thead>
    
            <tbody id="tbody-alumnos">
                <?php 
                include_once 'models/alumno.php';
                foreach($this->alumnos as $row){
                    $alumno = new Alumno();
                    $alumno = $row;
                 ?>

                <tr id="fila-<?php echo $alumno->matricula; ?>">
                    <td><?php echo $alumno->matricula; ?></td>
                    <td><?php echo $alumno->nombre; ?></td>
                    <td><?php echo $alumno->apellido; ?></td>
                    <td><?php echo $alumno->materno; ?></td>
                    <td><?php echo $alumno->telefono; ?></td>
                    <td><?php echo $alumno->email; ?></td>
                    <td><img scr= "<?php echo URL.$alumno->archivo; ?>" width="100px" height="100px"></td>
            
              
                   

                    <td><a href="<?php echo constant('URL') . 'consulta/verAlumno/' . $alumno->matricula; ?>">Editar</a></td>
                 <!---   <td><a href="<?php echo constant('URL') . 'consulta/eliminarAlumno/' . $alumno->matricula; ?>">Eliminar</a></td> --->
                   <td><button class="bEliminar" data-matricula="<?php echo $alumno->matricula; ?>"> Eliminar</button></td>
                </tr>

                <?php  } ?>
            </tbody>
        </table>  
    </table>
    </div>

        <script src="<?php echo constant('URL');?>public/js/main.js"></script>

    <?php require 'views/footer.php'; ?>
</body>
</html>