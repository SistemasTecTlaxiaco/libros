<?php
//include_once 'models/consultamodel.php';
class Inicio extends Controller{

    function __construct(){
        parent::__construct();
     
        //echo "<p>Nuevo controlador Main</p>";
    }
    function render(){
        $this->view->render('inicio/index');
    }
    
    function login(){
    $userSession = new UserSession();
      $user = new User();
     if(isset($_SESSION['user'])){
    //echo "Hay sesion";
    $user->setUser($userSession->getCurrentUser());
    include_once '/views/inicio/home.php';
     }else if(isset($_POST['correo']) && isset($_POST['contraseña'])){
 // echo "validacion de login";
 $correoForm = $_POST['correo'];
 $contraseñaForm = $_POST['contraseña'];

 if($user->userExists($correoForm, $contraseñaForm)){
  // echo "usuario validado";
  $userSession->setCurrentUser($correoForm);
  $user->setUser($correoForm);
   
   include_once 'views/inicio/home.php';
 }else{
  // echo "nombre de usuario y/o password incorrecto";
 $errorLogin = "Nombre de usuario y/o password incorrecto";
 include_once 'views/inicio/index.php';
}
}else{
  //  echo "login";
    include_once 'views/inicio/index.php';
}
$this->view->render('consulta/index.php');
    }

    
}
?>