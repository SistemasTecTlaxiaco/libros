<?php
include_once 'controllers/principal.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
class Login extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->alerta=""; 
        $this->view->alerta2="";  
       $this->view->mensaje="";      
    }
    function render(){
        $this->view->render('login/index');
    }    
    function authenticate(){
    include_once 'includes/user.php';
      $userSession = new UserSession();
      $user = new User();
if(isset($_POST['email']) && isset($_POST['password'])){
 $correoForm = $_POST['email'];
 $contraseñaForm = $_POST['password'];
 if($this->model->login($correoForm, $contraseñaForm)){
  $user->setUser($correoForm); 
  $home= new principal();
  $nomUser= $user->getNombre();
  $userSession->setCurrentUser($correoForm, $nomUser);    
 header('Location:'.constant('URL').'principal'); 
 }else{  
  $alert='d-flex d-lg-block';
  $errorLogin ="El correo electronico y/o password es incorrecto"; 
  $this->view->alerta=$alert;
  $this->view->mensaje=$errorLogin;
  $this->render();
}
}else{ 
    include_once 'views/login/index.php';
}
}
   public function recupera(){ 
    if(isset($_SESSION['temp'])){
        session_unset(); 
       }  
       session_destroy();      
       $mensaje="";     
     if(isset($_POST['email2'])){  
         if(!empty($_POST['email2'])){
         $email = filter_var($_POST['email2'], FILTER_SANITIZE_EMAIL);
         if($this->model->verificaEmail($email)){      
         $tokenValido="";
         $tokenExiste;
         $contador = 1;
         while($contador<=9){
         $token= $this->obtenToken(7);
         $tokenExiste=$this->model->verificaToken($token);
         if($tokenExiste!=true){
         $tokenValido=$token;
         break;
         }
        }
        if($tokenValido!=""){
         if($this->model->EmailExiste($email)){
         $this->model->updateToken($tokenValido, $email);
         $this->enviarEmail($email,$tokenValido);  
         session_start();
         $_SESSION['temp']=$email;
         echo "Te acabamos de enviar un nuevo código de verificación a tu correo electrónico, el anterior ya no será util (esta tiene una vigencia de 48hr)";     
        }else
        if($this->model->guardarToken($email,$tokenValido)){
         $this->enviarEmail($email,$tokenValido);  
         session_start();         
         $_SESSION['temp']=$email;
            echo "Te acabamos de enviar el código de verificación a tu correo electrónico (esta tiene una vigencia de 48hr)";
          }
        }else{
            $mensaje="ocurrio un problema con el sistema vuelva a intentarlo";
            session_unset();          
            session_destroy();            
         }
         }else{
            $mensaje="El email no esta registrado";
         }
         }else{
            $mensaje="El campo esta vacio, por favor ingrese su email";
         }
    }else{
          $mensaje="El campo no esta definido, verifiquelo nuevamente";
   }
   echo $mensaje;  
   }
  
