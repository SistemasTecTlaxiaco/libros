<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">   
    <title>Pagina principal MiTTE</title>
    <link rel="icon" href="<?php echo constant('URL');?>img/icono.png" sizes="32x32" type="image/png">
    <link rel="icon" href="<?php echo constant('URL');?>img/icono.png" sizes="16x16" type="image/png">
<link rel="stylesheet" href="<?php echo constant('URL');?>bootstrapd/css/bootstrap.min.css" crossorigin="anonymous"> 
<link rel="stylesheet" href="<?php echo constant('URL');?>bootstrapd/css/bootstrap.css" crossorigin="anonymous"> 
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      .bg{
      background-image: url(<?php echo constant('URL');?>/img/dormir.jpg);
      background-repeat: no-repeat;
      background-size: 100%;   
      background-position: center center;         
    }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }        
      }
      @media (max-width: 480px) {
        .img-lg {
          height:140px;
        }}
        @media (min-width: 480px) {
        .img-g{
          width:320px;
        }}
    </style>

    
  </head>
  <body>
  <?php require 'views/principal/header.php';?>
  <div class="container-fluid bg-light">  
  <div class="container" >    
  <section class="py-1 container">
    <div class="container w-100 bg-secondary mt-5 rounded shadow container-fluid">     
     <div class="row">    
      <div class="col bg-white p-4 rounded-end"> 
      <h1 class="text-center">Actualiza tus datos</h1>  
      <?php echo $this->alerta;?> 
      <form class="py-2" action="<?php echo constant('URL'); ?>/cuenta/update" enctype="multipart/form-data" method="POST">
      <div class="row g-3">
      <div class="col-sm-6">
          <label for="nombre" class="form-label">Nombre:</label>
          <input type="text" name="nombre" class="form-control" value="<?php echo $this->datos->nombre;?>" id="nombre" placeholder="Nombre completo">                        
        </div>        
        <div class="col-sm-6">
          <label for="apellido" class="form-label">Apellidos:</label>
          <input type="text" name="apellido" class="form-control" value="<?php echo $this->datos->apellido;?>" id="apellido" placeholder="Apellidos completos">
        </div>        
      <div class="col-sm-6">
          <label for="email" class="form-label">Correo Electronico:</label>
          <input type="email" name="email" class="form-control" value="<?php echo $this->datos->correo;?>" id="correo" placeholder="Correo Electronico, Ejemplo: nombre@email.com" required>
        </div>     
        <div class="col-sm-6">
          <label for="fecha" class="form-label">Fecha de nacimiento:</label>
          <input type="text" class="form-control" value="<?php echo $this->datos->fecha;?>" name="fecha" id="fecha" name="event_datetime" id="form_datetime">
        </div>
        <div class="col-sm-6">
          <label for="telefono" class="form-label">Telefono:</label>
          <input type="number" class="form-control" value="<?php echo $this->datos->telefono;?>" name="telefono" id="telefono" placeholder="ingresa tu numero telefonico">
        </div>
        <div class="col-sm-6">
    <label for="estado" class="form-label">Estado:</label>
    <input type="text" id="est" name="estado" class="form-control" value="<?php echo $this->datos->estado;?>" placeholder="Ingresa tu estado">     
  </div>
  <br>
        <div class="d-grid col-md-6 offset-md-3 py-3">
          <button onclick=" if(valida()==true){return true;}else{return false;}" onsubmit="return false"  class="btn btn-danger" type="submit">Actualizar datos</button>
        </div>
      </div>
      </form>
      </div>      
    </div>
    </div> 

  </section>
  <section class="py-1 container">
    <div class="container w-100 bg-secondary mt-5 rounded shadow container-fluid">     
     <div class="row">    
      <div class="col bg-white p-4 rounded-end"> 
      <h1 class="text-center">Actualiza tu contraseña</h1>      
      <form class="py-2" action="<?php echo constant('URL'); ?>/cuenta/updatePassword" enctype="multipart/form-data" method="POST">
      <?php echo $this->alerta2;?> 
      <div class="row g-3">
      <div class="col-sm-6">
      <label for="password" class="form-label">Password actual:</label>
          <input type="password" name="password" class="form-control" value="" id="pass" placeholder="Ingresa tu contraseña actual">                     
        </div>        
        <div class="col-sm-6">
          <label for="password" class="form-label">Password Nuevo:</label>
          <input type="password" name="password2" class="form-control" value="" id="pass" placeholder="Ingresa la contraseña nueva">
        </div> 
  <br>
        <div class="col-md-6 offset-md-10 py-3">
          <button onclick=" if(valida()==true){return true;}else{return false;}" onsubmit="return false"  class="btn btn-danger" type="submit">Actualizar contraseña</button>
        </div>
      </div>
      </form>
      </div>      
    </div>
    </div>  

  </section>
  
    </div>
    </div>
    <script src="<?php echo constant('URL'); ?>bootstrapd/js/bootstrap.bundle.min.js"></script> 
    <br>
    <?php require 'views/footer.php'; ?>   
  </body>
</html>