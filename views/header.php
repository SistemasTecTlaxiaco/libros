<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title></title>
    <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo constant('URL');?>bootstrapd/css/bootstrap.min.css" crossorigin="anonymous">    
    <!--link rel="stylesheet" href="<?php echo constant('URL');?>bootstrapd/css/main.css"-->
    <link rel="stylesheet" href="<?php echo constant('URL');?>bootstrap/dist/css/bootstrap.css">    
          
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark" id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="<?php echo constant('URL');?>/img/MiTTE3.svg" height="30" width="50">
            </a>            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>       
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="<?php echo constant('URL');?>inicio">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo constant('URL');?>signup">Registrarse</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo constant('URL');?>login">Iniciar sesion</a></li>         
                </ul>
            </div>
        </div>
    </nav> 
<script src="<?php echo constant('URL'); ?>js/popper.min.js" crossorigin="anonymous"></script>
<script src="<?php echo constant('URL'); ?>js/bootstrap.min.js" crossorigin="anonymous"></script>    
</body>
</html>