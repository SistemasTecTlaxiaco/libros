function validacion(){
    if(document.getElementById("password2").value==""){
        document.getElementById("respuesta3").innerHTML="La contraseña no es valida, revisela e ingresela de nuevo por favor";                               
        document.getElementById("password2").style.backgroundColor='#FAE0E2';
        document.getElementById("password2").style.borderColor='#dc3545';            
      $bandera1=false;  
     }else {
        if(document.getElementById("password2").value!=""){
        document.getElementById("password2").style.backgroundColor='';
        document.getElementById("password2").style.borderColor='';              
        $bandera1=true;                                             
     }
    if(document.getElementById("password2").value!=document.getElementById("verificacion").value){
        document.getElementById("respuesta3").innerHTML="Las contraseñas no coinciden, reviselas e ingreselas de nuevo por favor";                               
       document.getElementById("verificacion").style.backgroundColor='#FAE0E2';
       document.getElementById("verificacion").style.borderColor='#dc3545';
       document.getElementById("verificacion").value="";                
       $bandera2=false;    
     }else 
     if(document.getElementById("password2").value==document.getElementById("verificacion").value){  
        if(document.getElementById("password2").value!=""){
            document.getElementById("password2").style.backgroundColor='';
            document.getElementById("password2").style.borderColor='';              
            $bandera1=true;                                             
         }  
   document.getElementById("verificacion").style.backgroundColor='';
   document.getElementById("verificacion").style.borderColor='';  
   document.getElementById("password2").style.backgroundColor='';
    document.getElementById("password2").style.borderColor='';      
    document.getElementById("respuesta3").innerHTML="Todo bien";                               
   $bandera2=true;                                         
   }
}
if($bandera1==true && $bandera2==true){
   // document.getElementById("password2").innerHTML="";   
    //document.getElementById("verificacion").innerHTML="";   
    return true;
}else{
return false;
}
}



