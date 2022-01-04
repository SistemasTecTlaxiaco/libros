<?php
session_start();
//include_once 'includes/user.php';
include_once 'includes/user.php';
class principal extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->nomUser=""; 
        $this->view->numero=""; 
        $this->view->datos=[];
        $this->view->notificacion=[];
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
        $num= $user->getNumero();             
        $this->view->numero=$num;        
        $this->view->notificacion=$Noti;           
        $this->view->render('principal/index');    
       
    }else{
        header('Location:'.constant('URL').'errores/ErrorAcceso'); 
        die();
    }    
    }
    public function closeSession(){
        session_unset();
        session_destroy();
        header('Location:'.constant('URL').'login'); 
    }    
   function recibir($dato){ 
        $nomUser=$_SESSION['user'];
        $this->view->nomUser=$nomUser;   
        
        $this->render();
     }
    /*function usuario($dato){         
        $nomUser=$dato[0]; 
       /* foreach ($dato as $key) {
            $item=new Usuario();       
            $item->nombre=$key['nombre'];        
        $nomUser=$item->nombre;
        }*/
       // $this->view->nomUser=$nomUser;   
       // $this->render();
    //}
//}
    /*function rec($dato){
      $nomUser=$dato;
      $this->view->nomUser=$nomUser;    
      $nomUser= $user->getNombre();
      $this->view->nomUser=$nomUser;               
      $this->render(); 
    }*/
}

?>