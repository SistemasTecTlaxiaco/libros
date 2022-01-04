<?php
session_start();
include_once 'includes/user.php';
class MisArchivos extends Controller{
    function __construct(){
        parent::__construct();
       $this->view->mensaje="";
       $this->view->nomUser=""; 
       $this->view->alerta="";
       $this->view->alerta2="";
       $this->view->numero="";
       $this->view->datos=[];
       $this->view->archivo=[];  
       $this->view->archivos=[];  
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
        $datos=$this->model->getByEmail($nomUser);
        $this->view->archivos=$datos;    
        $Noti=$user->getNotificaciones();  
        $num= $user->getNumero(); 
        $this->view->numero=$num;      
        $this->view->notificacion=$Noti; 
        $this->view->render('mis_archivos/index');
        }
        else{
            header('Location:'.constant('URL').'errores/ErrorAcceso'); 
            die();
        }
    }
   function Datos($item =null){
    $name=$item[0];
    $nomUser=$_SESSION['user'];
    $user= new user();
    $user->setUser($nomUser);
    $nom=$user->getNombre(); 
    $this->view->nomUser=$nom;  
    $itemDatos=$user->getPhoto($nomUser);    
    $datosA=$this->model->get($name);
    $this->view->datos=$itemDatos;  
    $this->view->archivo=$datosA;
    $alerta2='<div class="alert alert-primary alert-dismissible align-items-center d-flex fade show" role="alert">   
    <div>
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-info-fill flex-shrink-0 me-2" width="24" height="24" viewBox="0 0 16 16" role="img" aria-label="Info:"> <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
    </svg>  
    Si decides actualizar tu archivo esta se remplazará, por ende, se eliminará de la plataforma y no podrás recuperarla (asegurate de tener una copia en tu disco local) <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>        
      </div>';
    $this->view->alerta2=$alerta2;
    $this->view->render('mis_archivos/actualizacion'); 
}
function eliminar($param = null){  
    $nombre = $param[0];    
    if ($this->model->delete($nombre)){ 
        $name=$_SESSION['user'];
        $id=$this->model->getId($name); 
        $rutaA='uploads/files/'.$id->id.'/'.$nombre;
        unlink($rutaA); 
        $actividad="Elimino el archivo: ".$nombre;
            $this->model->activity(['actividad'=>$actividad, 'user'=>$name]);         
       $this->view->mensaje='<div class="alert alert-success alert-dismissible align-items-center d-flex fade show" role="alert">  
       <div>
         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Success:">
         <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
       </svg>  
       El archivo se elimino con exito<tab><tab><tab> &nbsp <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>        
         </div>';
       header('Location:'.constant('URL').'misArchivos'); 
            die();
    }else{        
       
        $this->view->mensaje='<div class="alert alert-danger alert-dismissible align-items-center d-flex fade show" role="alert">  
        <div>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
          <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </svg>  
        &nbsp Ocurrio algun error, el archivo no puede ser eliminado. &nbsp</div><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>     
          </div>';
    }
    $this->render('mis_archivos/index');
}
function updateA(){
  $name=$_SESSION['user'];
  if(isset($_POST['nombre']) && isset($_POST['titulo']) && isset($_POST['autor']) && isset($_POST['materia']) && isset($_POST['tipo'])){
    $nombre=$_POST['nombre'];
    $titulo= $_POST['titulo'];
    $autor= $_POST['autor'];
    $materia= $_POST['materia']; 
    $tipoA= $_POST['tipo']; 
    $descripcion= $_POST['descripcion'];     
      if($this->model->update(['nombre'=>$nombre,'titulo'=>$titulo,'autor'=> $autor,'materia' =>$materia,'tipo'=>$tipoA,'descripcion'=>$descripcion])){
        $actividad="Actualizo los datos del archivo: ".$nombre;
        $this->model->activity(['actividad'=>$actividad, 'user'=>$name]);
        header('Location:'.constant('URL').'misArchivos');   
      }else{
        $nom=[];
        array_push($nom,$nombre); 
      $alert='<div class="alert alert-danger alert-dismissible align-items-center d-flex fade show" role="alert">  
      <div>
     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
     <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
     </svg>  
    Alguno de los datos es erroneo o sobrepasa el limite de caracteres, verifiquelos por favor e intente nuevamente </div> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>        
     </div> ';       
      $this->view->alerta=$alert;        
      $this->datos($nom);  
      }      
  }else{
    $alert='<div class="alert alert-danger alert-dismissible align-items-center d-flex fade show" role="alert">  
      <div>
     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
     <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
     </svg>  
    Tiene que rellenar todos los campos </div> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>        
     </div> ';  
     $nom=[];
     array_push($nom,$nombre);  
     $this->view->alerta=$alert;        
     $this->datos($nom);  
  }
}
 public function updateArchivo()
{
  if(isset($_POST['nombre']) && isset($_POST['ruta'])){
    $nombrefileOld=$_POST['nombre'];
    $rutafileOld=$_POST['ruta'];
          $nombre=$_FILES['archivo']['name'];
          $tipo=$_FILES['archivo']['type'];
          $tamano=$_FILES['archivo']['size'];
          $rutatemp=$_FILES['archivo']['tmp_name']; 
          $user=$_SESSION['user']; 
          $id=$this->model->getId($user);  
          $destino=$_SERVER['DOCUMENT_ROOT'].'/sistema2'.'/MiTTE_'.'/'.'uploads/file/'.$id->id.'/';
          if($nombre==null){
            $alert='<div class="alert alert-danger alert-dismissible align-items-center d-flex fade show" role="alert">  
      <div>
     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
     <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
     </svg>  
    Seleccione un archivo por favor</div> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>        
     </div> ';  
     $nom=[];
     array_push($nom,$nombre);  
     $this->view->alerta2=$alert;        
     $this->error($nom); 
 
          }
          else
          if($tamano>0 && $tamano<=2099879){
            if($tipo=="application/pdf"||$tipo=="application/vnd.openxmlformats-officedocument.wordprocessingml.document"||$tipo=="application/vnd.openxmlformats-officedocument.presentationml.presentation"){
          move_uploaded_file($rutatemp,$destino.$nombre);          
          $ruta='/uploads/file/'.$id->id.'/'.$nombre;  
        if($this->model->UpdateFile(['nombre'=>$nombre,'ruta'=>$ruta,'nombreOld'=>$nombrefileOld])){
          if($nombrefileOld!=$nombre){
          unlink( $rutafileOld); 
        }
            $alert='<div class="alert alert-success align-items-start d-flex fade show" role="alert">  
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Success:">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </svg>  
            Tu archivo se subio con exito<tab><tab><tab> &nbsp <button type="button" class="btn-close align-items-end" data-bs-dismiss="alert" aria-label="Close"></button></div>        
              </div>'; 
            $this->view->alerta2=$alert;             
            header('Location:'.constant('URL').'misArchivos');            
        }else{
            $alert='<div class="alert alert-danger align-items-center d-flex fade show" role="alert">  
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
              <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </svg>  
            &nbsp A ocurrido algun error inesperado, Verifique que su archivo no este dañado o cambiele el nombre a una mas corta. &nbsp <tab><tab><tab> &nbsp</div><button type="button" class="btn-close align-items-end" data-bs-dismiss="alert" aria-label="Close"></button>     
              </div>';           
            $this->view->alerta2=$alert;  
        }
    }
        else{
            $alert='<div class="alert alert-danger align-items-center d-flex fade show" role="alert">  
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
              <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </svg>  
            &nbsp El formato del es incompatible o no aceptado, intente subir otro tipo de archivo &nbsp <tab><tab><tab> &nbsp</div><button type="button" class="btn-close align-items-end" data-bs-dismiss="alert" aria-label="Close"></button>     
              </div>';           
            $this->view->alerta2=$alert;  
        }
        } else{
            $alert='<div class="alert alert-danger align-items-center d-flex fade show" role="alert">  
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
              <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </svg>  
            &nbsp El tamaño del archivo es demasiado grande, tiene que ser menor a 2mb, intenta nuevamente por favor. &nbsp <tab><tab><tab> &nbsp</div><button type="button" class="btn-close align-items-end" data-bs-dismiss="alert" aria-label="Close"></button>     
              </div>';           
            $this->view->alerta2=$alert;  
        } 
        $nom=[];
        array_push($nom,$nombre);  
        $this->error($nom); 

}else{
  $alert='<div class="alert alert-danger alert-dismissible align-items-center d-flex fade show" role="alert">  
      <div>
     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
     <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
     </svg>  
    No se ha encontrado la ruta ni el nombre del archivo</div> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>        
     </div> ';  
     $nom=[];
     array_push($nom,$nombre);  
     $this->view->alerta2=$alert;        
     $this->error($nom); 

}
}
function error($item =null){
  $name=$item[0];
  $nomUser=$_SESSION['user'];
  $user= new user();
  $user->setUser($nomUser);
  $nom=$user->getNombre(); 
  $this->view->nomUser=$nom;  
  $itemDatos=$user->getPhoto($nomUser);    
  $datosA=$this->model->get($name);
  $this->view->datos=$itemDatos;  
  $this->view->archivo=$datosA;  
  $this->view->render('mis_archivos/actualizacion'); 
}
}
?>