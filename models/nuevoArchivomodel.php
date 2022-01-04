<?php
include_once 'models/notificacion.php';
include_once 'models/sistema.php';
class NuevoArchivoModel extends Model{

    public function __construct(){
        parent::__construct();
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

    public function subir($datos){
        try{
            $query = $this->db->connect()->prepare('INSERT INTO ARCHIVO(NOMBRE,RUTA,TITULO,AUTOR,MATERIA,TIPO,DESCRIPCION,USER) 
            VALUES(:nombre, :ruta, :titulo, :autor, :materia,:tipo,:descripcion, :user)');
            $query->execute(['nombre' => $datos['nombre'],'ruta' => $datos['ruta'],'titulo' => $datos['titulo'], 
            'autor' => $datos['autor'],'materia' => $datos['materia'],'tipo' => $datos['tipo'],'descripcion' => $datos['descripcion'],'user' => $datos['user']]);  
                return true;
            }catch(PDOException $e){
                return false;
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

    public function notificaciones($datos){
        try{
       $query = $this->db->connect()->prepare('INSERT INTO notificaciones(usuario, tipo, leido, fecha, enlace) VALUES(:usuario, :tipo, :leido, :fecha, :enlace)');
        $query->execute(['usuario' => $datos['user'],'tipo' => $datos['tipo'],'leido' => $datos['leido'],'fecha' => $datos['fecha'],'enlace' => $datos['enlace']]);  
            return true;
        }catch(PDOException $e){
            return false;
        }      
    }

    public function getNotificaciones(){     
        $query =$this->db->connect()->prepare("SELECT * FROM notificaciones WHERE leido = :valor");
        try {  
            $notificaciones=[];
            $valor=0;
                $query->execute(['valor' => $valor]);
                while ($row = $query->fetch()) {
                    $not =new Notificacion();
                    $not->idnoti = $row ['id_noti'];
                    $not->usuario = $row ['usuario'];
                    $not->tipo= $row ['tipo'];                    
                    $not->fecha= $row ['fecha'];
                    $not->enlace= $row ['enlace'];
                    array_push($notificaciones,$not);
                }
                return $notificaciones;
            } catch (PDOException $e) {
                return [];
            }
    }
    public function getNumero(){
        $sql = $this->db->connect()->prepare("SELECT COUNT(*) FROM notificaciones");      
        $sql->execute(); 
        $count = $sql->fetchColumn();        
        return $count;
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