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
  <main>
  <section class="py-3 text-center container">
    <div class="row py-lg-5 bg-danger">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-white text-light">Bienvenido al apartado de posgrados</h1>
        <p class="lead text-light">En este apartado encontraras una variedad de investigaciones y tesis hechas por estudiantes de posgrados universitarios (ingeniria y licenciatura)</p>        
      </div>
    </div>
  </section>

  <div class="album py-5">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4  g-3">
        <div class="col">
          <div class="card shadow-sm">   
             <svg id="Capa_1" class="bd-placeholder-img card-img-top" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 479.44 255" role="img"  preserveAspectRatio="xMidYMid slice" focusable="false"><a href="#"><title>JavaScript.pdf</title><image width="1000" height="420" transform="scale(0.48 0.61)" xlink:href="<?php echo constant('URL'); ?>img/10.jpeg"/></a></svg>
             <div class="card-body">
            <h5 class="card-title" style="text-align: center;">JavaScript.pdf</h5>
              <p class="card-text">JavaScript es uno de los lenguajes mas utilizados hoy en dia para la programacion de eventos y funciones.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div>
                <small class="text-muted"> Subido por: Jaciel Garcia Santiago</small>
                </div>
                <small class="text-muted"> 5hr</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <svg id="Capa_1" class="bd-placeholder-img card-img-top" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 474 253" role="img"  preserveAspectRatio="xMidYMid slice" focusable="false"><a href="#"><title>Investigacion de fractales.pdf</title><image width="1280" height="960" transform="scale(0.37 0.27)" xlink:href="<?php echo constant('URL'); ?>img/11.jpeg"/></a></svg>          
            <div class="card-body">
            <h5 class="card-title" style="text-align: center;">Investigacion de fractales.pdf</h5>
              <p class="card-text">Un fractal es un objeto geométrico cuya estructura básica, fragmentada o aparentemente irregular, se repite a diferentes escalas.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div>
                <small class="text-muted"> Subido por: David Juan Feria Ortiz</small>
                </div>
                <small class="text-muted">15 dias</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" href= "<?php echo constant('URL'); ?>img/c.svg"></img>
          <svg id="Capa_1" class="bd-placeholder-img card-img-top" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 479 255" role="img"  preserveAspectRatio="xMidYMid slice" focusable="false"><a href="#"><title>Usos de cajas.pdf</title><image width="1200" height="627" transform="scale(0.4 0.41)" xlink:href="<?php echo constant('URL'); ?>img/t2.jpg"/></a></svg> 
            <div class="card-body">
            <h5 class="card-title" style="text-align: center;">Usos de cajas.pdf</h5>
              <p class="card-text">CSS es un lenguaje que define la apariencia de un documento escrito en un lenguaje de Hipertextos incluyendo varios languages basados en XML.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div>
                <small class="text-muted"> Subido por: Antonio Cruz Chavez</small>
                </div>
                <small class="text-muted">20 dias</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
          <svg id="Capa_1" class="bd-placeholder-img card-img-top" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 479 255" role="img"  preserveAspectRatio="xMidYMid slice" focusable="false"><a href="#"><title>Usos de cajas.pdf</title><image width="1200" height="627" transform="scale(0.4 0.41)" xlink:href="<?php echo constant('URL'); ?>img/t1.png"/></a></svg>
            <div class="card-body">
            <h5 class="card-title" style="text-align: center;">Importacia y uso de HTML5.pdf</h5>
              <p class="card-text">Es un lenguaje con elementos que dan estructura a una página web y mejora la organización del contenido (en su mas reciente version).</p>
              <div class="d-flex justify-content-between align-items-center">
                <div>
                <small class="text-muted"> Subido por: Marcos Jonathan</small>
                </div>
                <small class="text-muted">30 dias</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <svg id="Capa_1" class="bd-placeholder-img card-img-top" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 474 255" role="img"  preserveAspectRatio="xMidYMid slice" focusable="false"><a href="#"><title>Manual de Laravel.pdf</title><image width="1280" height="720" transform="scale(0.37 0.35)" xlink:href="<?php echo constant('URL'); ?>img/t3.jpg"/></a></svg>
            <div class="card-body">
            <h5 class="card-title" style="text-align: center;">Manual de Laravel.pdf</h5>
              <p class="card-text">Laravel es un framework de código abierto para desarrollar aplicaciones y servicios web con PHP 5, PHP 7 y PHP 8.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div>
                <small class="text-muted"> Subido por: Maria Hernandez Zabedra</small>
                </div>
                <small class="text-muted">30 dias</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <svg id="Capa_1" class="bd-placeholder-img card-img-top" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 479 255" role="img"  preserveAspectRatio="xMidYMid slice" focusable="false"><a href="#"><title>Usos de cajas.pdf</title><image width="700" height="368" transform="scale(0.68 0.69)" xlink:href="<?php echo constant('URL'); ?>img/t4.jpg"/></a></svg>
            <div class="card-body">
            <h5 class="card-title" style="text-align: center;">PHP para principiantes.pdf</h5>
              <p class="card-text">PHP es un lenguaje de programación de uso general que se adapta especialmente al desarrollo web.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div>
                <small class="text-muted"> Subido por: Francisco Mejia Jose</small>
                </div>
                <small class="text-muted">40 dias</small>
              </div>
            </div>
          </div>
        </div>
        <?php
                foreach($this->files as $file){                                   
                    $archivo=new Archivo();
                    $archivo=$file;  
                    if($archivo->tipo=="proyecto"||$archivo->tipo=="proyectos"||$archivo->tipo=="Proyecto" ||$archivo->tipo=="Proyectos"){                
     ?>
     <div class="col">
          <div class="card shadow-sm">
          <svg id="Capa_1" class="bd-placeholder-img card-img-top" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 479 255" role="img"  preserveAspectRatio="xMidYMid slice" focusable="false"><a href="<?php echo constant('URL').$archivo->ruta;?>"><title><?php echo $archivo->nombre;?></title><image width="870" height="522" transform="scale(0.68 0.69)" xlink:href="<?php echo constant('URL'); ?>img/investigaciones.jpg"/></a></svg>
            <div class="card-body">
            <h5 class="card-title" style="text-align: center;"><?php echo $archivo->titulo;?></h5>
              <p class="card-text"><?php echo $archivo->descripcion;?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div>
                <small class="text-muted"><?php echo $archivo->autor;?></small>
                </div>
                <small class="text-muted"><?php echo $archivo->fecha;?></small>
              </div>
            </div>
          </div>
        </div>
      <?php }}
    ?>
     

      </div>
    </div>
  </div>
</main>
    <script src="<?php echo constant('URL'); ?>bootstrapd/js/bootstrap.bundle.min.js"></script> 
    <br>
    <?php require 'views/footer.php'; ?>   
  </body>
</html>
