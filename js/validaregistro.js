function valida(){
    if(!(/^([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\']+)+[\s]*([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\'])*[\s]?([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\'])*?$/.test(document.getElementById("nombre").value)) )
    {
            if( document.getElementById("nombre").value==""){
             alert('El campo esta vacio, ingrese un dato por favor'); 
             document.getElementById("nombre").style.backgroundColor='#FAE0E2';
             document.getElementById("nombre").style.borderColor='#dc3545';
             document.getElementById("nombre").style.backgroundImage= "url('img/no.svg')";                               
             document.getElementById("nombre").style.backgroundRepeat= "no-repeat";
             document.getElementById("nombre").style.backgroundPosition= "right calc(.375em + .1875rem) center";
             $bandera=false;
             document.getElementById("nombre").focus();
            // document.getElementById("form").submit(function(){                                    
                   //  return false;
                // });
             
             //return false;                           
            }
            else{
            alert('Ingrese un nombre valido por favor');                               
            document.getElementById("nombre").style.backgroundColor='#FAE0E2';
            document.getElementById("nombre").style.borderColor='#dc3545';
            document.getElementById("nombre").style.backgroundImage= "url('img/no.svg')";                               
            document.getElementById("nombre").style.backgroundRepeat= "no-repeat";
            document.getElementById("nombre").style.backgroundPosition= "right calc(.375em + .1875rem) center";
            document.getElementById("nombre").focus().backgroundColor='#FF7C7C';                              
            //return false;
            $bandera=false;
            }
  } else if(/^([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\']+)+[\s]*([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\'])*[\s]?([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\'])*?$/.test(document.getElementById("nombre").value)){
     document.getElementById("nombre").style.backgroundColor='#CDE1E6';
     document.getElementById("nombre").style.borderColor='#198754';
     document.getElementById("nombre").style.backgroundImage= "url('img/listo.svg')";                               
     document.getElementById("nombre").style.backgroundRepeat= "no-repeat";
     document.getElementById("nombre").style.backgroundPosition= "right calc(.375em + .1875rem) center";  
    // document.getElementById("pass").style.backgroundSize= "calc(.75em + .375rem) calc(.75em + .375rem)";    
            $bandera=true;                                           
  } 
  if(!(/^([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\']+)+[\s]*([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\'])*[\s]?([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\'])*?$/.test(document.getElementById("apellido").value)) )
    {
            if( document.getElementById("apellido").value==""){
             alert('El campo esta vacio, ingrese un dato por favor'); 
             document.getElementById("apellido").style.backgroundColor='#FAE0E2';
             document.getElementById("apellido").style.borderColor='#dc3545';
             document.getElementById("apellido").style.backgroundImage= "url('img/no.svg')";                               
             document.getElementById("apellido").style.backgroundRepeat= "no-repeat";
             document.getElementById("apellido").style.backgroundPosition= "right calc(.375em + .1875rem) center";
             $bandera2=false;
             document.getElementById("apellido").focus();
            // document.getElementById("form").submit(function(){                                    
                   //  return false;
                // });
             
             //return false;                           
            }
            else{
            alert('Ingrese apellidos validos por favor');                               
            document.getElementById("apellido").style.backgroundColor='#FAE0E2';
            document.getElementById("apellido").style.borderColor='#dc3545';
            document.getElementById("apellido").style.backgroundImage= "url('img/no.svg')";                               
            document.getElementById("apellido").style.backgroundRepeat= "no-repeat";
            document.getElementById("apellido").style.backgroundPosition= "right calc(.375em + .1875rem) center";
            document.getElementById("apellido").focus().backgroundColor='#FF7C7C';                              
            //return false;
            $bandera2=false;
            }
  } else if(/^([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\']+)+[\s]*([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\'])*[\s]?([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\'])*?$/.test(document.getElementById("apellido").value)){
     document.getElementById("apellido").style.backgroundColor='#CDE1E6';
     document.getElementById("apellido").style.borderColor='#198754';
     document.getElementById("apellido").style.backgroundImage= "url('img/listo.svg')";                               
     document.getElementById("apellido").style.backgroundRepeat= "no-repeat";
     document.getElementById("apellido").style.backgroundPosition= "right calc(.375em + .1875rem) center";  
    // document.getElementById("pass").style.backgroundSize= "calc(.75em + .375rem) calc(.75em + .375rem)";    
            $bandera2=true;                                           
  } 
   if(!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(document.getElementById("correo").value)) )
    {
            if( document.getElementById("correo").value==""){
             alert('El campo esta vacio, ingrese un dato por favor'); 
             document.getElementById("correo").style.backgroundColor='#FAE0E2';
             document.getElementById("correo").style.borderColor='#dc3545';
             document.getElementById("correo").style.backgroundImage= "url('img/no.svg')";                               
             document.getElementById("correo").style.backgroundRepeat= "no-repeat";
             document.getElementById("correo").style.backgroundPosition= "right calc(.375em + .1875rem) center";
             $bandera3=false;
             document.getElementById("correo").focus();
            // document.getElementById("form").submit(function(){                                    
                   //  return false;
                // });
             
             //return false;                           
            }
            else{
            alert('El correo es invalido, no cumple con las caracteristicas basicas. Ingresela de nuevo por favor');                               
            document.getElementById("correo").style.backgroundColor='#FAE0E2';
            document.getElementById("correo").style.borderColor='#dc3545';
            document.getElementById("correo").style.backgroundImage= "url('img/no.svg')";                               
            document.getElementById("correo").style.backgroundRepeat= "no-repeat";
            document.getElementById("correo").style.backgroundPosition= "right calc(.375em + .1875rem) center";
            document.getElementById("correo").focus()                             
            //return false;
            $bandera3=false;
            }
  } else if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(document.getElementById("correo").value)){
     document.getElementById("correo").style.backgroundColor='#CDE1E6';
     document.getElementById("correo").style.borderColor='#198754';
     document.getElementById("correo").style.backgroundImage= "url('img/listo.svg')";                               
     document.getElementById("correo").style.backgroundRepeat= "no-repeat";
     document.getElementById("correo").style.backgroundPosition= "right calc(.375em + .1875rem) center";  
    // document.getElementById("pass").style.backgroundSize= "calc(.75em + .375rem) calc(.75em + .375rem)";    
            $bandera3=true;                                           
  } 
  if(document.getElementById("pass").value==""){
     alert('La contraseña no es valida, revisela e ingresela de nuevo por favor');                               
     document.getElementById("pass").style.backgroundColor='#FAE0E2';
     document.getElementById("pass").style.borderColor='#dc3545';
    // document.getElementById("pass").style.backgroundImage= "url('img/no.svg')";                               
     document.getElementById("pass").style.backgroundRepeat= "no-repeat";
     document.getElementById("pass").style.backgroundPosition= "right calc(.375em + .1875rem) center";                        
    // document.getElementById("pass").focus().backgroundColor='#FF7C7C';   
    $bandera4=false;                     

  }else {
     if(document.getElementById("pass").value!=""){
     document.getElementById("pass").style.backgroundColor='#CDE1E6';
     document.getElementById("pass").style.borderColor='#198754';
    // document.getElementById("pass").style.backgroundImage= "url(img/listo.svg')";                               
     document.getElementById("pass").style.backgroundRepeat= "no-repeat";
     document.getElementById("pass").style.backgroundPosition= "right calc(.375em + .1875rem) center"; 
     document.getElementById("pass").style.backgroundSize= "calc(.75em + .375rem) calc(.75em + .375rem)";     
     $bandera4=true;                                         
  }
  if(document.getElementById("pass").value!=document.getElementById("pass2").value){
    alert('La contraseña no es la misma, revisela e ingresela de nuevo por favor');                               
    document.getElementById("pass2").style.backgroundColor='#FAE0E2';
    document.getElementById("pass2").style.borderColor='#dc3545';
    document.getElementById("pass2").style.backgroundImage= "url('img/no.svg')";                               
    document.getElementById("pass2").style.backgroundRepeat= "no-repeat";
    document.getElementById("pass2").style.backgroundPosition= "right calc(.375em + .1875rem) center"; 
    document.getElementById("pass2").value="";
    $bandera5=false; 
  }else 
  if(document.getElementById("pass").value==document.getElementById("pass2").value){    
document.getElementById("pass2").style.backgroundColor='#CDE1E6';
document.getElementById("pass2").style.borderColor='#198754';
document.getElementById("pass2").style.backgroundImage= "url(img/listo.svg')";                               
document.getElementById("pass2").style.backgroundRepeat= "no-repeat";
document.getElementById("pass2").style.backgroundPosition= "right calc(.375em + .1875rem) center"; 
document.getElementById("pass2").style.backgroundSize= "calc(.75em + .375rem) calc(.75em + .375rem)";     
$bandera5=true;                                         
}
      if( document.getElementById("fecha").value==""){
           alert('El campo esta vacio, ingrese un dato por favor'); 
           document.getElementById("fecha").style.backgroundColor='#FAE0E2';
           document.getElementById("fecha").style.borderColor='#dc3545';
           document.getElementById("fecha").style.backgroundImage= "url('img/no.svg')";                               
           document.getElementById("fecha").style.backgroundRepeat= "no-repeat";
           document.getElementById("fecha").style.backgroundPosition= "right calc(.375em + .1875rem) center";
           $bandera6=false;
           //document.getElementById("fecha").focus();                             
          }
 else if(document.getElementById("fecha").value!=""){
   document.getElementById("fecha").style.backgroundColor='#CDE1E6';
   document.getElementById("fecha").style.borderColor='#198754';
   document.getElementById("fecha").style.backgroundImage= "url('img/listo.svg')";                               
   document.getElementById("fecha").style.backgroundRepeat= "no-repeat";
   document.getElementById("fecha").style.backgroundPosition= "right calc(.375em + .1875rem) center";  
  // document.getElementById("pass").style.backgroundSize= "calc(.75em + .375rem) calc(.75em + .375rem)";    
          $bandera6=true;                                           
} 

if(!(/^[0-9]{10}$/.test(document.getElementById("telefono").value)))
  {
          if( document.getElementById("telefono").value==""){
           alert('El campo esta vacio, ingrese un dato por favor'); 
           document.getElementById("telefono").style.backgroundColor='#FAE0E2';
           document.getElementById("telefono").style.borderColor='#dc3545';
           document.getElementById("telefono").style.backgroundImage= "url('img/no.svg')";                               
           document.getElementById("telefono").style.backgroundRepeat= "no-repeat";
           document.getElementById("telefono").style.backgroundPosition= "right calc(.375em + .1875rem) center";
           $bandera7=false;
           document.getElementById("telefono").focus();                             
          }
          else{
          alert('El telefono debe tener 10 digitos');                               
          document.getElementById("telfono").style.backgroundColor='#FAE0E2';
          document.getElementById("telefono").style.borderColor='#dc3545';
          document.getElementById("telefono").style.backgroundImage= "url('img/no.svg')";                               
          document.getElementById("telefono").style.backgroundRepeat= "no-repeat";
          document.getElementById("telefono").style.backgroundPosition= "right calc(.375em + .1875rem) center";
         // document.getElementById("telefono").focus().backgroundColor='#FF7C7C';                              
          //return false;
          $bandera7=true;
          }
} else if(/^[0-9]{10}$/.test(document.getElementById("telefono").value)){
   document.getElementById("telefono").style.backgroundColor='#CDE1E6';
   document.getElementById("telefono").style.borderColor='#198754';
   document.getElementById("telefono").style.backgroundImage= "url('img/listo.svg')";                               
   document.getElementById("telefono").style.backgroundRepeat= "no-repeat";
   document.getElementById("telefono").style.backgroundPosition= "right calc(.375em + .1875rem) center";  
  // document.getElementById("pass").style.backgroundSize= "calc(.75em + .375rem) calc(.75em + .375rem)";    
          $bandera7=true;                                           
} 
if(document.getElementById("est").value=="Selecciona alguno")
  {
         // alert('Debe selecionar algun estado');                               
          document.getElementById("est").style.backgroundColor='#FAE0E2';
          document.getElementById("est").style.borderColor='#dc3545';
          document.getElementById("est").style.backgroundImage= "url('img/no.svg')";                               
          document.getElementById("est").style.backgroundRepeat= "no-repeat";
          document.getElementById("est").style.backgroundPosition= "right calc(.375em + .1875rem) center";
        //  document.getElementById("est").focus().backgroundColor='#FF7C7C';                              
          //return false;
          $bandera8=false;
          
}else if(document.getElementById("est").value!="Selecciona alguno"){
   document.getElementById("est").style.backgroundColor='#CDE1E6';
   document.getElementById("est").style.borderColor='#198754';
   document.getElementById("est").style.backgroundImage= "url('img/listo.svg')";                               
   document.getElementById("est").style.backgroundRepeat= "no-repeat";
   document.getElementById("est").style.backgroundPosition= "right calc(.375em + .1875rem) center";  
  // document.getElementById("pass").style.backgroundSize= "calc(.75em + .375rem) calc(.75em + .375rem)";    
          $bandera8=true;                                           
} 
  if($bandera==true && $bandera2==true && $bandera3==true&& $bandera4==true && $bandera5==true&&$bandera6==true && $bandera7==true&&$bandera8==true){              
    return true;
  } else{
    bandera=false;   
    bandera2=false;   
    bandera3=false;   
    bandera4=false;   
    bandera5=false;   
    bandera6=false;
    bandera7=false;   
    bandera8=false; 
    return false;
  }                                       
 
}
            //document.getElementById("correo").style.backgroundColor='';
            //document.getElementById("correo").style.borderColor='';
            //document.getElementById("correo").style.backgroundImage= "";                               
            //document.getElementById("correo").style.backgroundRepeat= "";
            //document.getElementById("correo").style.backgroundPosition= "";                            
            //document.getElementById("pass").style.backgroundColor='';   
// return true;	            
}