function obtenToken($longitud){
    //crear alfabeto
    $mayus = "ABCDEFGHIJKMNPQRSTUVWXYZ";
    $mayusculas = str_split($mayus);
    $numeros = range(0,9);  
    shuffle($mayusculas);
    shuffle($numeros);   
    $arregloTotal = array_merge($mayusculas,$numeros);
    $newToken = "";    
    for($i=0;$i<=$longitud;$i++) {
            $miCar = $this->obtenCaracterAleatorio($arregloTotal);
            $newToken .= $this->obtenCaracterMd5($miCar);
    }
    return $newToken;
   }
   function obtenCaracterAleatorio($arreglo){
    $clave_aleatoria = array_rand($arreglo, 1);	//obtén clave aleatoria
    return $arreglo[ $clave_aleatoria ];	//devolver ítem aleatorio
    }

    function obtenCaracterMd5($car) {
        $md5Car = md5($car.Time());	//Codificar el carácter y el tiempo POSIX (timestamp) en md5
        $arrCar = str_split(strtoupper($md5Car));	//Convertir a array el md5
        $carToken = $this->obtenCaracterAleatorio($arrCar);	//obtén un ítem aleatoriamente
        return $carToken;
    }

          function enviarEmail($correo, $password){
            if(isset($correo)&& isset($password)){               
                $email=$correo; 
                $ids=40; 
                $datos=$this->model->secret($ids);    
                $mail= new PHPMailer(true);
                try{
                    $mail->SMTPDebug=0;
                    $mail->isSMTP();
                    $mail->Host='smtp.live.com';
                    $mail->SMTPAuth=true;
                    $mail->Username=$datos->clave;
                    $mail->Password=$datos->secret;
                    $mail->SMTPSecure='tls';
                    $mail->Port=587;
        
                    //recipients
                    $mail->setFrom($datos->clave,'Equipo de cuentas MiTTE');
                    $mail->addAddress($email,'Mailer');            
                    
                    //content            
                    $mail->isHTML(true);
                    $mail->Subject='Codigo de seguridad para la recuperaci'.'&oacute;'.'n de tu contrase'.'&ntilde;'.'a';            
                    $mail->Body ='
                    <table cellpadding=0 cellspacing=0 border=0 align=center width=600 style=border-collapse:collapse;margin:0 auto;width:600px>
       <tr>
           <td>
        <table id=m_8766280796423157920header_sec cellpadding=0 cellspacing=0 align=center border=0 width=100% style=border-collapse:collapse;margin:0 auto;min-width:100%>
            <tbody><tr>
            <td>
            <div id=m_8766280796423157920header_section><table width=100% cellpadding=0 cellspacing=0 border=0>
            <tbody>
            <tr>
            <td valign=top style=vertical-align:top;background-color:#212529>
            <table cellpadding=0 cellspacing=0 align=center border=0 width=600 style=border-collapse:collapse;margin:0 auto;width:600px>
            <tbody>
            <tr>
            <td height=15 style=line-height:1px;font-size:1px>&nbsp;</td>
            </tr>
            <tr>
            <td style=text-align:center;vertical-align:top><a href=https://sistemamitte.herokuapp.com/login target="_blank"> <img alt=equipo MiTTE src=https://lh3.googleusercontent.com/EuJSeUVaCz3p-n5O91N9Z9gZO8eE13iQ6xKwPc1CRG40wrSsD_P1mYyu86CucMxCGl8yOuGfrILncnXVs0AbxKAW4mXkcERKswzriwa-U0IQtge2iE8edAWWpZRQlLlyC46rFwAY=w240 style=outline-style:none;border-style:none width=100 border=0> </a></td>
            </tr>
            <tr>
            <td height=15 style=line-height:1px;font-size:1px>&nbsp;</td>
            </tr>
            </tbody>
            </table>
            </td>
            </tr>
            </tbody>
            </table></div>
            </td>
            </tr>
            </tbody></table>
           </td>
       </tr> 
    </tbody>
    <tbody>
        <tr>
        <td height=25 style=line-height:1px;font-size:1px>&nbsp;
        </td>
        </tr>
        <tr>
            <td style=font-size:16px;font-family:Helvetica,Arial,sans-serif;color:#333333;line-height:24px>
                 <div>
                <div style=text-align:center>
                    <span style=color:#333333;font-family:Helvetica,Arial,sans-serif;font-size:25px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;text-align:center;text-indent:0px;text-transform:none;white-space:normal;word-spacing:0px;background-color:#ffffff;text-decoration-style:initial;text-decoration-color:initial;display:inline!important;float:none>
                        Hola estimado usuario, esperemos estés teniendo un excelente día, a nombre del equipo MiTTE.
                    </span>
                </div>
                </div>
                <div>
                    <br>
                </div>
                <div>
                    <div>
                        Utiliza el siguiente código de seguridad para poder actualizar tu contraseña:
                    </div>
                </div>  
                <div>
                    <h1 style=font-size:45px;>'.$password.'
                        
                    </h1>
                </div>               
                <div>
                    <div>
                     Recuerda no compartirla con nadie.
                    </div>
                </div>
                <div>
                    <br>
                </div>
                <div>
                <div>
                    Advertencia: Si no reconoces el siguiente correo electrónico: '.$email.', por favor ignora este mensaje, alguna persona pudo haber ingresado tu correo electrónico por error, recuerda que el robo de identidades esta penado por la ley.
                </div>
                </div>
                <div>
                    <br>
                </div>
                <div>
                    <strong>
                    Si alguien intento acceder a tu cuenta sin permiso, responde este correo electronico para poder ayudarte.
                    </strong>
                </div>
                <div>
                    <br>
                </div>
                <div>
                    <div>
                        Por tu atención, gracias
                    </div>
                </div>  
                <div style=color:#555555>
                 <div style=background-color:transparent;color:#2672ec;>
                    Equipo de cuentas MiTTE
                 </div>
                </div>                
            </td>                      
        </tr>
    </tbody>
    </table>';
        
                    $mail->send();
                    //echo 'Mensaje enviado correctamente';
                }catch(Exception $e){
                    echo 'A ocurrido un error al enviarte el email. Error:'.$mail->ErrorInfo;
                }
        
        
                }else{
                  echo 'Tu email no es valido';
                    return;
                }
        
          }
    public function validacionToken(){
        try{
        $mensaje="";
        $email=$_SESSION['temp'];                      
        if(isset($_SESSION['cod'])){
            session_unset();            
        }   
       // session_destroy(); 
        if(isset($email)){
        if(isset($_POST['codigo'])){
        if(!empty($_POST['codigo'])){
         $codigo= filter_var($_POST['codigo'], FILTER_SANITIZE_STRING);
         if($this->model->validaToken($codigo,$email)){        
         if($this->model->insertaToken($codigo, $email)){
        session_destroy();
        session_start();
        $_SESSION['temp']=$email;
        $_SESSION['cod']=$codigo;
          $mensaje= "Tu token es correcto, da clic en siguiente para proceder a cambiar tu contraseña";         
        }
         }else{
            $mensaje="el codigo de seguridad no es valido";   
        }         
         } else{
            $mensaje="el campo esta vacio, por favor rellenelo";   
        }
        }else{
            $mensaje="No ha ingresado ningun dato al sistema";   
        } 
        }else{
            $mensaje="No podra cambiar su contraseña ya que se ha saltado el primer paso, aunque usted ingrese un token valido esta no sera tomada en cuenta";   
            session_unset();          
            session_destroy();
            echo $mensaje;
            exit;
        }        
        echo $mensaje;
    }catch(Exception $e){
        echo 'Vuelve a cargar la pagina por favor';
    }
    }  
    public function CambiaPass(){
        $mensaje="";
        //session_start();
        if(isset($_SESSION['temp'])){
        if(isset($_SESSION['cod'])){
         if(isset($_POST['password2']) && isset($_POST['verificacion'])){
         if(!empty($_POST['password2'])){
                $pass= filter_var( $_POST['password2'],FILTER_SANITIZE_STRING);
                $email=$_SESSION['temp'];
                $token=$_SESSION['cod'];
                session_unset();                
                session_destroy();
                $password=password_hash($pass,PASSWORD_DEFAULT,array("cost"=>10));
                if($this->model->updatePass(['token'=>$token, 'email'=> $email, 'password'=> $password])){
                    $this->model->deleteToken($token);
                    $this->model->cleanToken($email);
                    $mensaje=   ' <div class="alert alert-success alert-dismissible  align-items-start d-"flex fade show" role="alert">  
                    <div>
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Success:">
                      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                    </svg>  
                    Su contraseña ha sido cambiada<tab><tab><tab> &nbsp <button type="button" class="btn-close " data-bs-dismiss="alert" aria-label="Close"></button></div>        
                      </div>';                 
                    $this->view->alerta2= $mensaje;                
                    $this->view->render('login/index');
                    exit;
                }else{
                    $mensaje='<div class="alert alert-danger alert-dismissible  align-items-center d-flex fade show" role="alert">  
                    <div>
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                      <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </svg>  
                    &nbsp No se ha podido actualizar su contraseña por un problema con el token </div><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>     
                      </div>'; 
                    $this->view->alerta2= $mensaje;                
                    $this->view->render('login/index');
                    exit;
                }
            }else{
                $mensaje='<div class="alert alert-danger alert-dismissible  align-items-center d-flex fade show" role="alert">  
                    <div>
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                      <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </svg>  
                    &nbsp El campo password esta vacio</div><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>     
                      </div>';
                $this->view->alerta2= $mensaje;                
                $this->view->render('login/index');
                exit;           
             }   
         }else{
            $mensaje='<div class="alert alert-danger alert-dismissible  align-items-center d-flex fade show" role="alert">  
                    <div>
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                      <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </svg>  
                    &nbsp El campo password no esta definido </div><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>     
                      </div>';   
            $this->view->alerta2= $mensaje;                
            $this->view->render('login/index');
            exit;          
         }
         }else{
            $mensaje="No podra cambiar su contraseña, el token no ha sido verificado ";
            session_unset($_SESSION['temp']);            
            session_destroy();
            echo $mensaje;
            header('Location:'.constant('URL').'login');   
            exit;  
         }
        }else{
            $mensaje='<div class="alert alert-danger alert-dismissible  align-items-center d-flex fade show" role="alert">  
                    <div>
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                      <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </svg>  
                    &nbsp No podra cambiar su contraseña ya que se ha saltado el primer paso </div><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>     
                      </div>';            
            session_destroy();            
            $this->view->alerta2= $mensaje;                
            $this->view->render('login/index');
            exit;  
        }
        echo $mensaje;
    }    
}
?>