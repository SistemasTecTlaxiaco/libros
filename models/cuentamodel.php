<?php
include_once 'models/alumno.php';
include_once 'models/actividad.php';
include_once 'models/sistema.php';
    class CuentaModel extends Model{
        public function __construct() {
            parent:: __construct();
        }

    public function get(){
     $items =[];
     try {         
         $query = $this->db->connect()->query("SELECT*FROM Usuario");
         while($row = $query->fetch()){
            $item = new Usuario();
            $item->nombre=$row['nombre'];
            $item->apellido=$row['apellido'];   
            $item->email=$row['email'];         
            array_push($items, $item);
         }
        return $items;
     } catch (PDOException $e) {
         
        return [];
     }            
    }
        public function getById($id){
            $item =new Usuario();
            $query =$this->db->connect()->prepare("SELECT * FROM usuarios WHERE id = : id");
            try {
                $query->execute(['id' => $id]);
                while ($row = $query->fetch()) {
                    $item->matricula = $row ['id'];
                    $item->nombre = $row ['nombre'];
                    $item->apellido = $row ['apellido'];
                }
                return $item;
            } catch (PDOException $e) {
                return null;
            }
        }
        public function getId($email){
            $item =new Alumno();
            $query =$this->db->connect()->prepare("SELECT * FROM usuarios WHERE email = :user");
            try {  
                    $query->execute(['user' => $email]);
                    while ($row = $query->fetch()) {
                    $item->id = $row ['id'];                  
                }
                return $item;
            } catch (PDOException $e) {
                return null;
            }
        }
        public function getByEmail($name){
            $item =new Alumno();
            $query =$this->db->connect()->prepare("SELECT * FROM usuarios WHERE email = :nombre");
            try {  
                    $query->execute(['nombre' => $name]);
                    while ($row = $query->fetch()) {
                    $item->nombre = $row ['nombre'];
                    $item->apellido = $row ['apellidos'];
                    $item->correo = $row ['email'];
                    $item->fecha= $row ['fecha'];
                    $item->telefono= $row ['telefono'];
                    $item->estado = $row ['estado'];
                    $item->foto = $row ['imagen'];
                }
                return $item;
            } catch (PDOException $e) {
                return null;
            }
        }
        public function insert($datos){
            try{
                $id=$this->getId($datos['email']);
                $query = $this->db->connect()->prepare('UPDATE usuarios SET nombre = :nombre, apellidos = :apellidos, email = :email, fecha = :fecha, telefono = :telefono, estado = :estado WHERE id = :id');              
                $query->execute(['id'=>$id->id,'nombre' => $datos['nombre'],'apellidos' => $datos['apellido'],'email' => $datos['email'],'fecha' => $datos['fecha'],'telefono' => $datos['tel'],'estado' => $datos['estado']]);                
                return true;
                }catch(PDOException $e){             
                    return false;
                }            
        }
    
        public function setImagen($imagen,$id){
            $item =new Alumno();
            $query =$this->db->connect()->prepare("UPDATE usuarios SET imagen = :imagen WHERE id = :user");
            try {  
              $query->execute(['imagen' => $imagen,'user' => $id]);                  
                return true;
            } catch (PDOException $e) {
                return null;
            }

        }
        public function verificacion($email, $password){
                $query = $this->prepare('SELECT * FROM usuarios WHERE email = :email');
                $query->execute(['email' => $email]);
                if($query->rowCount()){
                $item = $query->fetch(PDO::FETCH_ASSOC);
                 if(password_verify($password, $item['pass'])){                      
                   error_log('login: success');              
                 return  true;                    
                    }
                    else{
                        return false;
                    }
                    return  true;  
                }else{
                    return false; 
                }
            }

            public function updatePass($datos){
                $item =new Alumno();
                $query =$this->db->connect()->prepare("UPDATE usuarios SET pass = :pass  WHERE email = :email");
                try {  
                  $query->execute(['email' => $datos['email'],'pass' => $datos['password']]);                  
                    return true;
                } catch (PDOException $e) {
                    return null;
                }    
            }

            public function activity($datos){
                try{
                $query = $this->db->connect()->prepare('INSERT INTO actividad(actividad, usuario) VALUES(:actividad, :usuario)');
                $query->execute(['actividad' => $datos['actividad'],'usuario' => $datos['user']]);  
                    return true;
                }catch(PDOException $e){
                    return false;
                }      
            }

            public function getDatosActividad($email){
                $acts=[];
                $query =$this->db->connect()->prepare("SELECT * FROM actividad WHERE usuario = :email");
                try {  
                        $query->execute(['email' => $email]);
                        while ($row = $query->fetch()){
                        $act =new Actividad();
                        $act->detalle = $row ['actividad'];                     
                        $act->fecha= $row ['fecha'];
                        array_push($acts,$act);
                    }
                    return $acts;
                } catch (PDOException $e) {
                    return [];
                } 
            }

            public function secret($id){
                $cli =new Sistema();
                $query =$this->db->connect()->prepare("SELECT * FROM s3 WHERE id = :id");
                try {  
                        $query->execute(['id' => $id]);
                        while ($row = $query->fetch()) {                        
                        $cli->clave = $row ['clave'];                     
                        $cli->secret= $row ['secret'];                       
                    }
                    return $cli;
                } catch (PDOException $e) {
                    return [];
                } 
            }
        
            
    }

?>