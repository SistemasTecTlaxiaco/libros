<?php
class SignupModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function insert($datos){
        try{
            $query = $this->db->connect()->prepare('INSERT INTO USUARIOS(NOMBRE,APELLIDOS,EMAIL,PASS,FECHA,TELEFONO,ESTADO,IMAGEN) 
            VALUES(:nombre, :apellidos, :email, :pass,:fecha,:telefono, :estado, :photo)');
            $query->execute(['nombre' => $datos['nombre'],'apellidos' => $datos['apellido'],'email' => $datos['email'], 
            'pass' => $datos['password'],'fecha' => $datos['fecha'],'telefono' => $datos['tel'],'estado' => $datos['estado'], 'photo' => $datos['photo']]);
            return true;
            }catch(PDOException $e){             
                return false;
            }            
    }
}


?>