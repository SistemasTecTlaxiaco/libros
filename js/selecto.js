const botones= document.querySelectorAll(".enviar");
botones.forEach(boton=>{
    boton.addEventListener("click",function(){   
     var confirm=true;
     let form=new FormData(document.forms.form1);
     var $datos=document.getElementById("email2").value; 
     document.querySelector(".respuesta").innerHTML= 'Espere un momento <br><div class="progress"> <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div></div>';
     if($datos==""){
        document.querySelector(".respuesta").innerHTML= "No ha ingresado ningun dato";  
         $datos=document.getElementById("email2").placeholder="ingrese un dato por favor";
       var confirm=false;        
     }     
     if(confirm){
                //solicitud AJAX       
       httpRequest("http://localhost/sistema2/MiTTE_/login/recupera/", function(){
           document.querySelector(".respuesta").innerHTML=this.responseText; 
           if(this.responseText=="Te acabamos de enviar el código de verificación a tu correo electrónico (esta tiene una vigencia de 48hr)" || this.responseText=="Te acabamos de enviar un nuevo código de verificación a tu correo electrónico, el anterior ya no será util (esta tiene una vigencia de 48hr)"){
           document.querySelector(".siguiente").removeAttribute("disabled");
        } 
           document.querySelectorAll(".enviar").value="";       
       }, form);
     }
    });
});
function httpRequest(url, callback, form){   
    const http=new XMLHttpRequest();    
    http.open("POST",url);
    http.send(form);
    http.onreadystatechange=function(){
        if(this.readyState==4 && this.status==200){
            callback.apply(http);
        }
    }
}

