<?php
include_once 'models/archivo.php';
class  busquedamodel extends Model{
    public function __construct() {
        parent:: __construct();
    }
public function busqueda($dato){
    $items=[];  
    $dato= "%".$dato."%"; 
    $query=$this->db->connect()->prepare("SELECT * FROM archivo WHERE titulo LIKE :dato OR autor LIKE :dato2 OR materia LIKE :dato3 OR tipo LIKE :dato4 OR nombre LIKE :dato5 LIMIT 10");
    try{
        $query->execute(['dato'=>$dato,'dato2'=>$dato,'dato3'=>$dato,'dato4'=>$dato, 'dato5'=>$dato]);  
        while($row=$query->fetch()){
            $file=new Archivo();
            $file->nombre = $row ['nombre'];
            $file->ruta = $row ['ruta'];
            $file->titulo= $row ['titulo'];
            $file->autor = $row ['autor'];
            $file->materia = $row ['materia'];
            $file->tipo = $row ['tipo'];
            $file->descripcion = $row ['descripcion'];
            $file->fecha= $row ['fecha'];
            array_push($items,$file);
        }
        return $items;
    }catch(PDOException $e){
     return [];
    }
}
}
?>