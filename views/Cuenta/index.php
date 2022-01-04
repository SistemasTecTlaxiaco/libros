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
  <section class="py-4 text-center container">
    <div class="row bg-light"> 
     <div class="card user-card shadow-fluid" >
           <div class="col col-fluid">
          <div class=" shadow-fluid">
           <h1>PERFIL DEL USUARIO</h1>   
          </div> 
          </div> 
          <div class=" col-ms-1 col-lg-6 col-md-8 mx-auto border"></div>  
          <div>
        <br>
       </div>       
        <div class="col-6  col-ms-1 col-md-3 mx-auto align-items-center">
      <a href="#" class="bd-placeholder-img" data-bs-toggle="modal" data-bs-target="#ModalImagen">
        <img src="<?php echo $this->datos->foto?>" alt="" width="100%" height="250" class="rounded-circle img-lg"></a>
            
        <div>
        <br>
        <?php echo $this->alerta;?>   
       </div>   
        <div class="justify-content-between flex-wrap btn-group">
          <button type="button" class="btn btn-warning fw-normal" data-bs-toggle="modal" data-bs-target="#ModalImagen">
            Cambiar imagen
          </button>           
      </div>
    </div>
    <br>
    </div>
      <div class="modal fade" id="ModalImagen" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">Esta es tu imagen de perfil ¿la deseas cambiar?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <img src="<?php echo $this->datos->foto?>" alt="" width="100%" height="320" class="rounded-circle img-g"></a> 
      <br>
      <form class="for2" name="for2" action="<?php echo constant('URL'); ?>/cuenta/upload/" enctype="multipart/form-data" method="POST">
      <div class="col-sm-12">        
          <label for="archivo" class="form-label">Seleciona tu archivo</label>
          <input type="file" name="archivo" class="form-control" id="file" placeholder="Nombre de tu archivo" accept="image/jpeg, image/png, image/gif">
       </div> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button class="btn btn-primary" type="submit">Cambiar imagen</button>
      </div>
      </form>
    </div>
  </div>
</div>
    </div>  
  </section>

  <div class="row mb-2">
    <div class="col-md-6 bg-white">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <div class="d-inline-block d-flex">
          <h1 class="mb-2 text-dark">Datos del usuario</h1><strong class="col-md-1"></strong><div class="align-items-center btn-group offset-md-1"><a href="<?php echo constant('URL').'cuenta/Datos/';?>" class="link-dark"><button class="btn btn-lg rounded-pill w-100 btn-danger shadow-sm font-weight-bold">Editar</button></a></div>          
         
        </div>
        <?php echo $this->alerta2;?>  
          <dl style="display: block; margin-block-start: 1em; margin-block-end: 1em; margin-inline-start: 0px; margin-inline-end: 0px;">
           <dt class="fs-5">Nombre completo:</dt>
          <p class="card-text mb-auto"><?php echo $this->datos->nombre;?>&nbsp<?php echo $this->datos->apellido;?></p><?php?>
          </dl> 
          <dl>
           <dt class="fs-5">Correo Electronico:</dt>
          <p class="card-text mb-auto"><?php echo $this->datos->correo;?></p>
          </dl>
          <dl>
           <dt class="fs-5">Fecha de nacimiento:</dt>
          <p class="card-text mb-auto"><?php echo $this->datos->fecha;?></p>
          </dl>
          <dl>              
          <dt class="fs-5">Telefono:</dt>
          <p class="card-text mb-auto"><?php echo $this->datos->telefono;?></p>  
          </dl> 
          <dl>
           <dt class="fs-5">Estado:</dt>
          <p class="card-text mb-auto"><?php echo $this->datos->estado;?></p>
          </dl>             
        </div>                
      </div>
    </div>
    <div class="col-md-6 bg-white">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <h1 class="d-inline-block mb-2 text-dark">Actividad</h1>        
          <div class="mb-1 text-primary">Hoy</div>  
          <dl>
           <dt class="fs-5">Registros:</dt>
          <?php  include_once 'models/actividad.php';               
                if($this->activity==null || $this->activity==[]){
           ?>
          <p class="card-text mb-auto text-primary">No tiene ninguna actividad registrada</p>        
          </dl>  
          <?php }else {?>  
          <?php                     
                foreach($this->activity as $act){                                   
                    $actividades=new Actividad();
                    $actividades=$act;                
     ?>      
          <p class="card-text mb-auto text-primary"><?php echo $actividades->detalle.' el dia '.$actividades->fecha;?></p> 
          </dl>  
          <?php }}?>    
      </div>
    </div>
  </div>

    </div>
    </div>
    <script src="<?php echo constant('URL'); ?>bootstrapd/js/bootstrap.bundle.min.js"></script> 
    <br>
    <?php require 'views/footer.php'; ?>   
  </body>
</html>