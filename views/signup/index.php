<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Registro de usuario MiTTE</title>
  <link rel="icon" href="<?php echo constant('URL');?>img/icono.png" sizes="32x32" type="image/png">
    <link rel="icon" href="<?php echo constant('URL');?>img/icono.png" sizes="16x16" type="image/png">
  <link rel="stylesheet" href="<?php echo constant('URL');?>bootstrapd/css/bootstrap.min.css" crossorigin="anonymous">    
  <script src="<?php echo constant('URL');?>bootstrapd/js/bootstrap.min.js"></script>  
   <!--script src="<?php echo constant('URL');?>public/js/validar.js"></script-->  
   <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/validacion.js"></link>  
   <script src="<?php echo constant('URL');?>js/validaregistro.js"></script>   
  <style>
    .bg{
      background-image: url(<?php echo constant('URL');?>Fondo.jpeg);
      background-position: center center;
    }
    .container-fluid{
  width: 100px;
}
  </style>
</head>

<body> 
  <?php require 'views/header.php';?>
  <br>
  <div class="container w-75 bg-secondary mt-5 rounded shadow container-fluid">
    <div class="row">    
      <div class="col bg-white p-5 rounded-end">  
      <div class="alert alert-danger align-items-start d-none &nbsp&<?php echo $this->alerta;?> fade show" role="alert">  
  <div>
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </svg>  
    <?php echo $this->mensaje;?><tab><tab><tab> &nbsp <button type="button" class="btn-close align-items-end" data-bs-dismiss="alert" aria-label="Close"></button></div>        
    </div>    
      <form action="<?php echo constant('URL'); ?>/signup/registrar" enctype="multipart/form-data" method="POST">
      <div class="mb-4">
          <label for="nombre" class="form-label">Nombre</label>
          <input type="text" name="nombre" class="form-control" value="" id="nombre" placeholder="Nombre completo">                        
        </div>        
        <div class="mb-4">
          <label for="apellido" class="form-label">Apellidos</label>
          <input type="text" name="apellido" class="form-control" value="" id="apellido" placeholder="Apellidos completos">
        </div>        
      <div class="mb-4">
          <label for="email" class="form-label">Correo Electronico</label>
          <input type="email" name="email" class="form-control" value="" id="correo" placeholder="Correo Electronico, Ejemplo: nombre@email.com" required>
        </div>
        <div class="mb-4">
          <label for="password" class="form-label">Contraseña</label>
          <input type="password" class="form-control" name="password" id="pass" placeholder="Contraseña" >
        </div>
        <div class="mb-4">
        <label for="password2" class="form-label">Contraseña</label>
          <input type="password" class="form-control" name="password2" id="pass2" placeholder="Repite la contraseña">
        </div>
        <div class="mb-4">
          <label for="Fecha" class="form-label">Fecha de nacimiento</label>
          <input type="text" class="form-control" value="" name="fecha" id="fecha" name="event_datetime" id="form_datetime">
        </div>
        <div class="mb-4">
          <label for="telefono" class="form-label">Telefono</label>
          <input type="number" class="form-control" value="" name="telefono" id="telefono" placeholder="ingresa tu numero telefonico">
        </div>
        <div class="md-4">
    <label for="estado" class="form-label">Estado</label>
    <select id="est" name="estado" class="form-select" value="Seleciona alguno">
      <option selected>Selecciona alguno</option>
      <option>Oaxaca</option>
      <option>Guerrero</option>
      <option>Puebla</option>
      <option>Querretaro</option>
      <option>Estado del Mexico</option>
      <option>CDMX</option>
      <option>Monterrey</option>
    </select>
  </div>
  <br>
        <div class="d-grid">
          <button onclick=" if(valida()==true){return true;}else{return false;}" onsubmit="return false"  class="btn btn-danger" type="submit">Registrate</button>
        </div>
        <div class="my-3">
        <span>Ya tienes cuenta? <a href="<?php echo constant('URL');?>login">Inicia sesión</a></span><br>        
        </div>
      </form>
      </div>
      </div>
      </div>
      <br>      
      <?php require 'views/footer.php'; ?>   
      <script src="<?php echo constant('URL');?>public/js/validaform.js"></script>  
      <script src="<?php echo constant('URL'); ?>bootstrapd/js/popper.min.js"></script>
      <script src="<?php echo constant('URL'); ?>bootstrapd/js/bootstrap.bundle.min.js"></script> 
      <!--script src="<?php echo constant('URL');?>public/js/formvalidacion.js"></script--> 
</body>
</html>