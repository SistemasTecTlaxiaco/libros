<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Registro de usuario MiTTE</title>
  <link rel="icon" href="<?php echo constant('URL');?>img/icono.png" sizes="32x32" type="image/png">
    <link rel="icon" href="<?php echo constant('URL');?>img/icono.png" sizes="16x16" type="image/png">
    <link rel="stylesheet" href="<?php echo constant('URL');?>bootstrapd/css/bootstrap.min.css" crossorigin="anonymous">  
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
<?php require 'views/principal/header.php';?>  
  <div class="container w-75 bg-secondary mt-3 rounded shadow container-fluid">
    <div class="row">    
      <div class="col bg-white p-5 rounded-end"> 
    <h1 class="text-center">Publica tus trabajos y da a conocer tus conocimientos al mundo</h1>  
      <form action="<?php echo constant('URL'); ?>/nuevoArchivo/registrar" enctype="multipart/form-data" method="POST">
      <?php echo $this->alerta;?>   
    <div class="row g-3">
      <div class="col-sm-12">
          <label for="nombre" class="form-label">Seleciona tu archivo (max. 2mb)</label>
          <input type="file" name="archivo" class="form-control" value="" id="archivo" placeholder="Selecciona tu archivo (maximo 2mb)"  accept="application/pdf, application/vnd.openxmlformats-officedocument.wordprocessingml.document, application/vnd.openxmlformats-officedocument.presentationml.presentation">
       </div>     
      <div class="col-sm-6">
          <label for="titulo" class="form-label">Titulo</label>
          <input type="text" name="titulo" class="form-control" id="titulo" placeholder="Titulo con el que aparecera tu archivo">
        </div> 
      <div class="col-sm-6">
          <label for="autor" class="form-label">Autor</label>
          <input type="autor" name="autor" class="form-control" value="" id="autor" placeholder="Ingresa el nombre del autor" required>
        </div>
        <div class="col-sm-6">
          <label for="passwo" class="form-label">Materia</label>
          <input type="text" class="form-control" name="materia" id="materia" placeholder="Ingresa el nombre de la materia" >
        </div>        
        <div class="col-sm-6">
          <label for="Fecha" class="form-label">tipo de publicacion</label>
          <input type="text" class="form-control" value="" name="tipo" id="tipo" name="event_datetime" id="form_datetime" placeholder="Ingresa el tipo de publicacion (investigacion, proyecto o posgrado)">
        </div> 
        </div>
        <div class="mb-4">
        <label for="password2" class="form-label">Descripcion</label>
          <textarea class="form-control" name="descripcion" id="descrip" placeholder="Ingresa una descripción, se breve (El numero máximo caracteres permitidos son 130)" maxlength="130"></textarea>
        </div>                   
         <br>
        <div class="d-grid">
          <button onclick=" if(valida()==true){return true;}else{return false;}" onsubmit="return false"  class="btn btn-danger" type="submit">Subir Archivo</button>
        </div>        
      </form>
      </div>
      </div>
      </div>
      <br>  
      <script src="<?php echo constant('URL');?>public/js/validaform.js"></script>  
      <script src="<?php echo constant('URL'); ?>bootstrapd/js/popper.min.js"></script>
      <script src="<?php echo constant('URL'); ?>bootstrapd/js/bootstrap.bundle.min.js"></script> 
      <?php require 'views/footer.php'; ?>  
</body>
</html>