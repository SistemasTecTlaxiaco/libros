<?php
include_once 'models/archivo.php';
    class  SistemaModel extends Model{
        public function __construct() {
            parent:: __construct();
        }

    public function get(){
     $files =[];
     try {         
         $query = $this->db->connect()->query("SELECT*FROM archivo");
         while($row = $query->fetch()){
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
            $item =new Archivo();
            $query =$this->db->connect()->prepare("SELECT * FROM archivo WHERE email = :user");
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
            $query =$this->db->connect()->prepare("UPDATE alumnos SET nombre = :nombre, apellido = :apellido WHERE matricula = :matricula");
            try{
                $query->execute([
                    'matricula' => $item['matricula'],
                    'nombre' => $item['nombre'],
                    'apellido' => $item['apellido']
                ]);
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
    }

?>