const boton2= document.querySelectorAll(".enviar2");
boton2.forEach(btn=>{
    btn.addEventListener("click",function(){   
     const confirm=true;
     let form=new FormData(document.forms.form2);   
     const $dato=document.getElementById("codigo").value; 
     if($dato==""){
         $dato=document.getElementById("codigo").placeholder="ingrese un dato por favor";   
     }
     if(confirm){
       //solicitud AJAX
       httpRequest("http://localhost/sistema2/MiTTE_/login/validacionToken/", function(){
           document.querySelector(".respuesta2").innerHTML=this.responseText;            
           if(this.responseText=="Tu token es correcto, da clic en siguiente para proceder a cambiar tu contraseña"){
            document.querySelector(".siguiente2").removeAttribute("disabled");
         } 
           document.querySelectorAll(".enviar2").value="";       
       },form);
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

