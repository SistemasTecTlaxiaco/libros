<?php
include_once 'models/archivo.php';
    class  MisArchivosModel extends Model{
        public function __construct() {
            parent:: __construct();
        }

    public function get($nombre){
        $file =new Archivo();
        $query =$this->db->connect()->prepare("SELECT * FROM archivo WHERE nombre = :nombre");
        try {           
            $query->execute(['nombre' => $nombre]);
            while ($row = $query->fetch()){            
            $file->nombre = $row ['nombre'];
            $file->ruta = $row ['ruta'];
            $file->titulo= $row ['titulo'];
            $file->autor = $row ['autor'];
            $file->materia = $row ['materia'];
            $file->tipo = $row ['tipo'];
            $file->descripcion = $row ['descripcion'];
            $file->fecha= $row ['fecha'];
        }
        return $file;
         }        
      catch (PDOException $e) {
        return null;
     }            
        }
        public function getById($id){
            $item =new Usuario();
            $query =$this->db->connect()->prepare("SELECT * FROM archivo WHERE id = : id");
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
            $item =new Archivo();
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
        public function getByEmail($email){
           $files=[];
            $query =$this->db->connect()->prepare("SELECT * FROM archivo WHERE user = :email");
            try {  
                    $query->execute(['email' => $email]);
                    while ($row = $query->fetch()) {
                    $file =new Archivo();
                    $file->nombre = $row ['nombre'];
                    $file->ruta = $row ['ruta'];
                    $file->titulo= $row ['titulo'];
                    $file->autor = $row ['autor'];
                    $file->materia = $row ['materia'];
                    $file->tipo = $row ['tipo'];
                    $file->descripcion = $row ['descripcion'];
                    $file->fecha= $row ['fecha'];
                    array_push($files,$file);
                }
                return $files;
            } catch (PDOException $e) {
                return [];
            }
        }
        public function update($item){
            $query =$this->db->connect()->prepare("UPDATE archivo SET  titulo = :titulo, autor = :autor, materia = :materia, tipo = :tipo, descripcion = :descripcion WHERE nombre = :nombre");
            try{
                $query->execute([      
                    'nombre'=> $item ['nombre'],     
                    'titulo'=> $item ['titulo'],
                    'autor' => $item ['autor'],
                    'materia' => $item ['materia'],
                    'tipo' => $item ['tipo'],
                    'descripcion' => $item ['descripcion']                 
                ]);
                return true;
            }catch(PDOException $e){
                return false;
            }
        }
        public function delete($name){
            $query=$this->db->connect()->prepare("DELETE FROM archivo WHERE nombre= :nombre");
            try{
                $query->execute([
                    'nombre'=>$name,
                ]);
                return true;
            }catch(PDOException $e){
             return false;
            }
        }
        public function  UpdateFile($item){
            $query =$this->db->connect()->prepare("UPDATE archivo SET nombre = :nombre, ruta = :ruta WHERE nombre = :nombreOld");
            try{
                $query->execute([      
                    'nombre'=> $item ['nombre'],     
                    'ruta'=> $item ['ruta'],
                    'nombreOld' => $item ['nombreOld']              
                ]);
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
    
    }

?>