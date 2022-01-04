  function valida(){
                        
                       if(!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(document.getElementById("correo").value)) )
                       {
                               if( document.getElementById("correo").value==""){
                                alert('El campo esta vacio, ingrese un dato por favor'); 
                                document.getElementById("correo").style.backgroundColor='#FAE0E2';
                                document.getElementById("correo").style.borderColor='#dc3545';
                                document.getElementById("correo").style.backgroundImage= "url('img/no.svg')";                               
                                document.getElementById("correo").style.backgroundRepeat= "no-repeat";
                                document.getElementById("correo").style.backgroundPosition= "right calc(.375em + .1875rem) center";
                                $bandera=false;
                                document.getElementById("correo").focus()
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
                               document.getElementById("correo").focus().backgroundColor='#FF7C7C';                              
                               //return false;
                               $bandera=false;
                               }
                     } else if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(document.getElementById("correo").value)){
                        document.getElementById("correo").style.backgroundColor='#CDE1E6';
                        document.getElementById("correo").style.borderColor='#198754';
                        document.getElementById("correo").style.backgroundImage= "url('img/listo.svg')";                               
                        document.getElementById("correo").style.backgroundRepeat= "no-repeat";
                        document.getElementById("correo").style.backgroundPosition= "right calc(.375em + .1875rem) center";  
                       // document.getElementById("pass").style.backgroundSize= "calc(.75em + .375rem) calc(.75em + .375rem)";    
                               $bandera=true;                                           
                     } 
                     if(document.getElementById("pass").value==""){
                        alert('La contraseña no es valida, revisela e ingresela de nuevo por favor');                               
                        document.getElementById("pass").style.backgroundColor='#FAE0E2';
                        document.getElementById("pass").style.borderColor='#dc3545';
                        document.getElementById("pass").style.backgroundImage= "url('img/no.svg')";                               
                        document.getElementById("pass").style.backgroundRepeat= "no-repeat";
                        document.getElementById("pass").style.backgroundPosition= "right calc(.375em + .1875rem) center";                        
                       // document.getElementById("pass").focus().backgroundColor='#FF7C7C';   
                       $bandera2=false;                     

                     }else {
                             if(!(document.getElementById("pass").value=="")){
                        document.getElementById("pass").style.backgroundColor='#CDE1E6';
                        document.getElementById("pass").style.borderColor='#198754';
                        document.getElementById("pass").style.backgroundImage= "url(img/listo.svg')";                               
                        document.getElementById("pass").style.backgroundRepeat= "no-repeat";
                        document.getElementById("pass").style.backgroundPosition= "right calc(.375em + .1875rem) center"; 
                        document.getElementById("pass").style.backgroundSize= "calc(.75em + .375rem) calc(.75em + .375rem)";     
                        $bandera2=true;                                         
                     }
                     if($bandera=true&&$bandera2==true){
                             return true;
                     } else if($bandera==false&&$bandera2==true||$bandera==true&&$bandera2==false){
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
