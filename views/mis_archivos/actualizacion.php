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
      <h1 class="text-center">Actualiza los datos de tu archivo (publicación)</h1>  
      <?php echo $this->alerta;?>       
      <form class="py-2" action="<?php echo constant('URL'); ?>/misArchivos/updateA" enctype="multipart/form-data" method="POST">
      <div class="row g-3">
      <div class="col-sm-6">
          <label for="titulo" class="form-label">Titulo</label>
          <input type="text" name="titulo" class="form-control" id="titulo" value="<?php echo $this->archivo->titulo;?>" placeholder="Titulo con el que aparecera tu archivo">
        </div> 
      <div class="col-sm-6">
          <label for="autor" class="form-label">Autor</label>
          <input type="autor" name="autor" class="form-control" value="<?php echo $this->archivo->autor;?>" id="autor" placeholder="Ingresa el nombre del autor" required>
        </div>
        <div class="col-sm-6">
          <label for="passwo" class="form-label">Materia</label>
          <input type="text" class="form-control" name="materia" value="<?php echo $this->archivo->materia;?>" id="materia" placeholder="Ingresa el nombre de la materia" >
        </div>        
        <div class="col-sm-6">
          <label for="Fecha" class="form-label">tipo de publicacion</label>
          <input type="text" class="form-control" value="<?php echo $this->archivo->tipo;?>" name="tipo" id="tipo" name="event_datetime" id="form_datetime" placeholder="Ingresa el tipo de publicacion (investigacion, proyecto o posgrado)">
        </div> 
        </div>
        <div class="mb-4">
        <label for="password2" class="form-label">Descripcion</label>
          <textarea class="form-control" name="descripcion" id="descrip" value="<?php echo $this->archivo->descripcion;?>" placeholder="Ingresa una descripción, se breve (El numero máximo caracteres permitidos son 130)" maxlength="130"><?php echo $this->archivo->descripcion;?></textarea>
          <input type="hidden" name="nombre" value="<?php echo $this->archivo->nombre;?>"></input>
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
      <h1 class="text-center">¿Deseas actualizar tu archivo?</h1>                
      <form class="py-2" action="<?php echo constant('URL'); ?>/misArchivos/updateArchivo" enctype="multipart/form-data" method="POST">
      <?php echo $this->alerta2;?> 
      <div class="row g-3">
      <div class="col-sm-12">
          <label for="nombre" class="form-label">Seleciona tu archivo (max. 2mb)</label>
          <input type="file" name="archivo" class="form-control" value="" id="archivo" placeholder="Selecciona tu archivo (maximo 2mb)"  accept="application/pdf, application/vnd.openxmlformats-officedocument.wordprocessingml.document, application/vnd.openxmlformats-officedocument.presentationml.presentation">
       </div> 
       <input type="hidden" name="nombre" value="<?php echo $this->archivo->nombre;?>"></input>  
       <input type="hidden" name="ruta" value="<?php echo $this->archivo->ruta;?>"></input>  
  <br>
        <div class="col-md-6 offset-md-10 py-3">
          <button onclick=" if(valida()==true){return true;}else{return false;}" onsubmit="return false"  class="btn btn-warning" type="submit">Actualizar Archivo</button>
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