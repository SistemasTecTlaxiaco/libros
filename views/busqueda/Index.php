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
           <h3>!Hola &nbsp<?php echo $this->nomUser;?>!, Buscamos lo que necesitas</h3>   
          </div> 
          </div> 
          <div class=" col-ms-1 col-lg-6 col-md-8 mx-auto border"></div>         
        <div class="col-6  col-ms-1 col-md-6 mx-auto align-items-center"> 
      </div>
    </div>
    </div>
  </section>
  <div class="my-3 p-3 bg-body rounded shadow-sm shadow-fluid">
    <h6 class="border-bottom pb-2 mb-0">Resultados de la busqueda</h6>
    <?php
                include_once 'models/archivo.php';
                if($this->resultado==null || $this->resultado==[]){?> 
      <div class="d-flex text-muted pt-3"> 
      <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" id="bold" enable-background="new 0 0 32 32"width="32" height="32"viewBox="0 0 32 32" width="512" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"><path d="m26 32h-20c-3.314 0-6-2.686-6-6v-20c0-3.314 2.686-6 6-6h20c3.314 0 6 2.686 6 6v20c0 3.314-2.686 6-6 6z" fill="#fff9dd"/><path d="m10.667 12.5c0-1.746 1.421-3.167 3.167-3.167h6.089c-.22-.767-.92-1.333-1.756-1.333h-7.667c-1.011 0-1.833.822-1.833 1.833v10.333c0 1.012.822 1.834 1.833 1.834h.167z" fill="#ffe777"/><path d="m21.5 10.667h-7.667c-1.011 0-1.833.822-1.833 1.833v9.667c0 1.011.822 1.833 1.833 1.833h7.667c1.011 0 1.833-.822 1.833-1.833v-9.667c0-1.011-.822-1.833-1.833-1.833zm-1.333 11.333h-5c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h5c.276 0 .5.224.5.5s-.224.5-.5.5zm0-2.667h-5c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h5c.276 0 .5.224.5.5s-.224.5-.5.5zm0-2.333h-5c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h5c.276 0 .5.224.5.5s-.224.5-.5.5zm0-2.667h-5c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h5c.276 0 .5.224.5.5s-.224.5-.5.5z" fill="#ffd200"/></svg>
      <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
        <div class="d-flex justify-content-between">
          <div class="col-ms-1 col-md-3">
          <strong class="text-gray-dark">Resultado:</strong>
          <span class="d-block">No se encontro ninguna coincidencia</span> 
          </div>             
        </div>
      </div>
    </div>
    <?php }
    ?>
      <?php
                foreach($this->resultado as $n){                                   
                    $archivo=new Archivo();
                    $archivo=$n;                
     ?>
    <div class="d-flex text-muted pt-3" >
    <img class="bd-placeholder-img flex-shrink-0 me-3 pt-2 rounded justify-content-between" src="<?php echo constant('URL'); ?>img/publicacion.svg" width="52" height="52">
          <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
        <div class="d-flex justify-content-between">
          <div class="col-md-1">
          <strong class="text-gray-dark">titulo:</strong>
          <span class="d-block"><?php echo $archivo->titulo;?></span>
          </div>
          <div class="col-md-1">
          <strong class="text-gray-dark">Materia:</strong>
          <span class="d-block"><?php echo $archivo->materia;?></span>
          </div>
          <div class="col-md-1">
          <strong class="text-gray-dark">Autor:</strong>
          <span class="d-block"><?php echo $archivo->autor;?></span>
          </div>          
          <div class="col-md-2">
          <strong class="text-gray-dark">Fecha de publicación:</strong>
          <span class="d-block"><?php echo $archivo->fecha;?></span>
          </div>         
        </div>
      </div>
    </div>
    <?php }
    ?>
   
    </div>
 
</div>
    <script src="<?php echo constant('URL'); ?>bootstrapd/js/bootstrap.bundle.min.js"></script> 
    <br>
    <?php require 'views/footer.php'; ?>   
  </body>
</html>