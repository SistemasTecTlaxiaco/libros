<?php
session_start();
//include_once 'includes/user.php';
include_once 'includes/user.php';
class busqueda extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->nomUser="";
        $this->view->mensaje="";  
        $this->view->datos=[];
        $this->view->notificacion=[];
        $this->view->resultado=[];
        //echo "<p>Nuevo controlador Main</p>";
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
        $Noti=$user->getNotificaciones();       
        $this->view->notificacion=$Noti;             
        $this->view->render('busqueda/index');
    }else{
        header('Location:'.constant('URL').'errores/ErrorAcceso'); 
        die();
    }    
    }
    function buscar(){
        if(isset($_POST['buscar'])){           
            $busqueda = $_POST['buscar'];
            $search =$this->model->busqueda($busqueda);  
            if($search==[]){                          
                $error ="No se encontro ninguna conincidencia";              
                $this->view->mensaje=$error;
                $this->view->resultado= $search;  
                $this->render();                
            }else{ 
             $this->view->resultado= $search;   
             $this->render(); 
           }
           }else{ 
            header('Location:'.constant('URL').'principal'); 
           }
    }
    }    
    ?>