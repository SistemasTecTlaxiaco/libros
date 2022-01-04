<?php

class Errores extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->indicacion= "";
        $this->view->mensaje = "";       
    }
    function render(){
        $mensaje="Hubo un error en la solicitud o no existe la página";
        $this->view->mensaje = $mensaje;        
        $this->view->render('errores/index');
    }
    function ErrorAcceso(){
        $mensaje="UPS!, no puedes acceder a esta página sin iniciar sesión";
        $indicacion="Por favor inicia sesión";
        $this->view->mensaje = $mensaje;   
        $this->view->indicacion= $indicacion;        
        $this->view->render('errores/index');
    }

}

?>