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
           <h3>!Hola &nbsp<?php echo $this->nomUser;?>!, ordenamos tus archivos conforme a tus publicaciones</h3>   
          </div> 
          </div> 
          <div class=" col-ms-1 col-lg-6 col-md-8 mx-auto border"></div>         
        <div class="col-6  col-ms-1 col-md-6 mx-auto align-items-center">
<?xml version="1.0" encoding="iso-8859-1"?>
<svg  class="bd-placeholder-img flex-shrink-0 me-2 rounded" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" width="320" height="320" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" preserveAspectRatio="xMidYMid slice" focusable="false"><path style="fill:#7CB777;" d="M396.499,133.341V94.35c0-11.381-9.226-20.608-20.608-20.608h-52.451	c-11.381,0-20.608,9.226-20.608,20.608L256,170.187l46.833,135.418l41.816,20.447l51.85-20.447l46.833-96.436L396.499,133.341z"/><path style="fill:#FADC60;" d="M209.167,94.35c0-11.381-9.226-20.608-20.608-20.608h-52.451c-11.381,0-20.608,9.226-20.608,20.608 v38.991l-46.833,75.829l46.833,96.436l41.816,20.447l51.85-20.447L256,170.187L209.167,94.35z"/>
<path style="fill:#FD6F71;" d="M94.894,112.734H42.442c-11.381,0-20.608,9.226-20.608,20.608v172.265l41.817,20.446l51.85-20.447 V133.341C115.501,121.961,106.275,112.734,94.894,112.734z"/><ellipse style="fill:#E34B4C;" cx="68.672" cy="180.406" rx="18.584" ry="26.444"/><path style="fill:#FADC60;" d="M469.558,112.734h-52.451c-11.381,0-20.608,9.226-20.608,20.608v172.265l41.816,20.447l51.85-20.447 V133.341C490.164,121.961,480.938,112.734,469.558,112.734z"/><ellipse style="fill:#E0B629;" cx="443.328" cy="180.406" rx="18.584" ry="26.444"/><path style="fill:#57D0E6;" d="M282.225,34.769h-52.451c-11.381,0-20.608,9.226-20.608,20.608v250.229l41.816,20.447l51.85-20.447 V55.377C302.833,43.995,293.607,34.769,282.225,34.769z"/><rect x="209.168" y="84.764" style="fill:#EFEDEE;" width="93.664" height="39.63"/><g>	<path style="fill:#C86D5C;" d="M40.052,338.205l2.604,125.871c0.151,7.309,6.12,13.155,13.43,13.155h15.128	c7.311,0,13.28-5.846,13.43-13.155l2.604-125.871L40.052,338.205L40.052,338.205z"/>	<path style="fill:#C86D5C;" d="M471.948,338.205l-2.604,125.871c-0.151,7.309-6.12,13.155-13.43,13.155h-15.128	c-7.311,0-13.28-5.846-13.43-13.155l-2.604-125.871L471.948,338.205L471.948,338.205z"/></g><g>	<polygon style="fill:#AD4F3D;" points="426.063,401.71 470.634,401.71 471.948,338.205 424.749,338.205 	"/>	<polygon style="fill:#AD4F3D;" points="41.366,401.71 85.937,401.71 87.251,338.205 40.052,338.205 	"/></g><path style="fill:#C86D5C;" d="M490.165,305.606H21.836C9.776,305.606,0,315.382,0,327.441v21.528	c0,12.059,9.776,21.836,21.836,21.836h468.33c12.059,0,21.835-9.776,21.835-21.836v-21.528 	C512,315.382,502.224,305.606,490.165,305.606z"/><g>	<rect x="209.168" y="235.933" style="fill:#EFEDEE;" width="93.664" height="39.63"/>	<rect x="302.832" y="147.677" style="fill:#EFEDEE;" width="93.664" height="70.681"/></g><rect x="115.504" y="147.677" style="fill:#E0B629;" width="93.664" height="70.681"/><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
 
      </div>
    </div>
    </div>
  </section>
  <div class="my-3 p-3 bg-body rounded shadow-sm shadow-fluid">
    <h6 class="border-bottom pb-2 mb-0">Tus Archivos</h6>
    <?php
                include_once 'models/archivo.php';
                if($this->archivos==null || $this->archivos==[]){
                ?> 
      <div class="d-flex text-muted pt-3">
      <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" id="bold" enable-background="new 0 0 32 32"width="32" height="32"viewBox="0 0 32 32" width="512" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"><path d="m26 32h-20c-3.314 0-6-2.686-6-6v-20c0-3.314 2.686-6 6-6h20c3.314 0 6 2.686 6 6v20c0 3.314-2.686 6-6 6z" fill="#fff9dd"/><path d="m10.667 12.5c0-1.746 1.421-3.167 3.167-3.167h6.089c-.22-.767-.92-1.333-1.756-1.333h-7.667c-1.011 0-1.833.822-1.833 1.833v10.333c0 1.012.822 1.834 1.833 1.834h.167z" fill="#ffe777"/><path d="m21.5 10.667h-7.667c-1.011 0-1.833.822-1.833 1.833v9.667c0 1.011.822 1.833 1.833 1.833h7.667c1.011 0 1.833-.822 1.833-1.833v-9.667c0-1.011-.822-1.833-1.833-1.833zm-1.333 11.333h-5c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h5c.276 0 .5.224.5.5s-.224.5-.5.5zm0-2.667h-5c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h5c.276 0 .5.224.5.5s-.224.5-.5.5zm0-2.333h-5c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h5c.276 0 .5.224.5.5s-.224.5-.5.5zm0-2.667h-5c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h5c.276 0 .5.224.5.5s-.224.5-.5.5z" fill="#ffd200"/></svg>
      <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
        <div class="d-flex justify-content-between">
          <div class="col-ms-1 col-md-3">
          <strong class="text-gray-dark">Resultado:</strong>
          <span class="d-block">Usted no cuenta con archivos almacenados</span> 
          </div>             
        </div>
      </div>
    </div>
    <?php }
    ?>
      <?php
                foreach($this->archivos as $file){                                   
                    $archivo=new Archivo();
                    $archivo=$file;                
     ?>
    <div class="d-flex text-muted pt-3">
    <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" id="bold" enable-background="new 0 0 32 32"width="32" height="32"viewBox="0 0 32 32" width="512" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"><path d="m26 32h-20c-3.314 0-6-2.686-6-6v-20c0-3.314 2.686-6 6-6h20c3.314 0 6 2.686 6 6v20c0 3.314-2.686 6-6 6z" fill="#fff9dd"/><path d="m10.667 12.5c0-1.746 1.421-3.167 3.167-3.167h6.089c-.22-.767-.92-1.333-1.756-1.333h-7.667c-1.011 0-1.833.822-1.833 1.833v10.333c0 1.012.822 1.834 1.833 1.834h.167z" fill="#ffe777"/><path d="m21.5 10.667h-7.667c-1.011 0-1.833.822-1.833 1.833v9.667c0 1.011.822 1.833 1.833 1.833h7.667c1.011 0 1.833-.822 1.833-1.833v-9.667c0-1.011-.822-1.833-1.833-1.833zm-1.333 11.333h-5c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h5c.276 0 .5.224.5.5s-.224.5-.5.5zm0-2.667h-5c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h5c.276 0 .5.224.5.5s-.224.5-.5.5zm0-2.333h-5c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h5c.276 0 .5.224.5.5s-.224.5-.5.5zm0-2.667h-5c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h5c.276 0 .5.224.5.5s-.224.5-.5.5z" fill="#ffd200"/></svg>
      <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
        <div class="d-flex justify-content-between">
          <div class="col-ms-1 col-md-2">
          <strong class="text-gray-dark">Nombre:</strong>
          <span class="d-block"><?php echo $archivo->nombre;?></span> 
          </div>
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
          <strong class="text-gray-dark">tipo de publicacion:</strong>         
          <span class="d-block"><?php echo $archivo->tipo;?></span>
          </div>
          <div class="col-md-2">
          <strong class="text-gray-dark">Fecha de publicación:</strong>
          <span class="d-block"><?php echo $archivo->fecha;?></span>
          </div>
          <div class="align-items-end">
          <a href="<?php echo constant('URL').$archivo->ruta;?>">Abrir</a>                   
          <a href="<?php echo constant('URL').'misArchivos/Datos/'.$archivo->nombre;?>">Actualizar</a>
          <a href="<?php echo constant('URL').'misArchivos/eliminar/'.$archivo->nombre;?>">Eliminar</a>
         </div>
        </div>
      </div>
    </div>
    <?php }
    ?>
    <!--div class="d-flex text-muted pt-3">
      <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>

      <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
        <div class="d-flex justify-content-between">
          <div>
          <strong class="text-gray-dark">Nombre:</strong>
          <span class="d-block">JavaScript.pdf</span> 
          </div>
          <div>
          <strong class="text-gray-dark">titulo:</strong>
          <span class="d-block">Utilizacion de JavaScript</span>
          </div>
          <div>
          <strong class="text-gray-dark">Materia:</strong>
          <span class="d-block">Programacion web</span>
          </div>
          <div>
          <strong class="text-gray-dark">Autor:</strong>
          <span class="d-block">Jaciel Garcia Santiago</span>
          </div>
          <div>
          <strong class="text-gray-dark">tipo de publicacion:</strong>         
          <span class="d-block">Investigación</span>
          </div>
          <div>
          <strong class="text-gray-dark">Fecha de publicación:</strong>
          <span class="d-block">24/03/2021</span>
          </div>
          <div class="align-items-end">
          <a href="#">Abrir</a>                   
          <a href="#">Actualizar</a>
          <a href="#">Eliminar</a>
         </div>
        </div>
      </div>
    </div>
    <div class="d-flex text-muted pt-3">
      <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>

      <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
        <div class="d-flex justify-content-between">
          <div>
          <strong class="text-gray-dark">Nombre:</strong>
          <span class="d-block">JavaScript.pdf</span> 
          </div>
          <div>
          <strong class="text-gray-dark">titulo:</strong>
          <span class="d-block">Utilizacion de JavaScript</span>
          </div>
          <div>
          <strong class="text-gray-dark">Materia:</strong>
          <span class="d-block">Programacion web</span>
          </div>
          <div>
          <strong class="text-gray-dark">Autor:</strong>
          <span class="d-block">Jaciel Garcia Santiago</span>
          </div>
          <div>
          <strong class="text-gray-dark">tipo de publicacion:</strong>         
          <span class="d-block">Investigación</span>
          </div>
          <div>
          <strong class="text-gray-dark">Fecha de publicación:</strong>
          <span class="d-block">24/03/2021</span>
          </div>
          <div class="align-items-end">
          <a href="#">Abrir</a>                   
          <a href="#">Actualizar</a>
          <a href="#">Eliminar</a>
         </div>
        </div>
      </div>
    </div> 
    </div-->
    </div>
 
</div>
    <script src="<?php echo constant('URL'); ?>bootstrapd/js/bootstrap.bundle.min.js"></script> 
    <br>
    <?php require 'views/footer.php'; ?>   
  </body>
</html>