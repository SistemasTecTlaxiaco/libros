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
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo constant('URL'); ?>img/sl1-1.png" class="d-block w-100 fondo" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Introducción</h5>
        <p>MiTTE es un espacio de integración de elementos y escenarios académicos fuera del aula virtual en el cual podrás encontrar contenido de apoyo docente y estudiantil como tutoriales y cursos que permitirán fortalecer tus conocimentos y ademàs te servirán de ayuda en la realización de trabajos o 
proyectos educativos.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo constant('URL'); ?>img/sl2.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Comparte tus conocimientos</h5>
        <p>Con MiTTE puedes compartir todos tus proyectos educativos.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo constant('URL'); ?>img/sl3.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Forma parte de la comunidad</h5>
        <p>Forma parte de nuestra comunidad para colaborar con correcciones y recibir ayuda de la comunidad.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>      
  </section>

  <div class="album py-5">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4  g-3">
      <div class="col">
          <div class="card shadow-sm">   
             <svg id="Capa_1" class="bd-placeholder-img card-img-top" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 479.44 255" role="img"  preserveAspectRatio="xMidYMid slice" focusable="false"><a href="#"><title>Teoria de grafos</title><image width="1000" height="420" transform="scale(0.48 0.61)" xlink:href="<?php echo constant('URL'); ?>img/grafos.png"/></a></svg>
             <div class="card-body">
            <h5 class="card-title" style="text-align: center;">Teoria de grafos</h5>
              <p class="card-text">La teoría de grafos, también llamada teoría de gráficas, es una rama de las matemáticas y las ciencias de la computación que estudia las propiedades de los grafos.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div>
                <small class="text-muted"> Subido por: Jaciel Garcia Santiago</small>
                </div>
                <small class="text-muted"> 20hrs</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <svg id="Capa_1" class="bd-placeholder-img card-img-top" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 479 255" role="img"  preserveAspectRatio="xMidYMid slice" focusable="false"><a href="#"><title>Creacion de una aplicacion movil para BMW</title><image width="1258" height="627" transform="scale(0.4 0.41)" xlink:href="<?php echo constant('URL'); ?>img/celulares.jpg"/></a></svg>          
            <div class="card-body">
            <h5 class="card-title" style="text-align: center;">Creacion de una aplicacion movil para BMW</h5>
              <p class="card-text">Las apps móviles se han posicionado como unas de las herramientas más eficaces para las empresas, especialmente en el campo del e-commerce.</p>
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
          <svg id="Capa_1" class="bd-placeholder-img card-img-top" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 479 255" role="img"  preserveAspectRatio="xMidYMid slice" focusable="false"><a href="#"><title>Inteligencia artificial</title><image width="1200" height="627" transform="scale(0.4 0.41)" xlink:href="<?php echo constant('URL'); ?>img/robot.jpg"/></a></svg> 
            <div class="card-body">
            <h5 class="card-title" style="text-align: center;">Inteligencia artificial</h5>
              <p class="card-text text-justify">IA se refiere a los sistemas o las máquinas que imitan la inteligencia humana para realizar tareas y que tienen la capacidad de mejorar iterativamente a partir de la información que recopilan.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div>
                <small class="text-muted"> Subido por: Sergio Cruz Martinez</small>
                </div>
                <small class="text-muted">20 dias</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" href= "<?php echo constant('URL'); ?>img/c.svg"></img>
          <svg id="Capa_1" class="bd-placeholder-img card-img-top" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 479 255" role="img"  preserveAspectRatio="xMidYMid slice" focusable="false"><a href="#"><title>Implementacion de un sistema para la automatizacion de procesos</title><image width="1200" height="627" transform="scale(0.4 0.41)" xlink:href="<?php echo constant('URL'); ?>img/financiera.jpg"/></a></svg> 
            <div class="card-body">
            <h5 class="card-title" style="text-align: center;">Implementacion de un sistema para la automatizacion de procesos</h5>
              <p class="card-text">Una metodología en ingeniería de software es un modo de llevar a cabo diferentes actividades en determinado orden y comprende las herramientas utilizadas.</p>
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
          <svg id="Capa_1" class="bd-placeholder-img card-img-top" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 479 255" role="img"  preserveAspectRatio="xMidYMid slice" focusable="false"><a href="#"><title>Analisis, diseño e implementacion de software sobre redes IP</title><image width="1200" height="627" transform="scale(0.4 0.41)" xlink:href="<?php echo constant('URL'); ?>img/ip.jpg"/></a></svg>
            <div class="card-body">
            <h5 class="card-title" style="text-align: center;">Analisis, diseño e implementacion de software sobre redes IP</h5>
              <p class="card-text">Esta nueva tecnología de telefonía existe la posibilidad de que un servidor dotado con el software adecuado sea el que implemente las funcionalidades que, en el esquema de telefonía antiguo.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div>
                <small class="text-muted"> Subido por: Marcos Jonathan</small>
                </div>
                <small class="text-muted">2 dias</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <svg id="Capa_1" class="bd-placeholder-img card-img-top" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 474 255" role="img"  preserveAspectRatio="xMidYMid slice" focusable="false"><a href="#"><title>Redes neuronales</title><image width="1280" height="718" transform="scale(0.37 0.37)" xlink:href="<?php echo constant('URL'); ?>img/cerebro.jpg"/></a></svg>
            <div class="card-body">
            <h5 class="card-title" style="text-align: center;">Redes neuronales</h5>
              <p class="card-text">Las redes neuronales artificiales son un modelo computacional el que fue evolucionando a partir de diversas aportaciones científicas que están registradas en la historia.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div>
                <small class="text-muted"> Subido por: Jenifer Perez Garzon</small>
                </div>
                <small class="text-muted">8 dias</small>
              </div>
            </div>
          </div>
        </div>
        <?php
                foreach($this->files as $file){                                   
                    $archivo=new Archivo();
                    $archivo=$file;  
                    if($archivo->tipo=="posgrado"||$archivo->tipo=="posgrados"||$archivo->tipo=="Posgrado"||$archivo->tipo=="Posgrados"){                
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
