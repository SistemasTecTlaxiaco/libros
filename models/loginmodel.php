<?php
include_once 'models/sistema.php';
class LoginModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function login($email, $password){
        // insertar datos en la BD
        error_log("login: inicio");        
            //$query = $this->db->connect()->prepare('SELECT * FROM users WHERE username = :username');
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

    public function verificaEmail($email){
        $query = $this->prepare('SELECT * FROM usuarios WHERE email = :email');
        try{
        $query->execute(['email' => $email]);
        if($query->rowCount()){
        return true;
    }else{
        false;
    }
       }catch(Exception $e){
        return false; 
       }
    }    
    public function verificaToken($token){
        $query = $this->prepare('SELECT * FROM tokens WHERE token = :token');            
        $query->execute(['token' => $token]); 
        if($query->rowCount()){
            if ($query->fetchColumn()>0) {
            return  true;  
        }else{
            return false;
        }
        return true;
        }
        else{
            return false;
        }
    }
    public function guardarToken($email,$tokenValido){
        try{
            $fecha="12/11/21";
            $query = $this->db->connect()->prepare('INSERT INTO tokens(token,email, fecha) VALUES(:token, :email, :fecha)');
            $query->execute(['token' => $tokenValido,'email' => $email, 'fecha' => $fecha]);
            return true;
            }catch(PDOException $e){             
             return false;   
    }
    }
    public function validaToken($token, $email){
        $query = $this->prepare('SELECT * FROM tokens WHERE token = :token AND  email = :email');            
        $query->execute(['token' => $token,'email' => $email]); 
        if($query->rowCount()){
            if ($query->fetchColumn()>0) {
            return  true;  
        }else{
            return false;
        }
        return true;
        }
        else{
            return false;
        }
    }

    public function insertaToken($token, $email){      
        $request=01;
        $query = $this->prepare('UPDATE usuarios SET token = :token, token_request = :re WHERE email = :email');  
    try{           
        $query->execute(['token' => $token,'re' =>  $request, 'email' =>  $email]); 
        return true;
       }catch(Exception $e){
        return false;
    }       
    }
    public function updatePass($datos){
        $query =$this->db->connect()->prepare("UPDATE usuarios SET pass = :pass  WHERE email = :email AND  token = :token");
        try {  
          $query->execute(['token' => $datos['token'], 'email' => $datos['email'],'pass' => $datos['password']]);                  
            return true;
        } catch (PDOException $e) {
            return null;
        }  
    }
    public function deleteToken($token){       
            $query=$this->db->connect()->prepare("DELETE FROM tokens WHERE token= :token");
            try{
                $query->execute([
                    'token'=>$token,
                ]);
                return true;
            }catch(PDOException $e){
             return false;
            }                   
    }
    public function cleanToken($email){
        $token="KDSODODOD3E";
        $query =$this->db->connect()->prepare("UPDATE usuarios SET token = :token  WHERE email = :email");
        $query->execute(['email' => $email, 'token' => $token]);  
    }

    public function EmailExiste($email){
        $query = $this->prepare('SELECT * FROM tokens WHERE email = :email');            
        $query->execute(['email' => $email]); 
        if($query->rowCount()){
            if ($query->fetchColumn()>0){
            return  true;  
        }else{
            return false;
           // break;
        }
        return true;
        }
        else{
            return false;
        }
    }
    public function updateToken($codigo, $email){
        try{
        $query =$this->db->connect()->prepare("UPDATE tokens SET token = :token  WHERE email = :email");
        $query->execute(['token' => $codigo, 'email' => $email]);   
        return true;
    } catch (PDOException $e){
        return null;
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