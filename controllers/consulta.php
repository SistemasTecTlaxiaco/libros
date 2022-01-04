<?php

class Consulta extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->usuario = [];  
        //echo "<p>Nuevo controlador Main</p>";
    }
    function render(){
        $alumnos = $this->model->get();
        $this->view->alumnos = $alumnos;
        $this->view->render('consulta/index');
    }

    function verAlumno($param =null){
        $idAlumno =$param[0];
        $alumno =$this->model->getById($idAlumno);
        session_start();
        $_SESSION['id_verAlumno'] = $alumno->matricula;
        $this->view->alumno = $alumno;
        $this->view->mensaje="";
        $this->view->render('consulta/detalle');
    
    }
    
    function actualizarAlumno(){
        session_start();
        $matricula = $_SESSION ['id_verAlumno'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];

        unset($_SESSION['$id_verAlumno']);

        if ($this->model->update(['matricula' => $matricula, 'nombre' => $nombre, 'apellido' => $apellido])) {
            //actualizar alumno exitoso
            $alumno =new Alumno();
            $alumno->matricula = $matricula;
            $alumno->nombre = $nombre;
            $alumno->apellido = $apellido;
            $this->view->alumno = $alumno;
            $this->view->mensaje="alumno actualizado correctamente";
        }else{
            //error al actualizar
            $this->view->mensaje="Error al actualizar alumno";
        }
        $this->view->render('consulta/detalle');
    }

    function BuscarNombre(){
        $alumnos=$this->model->buscardor();
        $this->view->alumnos=$alumnos;
        $this->view->render('consulta/index');

    }
     

    function eliminarAlumno($param = null){
        //mapeamos la matricula
        $matricula = $param[0];
        
        if ($this->model->delete($matricula)){
            //actualizar alumno exitoso
           $mensaje="Alumno eliminado correctamente";
           //$this->view->mensaje="alumno eliminado correctamente";
        }else{
            //error al actualizar
            $mensaje="NO se pudo elimina el Alumno correctamente";
            //$this->view->mensaje="Error al eliminar alumno";
        }
        //$this->render('consulta/detalle');
       // echo "se elimino " . $matricula;
       echo $mensaje;
    }

  /*  function correo(){
        try {
            //Server settings
            $nemail->SMTPDebug = 0;                      // Enable verbose debug output
            $nemail->isSMTP();                                            // Send using SMTP
            $nemail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
            $nemail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $nemail->Username   = 'yareperezms@gmail.com';                     // SMTP username
            $nemail->Password   = '***********';                               // SMTP password
            $nemail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $nemail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
        
            //Recipients
            $nemail->setFrom('yareperezms@gmail.com', 'Yaretzi Perez Morales');
            $nemail->addAddress($this->$alumno->email, );     // Add a recipient
        
            // Content
            $nemail->isHTML(true);                                  // Set email format to HTML
            $nemail->Subject = 'Hola la contraseña de tu usuario es:';
            $nemail->Body    = $this->$alumno->pass;;
        
            $nemail->send();
            echo 'El mensaje se envio correctamente';
        } catch (Exception $e) {
            echo "Hubo un error al enviar el mensaje: {$nemail->ErrorInfo}";
        }
    }*/
}
?>