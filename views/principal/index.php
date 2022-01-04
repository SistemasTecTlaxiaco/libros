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
    #fondo{
  text-align: center;
	position: relative;
    }
    #fondo:before{
	content:'';
	position: absolute;
        top: 0;
	bottom: 0;
	left: 0;
	right: 0;
	background-color: rgba(0,0,0,0.10);
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

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
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

      </div>
    </div>
  </div>
</main>
    <script src="<?php echo constant('URL'); ?>bootstrapd/js/bootstrap.bundle.min.js"></script> 
    <br>
    <?php require 'views/footer.php'; ?>   
  </body>
</html>
