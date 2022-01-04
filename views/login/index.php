<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Inicio de sesion MiTTE</title>
  <link rel="icon" href="<?php echo constant('URL');?>img/icono.png" sizes="32x32" type="image/png">
    <link rel="icon" href="<?php echo constant('URL');?>img/icono.png" sizes="16x16" type="image/png">
  <link rel="stylesheet" href="<?php echo constant('URL');?>bootstrapd/css/bootstrap.min.css" crossorigin="anonymous">    
  <script src="<?php echo constant('URL');?>bootstrapd/js/bootstrap.min.js"></script>  
  <script src="<?php echo constant('URL');?>js/validar.js"></script>   
  <style>
    .bg{
      background-image: url(<?php echo constant('URL');?>Fondo.jpeg);
      background-position: center center;
    }
  </style>
</head>

<body> 
  <?php require 'views/header.php';?>
  <br>
  <h1 class="text-muted"  style="text-align: center;">BIENVENIDO A MITTE</h1>
  <div class="container w-75 bg-secondary mt-5 rounded shadow">   
    <div class="row">
    <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded"></div>
      <div class="col bg-white p-5 rounded-end">      
      <form id="form" action="<?php echo constant('URL'); ?>login/authenticate" enctype="multipart/form-data" method="POST">
        <div class="mb-4">
          <label for="email" class="form-label">Correo Electronico</label>
          <input type="email" class="form-control" name="email" id="correo">
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
        </div>
        <div class="mb-4">
          <label for="password" class="form-label">Contraseña</label>
          <input type="password" class="form-control" name="password" id="pass"> 
          
          <div class="alert alert-danger align-items-start alert-dismissible d-none &nbsp&<?php echo $this->alerta;?> fade show" role="alert">
  <div>
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </svg>  
    <?php echo $this->mensaje;?><tab><tab><tab> &nbsp <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>    
       </div>
       <?php echo $this->alerta2;?>
        </div>     
        <div class="d-grid">
          <button type=submit onclick=" if(valida()==true){return true}else {return false}" class="btn btn-danger">Iniciar Sesion</button>
        </div>
        <div class="my-3">
        <span>No tienes cuenta? <a href="<?php echo constant('URL');?>signup">Registrate</a></span><br>
        <span><a  data-bs-toggle="modal" href="#modalrecuperacion" role="button">Recuperar contraseña</a></span><br>
        </div>
      </form>
        <div class="modal fade" id="modalrecuperacion" aria-hidden="true" aria-labelledby="modalrecuperacionLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalrecuperacionLabel">¿Olvidaste tu contraseña?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <p> Para recuperar tu contraseña ingresa tu correo electrónico, te enviaremos un código de verificación el cual ingresaras en la siguiente ventana </p>
       
        <form  method="POST" enctype="multipart/form-data" id="form1" name="form1"> 
      <div class="col-sm-12">        
          <label for="email2" class="form-label">Correo electronico:</label>
          <input type="email" name="email2" class="form-control" id="email2" placeholder="Ingresa tu correo electronico" required><br/>
       </div> 
       <div class="respuesta"></div>
       <br>   
       <div>
        <button type="button" class="btn btn-success enviar" data-bs-toggle="modal">enviar</button>
      </div>     
      </form>     
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary siguiente" data-bs-target="#modalValidacion" data-bs-toggle="modal" data-bs-dismiss="modal"  disabled>Siguiente</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalValidacion" aria-hidden="true" aria-labelledby="modalValidacionLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalValidacionLabel2">Ingresa tu código de verificación</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <p>Revisa la bandeja de entrada de tu correo electrónico, copia el código de verificación e ingrésalo dentro del campo</p>
       
        <form action="<?php echo constant('URL'); ?>/cuenta/upload/" name="form2" enctype="multipart/form-data" method="POST">
      <div class="col-sm-12">        
          <label for="codigo" class="form-label">Código de verificación:</label>
          <input type="text" name="codigo" class="form-control" id="codigo" placeholder="Ingresa el código de verificación" required><br/>
       </div>  
       <div class="respuesta2"></div>
       <br> 
       <div> 
       <button type="button" class="btn btn-success enviar2"  data-bs-toggle="modal">enviar</button>
       </div>      
      </form> 
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary siguiente2" data-bs-target="#modalnuevacontrasena" data-bs-toggle="modal" data-bs-dismiss="modal" disabled>Siguiente</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalnuevacontrasena" aria-hidden="true" aria-labelledby="modalnuevacontrasenaLabel3" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalnuevacontrasenaLabel3">Ingresa tu nueva contraseña</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Rellena los campos correspondientes </p>
        <form action="<?php echo constant('URL'); ?>login/CambiaPass" enctype="multipart/form-data" method="POST">
      <div class="col-sm-12">        
          <label for="password2" class="form-label">Nueva contraseña:</label>
          <input type="password" name="password2" class="form-control" id="password2" placeholder="Ingresa tu nueva contraseña" require><br/>
          <label for="verificacion" class="form-label">Repite la nueva contraseña:</label>
          <input type="password" name="verificacion" class="form-control" id="verificacion" placeholder="Vuelve a ingresar tu nueva contraseña" require><br/>
       </div>   
       <div id="respuesta3"></div>
       <br>  
       <div class="modal-footer">
        <button type="submit" class="btn btn-danger" onclick="if(validacion()==true){return true}else {return false}" class="btn btn-danger" data-bs-toggle="modal">Enviar</button>
      </div>    
      </form>
      </div>      
    </div>
  </div>
</div>       
      </div>
      </div>
      </div>   
      <script src="<?php echo constant('URL');?>js/selecto.js"></script>    
      <script src="<?php echo constant('URL');?>js/cod.js"></script>
      <script src="<?php echo constant('URL');?>js/select.js"></script>           
      <script src="<?php echo constant('URL'); ?>bootstrapd/js/popper.min.js"></script>
      <script src="<?php echo constant('URL');?>js/jquery.min.js"></script>     
      <br>      
      <?php require 'views/footer.php'; ?>   
</body>
</html>