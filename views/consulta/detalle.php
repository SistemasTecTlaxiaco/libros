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

    <div id="main">
        <h1 class="center">Actualizar Usuario: <?php echo $this->alumno->matricula; ?> </h1>
    <div class= "center"><?php echo $this->mensaje;?></div>
        <form action="<?php echo constant('URL'); ?>consulta/actualizarAlumno" method="POST">
            <p>
                <lavel form="matricula">Matricula</lavel><br>
                    <input type="text" name="matricula" disabled value="<?php echo $this->alumno->matricula; ?>" required>
            </p>
            <p>
                <lavel form="nombre">Nombre</lavel><br>
                    <input type="text" name="nombre" value="<?php echo $this->alumno->nombre; ?>" required>
            </p>
            <p>
                <lavel form="nombre">Contraseña</lavel><br>
                 <input type="password" name="Contraseña" value="<?php echo $this->alumno->pass; ?>" required>
            </p> 
            <p>
                <lavel form="email">Email</lavel><br>
                <input type="email" name="email" value="<?php echo $this->alumno->email; ?>" required/>
            </p>           
            <p>
                <lavel form="apellido">A_paterno</lavel><br>
                    <input type="text" name="apellido" value="<?php echo $this->alumno->apellido; ?>" required>
            </p>
            <p>
                <lavel form="materno">A_Materno</lavel><br>
                <input type="text" name="materno" value="<?php echo $this->alumno->materno; ?>"  required/>
            </p>
            <p>
                <lavel form="edad">Edad</lavel><br>
                <input type="text" name="materno" value="<?php echo $this->alumno->edad; ?>"  required/>
            </p>
            <p>
                <lavel form="sexo">Sexo</lavel><br>
                    <input type="text" name="sexo" value="<?php echo $this->alumno->sexo; ?>" required/>
            </p>
            <p>
                <lavel form="direccion">Direccion</lavel><br>
                    <input type="text" name="direccion" value="<?php echo $this->alumno->direccion; ?>" required/>
            </p>
            <p>
                <lavel form="ciudad">Ciudad</lavel><br>
                    <input type="text" name="ciudad" value="<?php echo $this->alumno->ciudad; ?>" required/>   
            </p>
            <p>
                <lavel form="telefono">Telefono</lavel><br>
                    <input type="text" name="telefono" value="<?php echo $this->alumno->telefono; ?>"  required/>
            </p>
            <p>
                <lavel form="codigo">Codigo Postal</lavel><br>
                    <input type="text" name="codigo" value="<?php echo $this->alumno->codigo; ?>" required/>
            </p>           
            <p>
               <lavel form="archivo">Fotografia</lavel><br>
                <input type="file" name="archivo" value="<?php echo $this->alumno->archivo; ?>"  required/> 
            </p>


            <p>
                <input type="submit" value="Actualizar Usuario">
            </p>
        </form>
    </div>
    <?php require 'views/footer.php'; ?>
</body>
</html>