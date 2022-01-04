<?php
session_start();
include_once 'includes/user.php';
include_once 'models/sistemamodel.php';
class investigaciones extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->nomUser=""; 
        $this->view->numero="";
        $this->view->files=[];   
        $this->view->notificacion=[];
    }
    function render(){ 
        if(isset($_SESSION['user'])){        
        $nomUser=$_SESSION['user']; 
        $user= new user();
        $user->setUser($nomUser);
        $nom=$user->getNombre();
        $this->view->nomUser=$nom; 
        $itemDatos=$user->getPhoto($nomUser);       
        $this->view->datos=$itemDatos;   
        $file= new SistemaModel(); 
        $datos=$file->get();           
        $this->view->files=$datos; 
        $Noti=$user->getNotificaciones();  
        $num= $user->getNumero();            
        $this->view->numero=$num;        
        $this->view->notificacion=$Noti;          
        $this->view->render('investigaciones/investigaciones');
    }else{
        header('Location:'.constant('URL').'errores/ErrorAcceso'); 
        die();
    }    
    }
}