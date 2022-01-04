<?php
session_start();
include_once 'includes/user.php';
require('composer/vendor/autoload.php'); 
use Aws\S3\S3Client; 
use Aws\Exception\AwsException; 
class Cuenta extends Controller{
    function __construct(){
        parent::__construct();
       $this->view->mensaje="";
       $this->view->nomUser=""; 
       $this->view->alerta="";
       $this->view->alerta2="";
       $this->view->numero="";
       $this->view->datos=[];
       $this->view->activity=[];
       $this->view->notificacion=[];
    }
    function render(){
        if(isset($_SESSION['user'])){ 
        $nomUser=$_SESSION['user']; 
        $user= new user();
        $user->setUser($nomUser);
        $nom=$user->getNombre();   
        $name=$_SESSION['user'];     
        $itemDatos=$this->model->getByEmail($name);
        $this->view->datos=$itemDatos;  
        $this->view->nomUser=$nom; 
        $actividades=$this->model->getDatosActividad($name);
        $this->view->activity=$actividades; 
        $Noti=$user->getNotificaciones();  
        $num= $user->getNumero();              
        $this->view->numero=$num;        
        $this->view->notificacion=$Noti; 
        $this->view->render('cuenta/index');
    }else{
        header('Location:'.constant('URL').'errores/ErrorAcceso');       
    }
    }
   function Datos(){
    $name=$_SESSION['user'];
    $itemDatos=$this->model->getByEmail($name);
    $this->view->datos=$itemDatos;    
    $this->view->render('cuenta/actualizacion'); 
}
function upload(){ 
    $nomUser=$_SESSION['user'];     
    $id=$this->model->getId($nomUser); 
    $id=101;
    $cli=$this->model->secret($id); 
    $S3Options = 
    [
        'version' => 'latest',
        'region'  => 'us-east-2',
        'credentials' => 
        [
            'key' => $cli->clave,
            'secret' => $cli->secret
        ],
        'scheme' => 'http'
    ];   
    $s3 = new S3Client($S3Options); 
    if(isset($_FILES['archivo']))
    {
      $nombre=$_FILES['archivo']['name'];
      $tipo=$_FILES['archivo']['type'];
      $tamano=$_FILES['archivo']['size'];
      $rutatemp=$_FILES['archivo']['tmp_name'];   
     if($tamano>0 && $tamano<=2099879){
          if($tipo=="image/jpeg"||$tipo=="image/jpg"||$tipo=="image/png"||$tipo=="image/gif"){                    
     $uploadObject = $s3->putObject(
		[
			'Bucket' => 'mitte-img',
			'Key' => $_FILES['archivo']['name'],
			'SourceFile' => $_FILES['archivo']['tmp_name']
		]);  
       $url = $s3->getObjectUrl('mitte-img', $nombre);        
     if($this->model->setImagen($url,$id->id)){  
        $actividad="Actualizo su imagen de perfil: ".$nombre;
        $this->model->activity(['actividad'=>$actividad, 'user'=>$nomUser]);   
        header('Location:'.constant('URL').'cuenta');        
        die();   
      }

    } else{
        $alert='<div class="alert alert-danger alert-dismissible align-items-center d-flex fade show" role="alert">  
        <div>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
          <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </svg>  
        &nbsp El formato de la imagen es incompatible o no aceptado, intente subir otra imagen con otro formato</div><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>     
          </div>';           
        $this->view->alerta=$alert;  
    }
    } else{
        $alert='<div class="alert alert-danger alert-dismissible align-items-center d-flex fade show" role="alert">  
        <div>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
          <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </svg>  
        &nbsp El tamaño de la imagen es demasiado grande, tiene que ser menor a 2mb, intenta nuevamente por favor.</div><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>     
          </div>';           
        $this->view->alerta=$alert;  
    } 
} else{
    $alert='<div class="alert alert-danger alert-dismissible align-items-center d-flex fade show" role="alert">  
    <div>
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
      <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
    </svg>  
    &nbsp No ha seleccionado una imagen.</div><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>     
      </div>';           
    $this->view->alerta=$alert;  
}  
    $this->render();  
}

function update(){
    if(isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['email']) && isset($_POST['fecha']) && isset($_POST['telefono']) && isset($_POST['estado'])){
        $nombre= $_POST['nombre'];
        $apellido= $_POST['apellido'];
        $email= $_POST['email'];     
        $fecha= $_POST['fecha'];
        $tel= $_POST['telefono'];   
        $est= $_POST['estado'];
        if($this->model->insert(['nombre'=>$nombre, 'apellido'=>$apellido, 'email'=> $email,'fecha'=>$fecha,'tel'=>$tel,'estado'=>$est])){
            $actividad="Actualizo sus datos de perfil";
            $this->model->activity(['actividad'=>$actividad, 'user'=>$email]);
            header('Location:'.constant('URL').'cuenta');   
        }else{
        $alert='<div class="alert alert-danger alert-dismissible align-items-center d-flex fade show" role="alert">  
        <div>
       <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
       <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
       </svg>  
      Alguno de sus datos es erroneo, verifiquelos por favor e intente nuevamente </div> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>        
       </div> ';       
        $this->view->alerta=$alert;        
        $this->datos();  
        }      
    }else{
        $this->view->render('cuenta/actualizacion');
    }
}

function updatePassword(){
    if(isset($_POST['password'])){
        $passwordOld = $_POST['password'];
        $passwordNew = $_POST['password2'];
        $email=$_SESSION['user'];
        $pass_encrypt=password_hash($passwordNew,PASSWORD_DEFAULT,array("cost"=>10));
        if( $passwordOld==  $passwordNew){
            $alert='  <div class="alert alert-danger alert-dismissible align-items-center d-flex fade show" role="alert">  
            <div>
           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
           <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
           </svg>  
            No puede repetir la misma contraseña (en los campos password actual y password nuevo), intente con otra contraseña por favor</div> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>        
           </div> ';       
            $this->view->alerta2=$alert; 
            $this->datos();  
        }else if($this->model->verificacion($email, $passwordOld)){
        if($this->model->updatePass(['email'=> $email,'password'=>$pass_encrypt])){
            $actividad="Actualizo la contraseña de su cuenta";
            $this->model->activity(['actividad'=>$actividad, 'user'=>$email]);
            $alert='<div class="alert alert-success align-items-center alert-dismissible d-flex fade show" role="alert">  
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Success:">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </svg>  
           La contraseña se actualizo correctamente &nbsp</div><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>        
              </div>';       
            $this->view->alerta2=$alert;     
            header('Location:'.constant('URL').'cuenta');   
        }else{
        $alert='  <div class="alert alert-danger alert-dismissible align-items-center d-flex fade show" role="alert">  
        <div>
       <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
       <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
       </svg>  
        Ocurio algun error, intente nuevamente </div> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>        
       </div> ';       
        $this->view->alerta2=$alert;        
        $this->datos();  
        }      
    }else{
        $alert='  <div class="alert alert-danger  alert-dismissible align-items-center d-flex fade show" role="alert">  
        <div>
       <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
       <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
       </svg>  
        La contraseña (actual) que ingreso no es correcta, verifiquela y vuleva a intentarlo</div> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>        
       </div> ';       
        $this->view->alerta2=$alert;        
        $this->datos();  
    }
}else{
    $this->datos();  
}

}
}
?>