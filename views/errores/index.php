<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      .bg{
      background-image: url(<?php echo constant('URL');?>/img/404.svg);
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
<?php require 'views/header.php'; ?>
    <div class="main container-fluid py-10">
     <div class="p-3 mb-4 bg-light rounded-3 card">
        <h1 class="text-center text-black"><?php echo $this->mensaje; ?></h1>      
        <svg id="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid slice" focusable="false" viewBox="0 0 312 180.04"><title>error404</title><image width="1300" height="700" transform="scale(0.24)" xlink:href="<?php echo constant('URL');?>/img/404.png"/></svg>
         <h4 class="text-center text-success"><?php echo $this->indicacion; ?></h4>
        <div>        
    </div>  
</div>
    <?php require 'views/footer.php';?>  
</body>
</html>
