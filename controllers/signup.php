<?php
class Signup extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->alerta="";  
        $this->view->mensaje=""; 
        //echo "<p>Nuevo controlador Main</p>";
    }
    function render(){
        $this->view->render('signup/index');
    }
    function registrar(){
        if(isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['fecha']) && isset($_POST['telefono']) && isset($_POST['estado'])){
        $nombre= $_POST['nombre'];
        $apellido= $_POST['apellido'];
        $email= $_POST['email'];
        $pass= $_POST['password'];  
        $fecha= $_POST['fecha'];
        $tel= $_POST['telefono'];   
        $est= $_POST['estado']; 
        $photo= '/uploads/oso.png';      
        $pass_encrypt=password_hash($pass,PASSWORD_DEFAULT,array("cost"=>10));
        $mensaje="";
        if($this->model->insert(['nombre'=>$nombre, 'apellido'=>$apellido, 'email'=> $email,'password' =>$pass_encrypt,
        'fecha'=>$fecha,'tel'=>$tel,'estado'=>$est,'photo'=>$photo])){
            header('Location:'.constant('URL').'login');   
        }else{
        $alert='d-flex d-lg-block';
        $errorLogin ="El correo electronico ya se encuentra registrado. Por favor ingrese otro correo electronico o acceda al sistema mediante el login"; 
        $this->view->alerta=$alert;
        $this->view->mensaje=$errorLogin;
        $this->render();
        }      
    }else{
        $this->view->render('signup/index');
    }
   
}
}
?>