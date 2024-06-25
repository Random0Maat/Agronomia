var archivo = document.getElementById("archivo");//referencia al input file que contiene a la imagen
var img = document.getElementById("img");//referencia a la etiqueta img donde se proyectara la imagen subida por el usuario
var img_inicio = document.getElementById("img_inicio");

var lectura= document.getElementById("lectura");
var carga=false;

var cargador = document.getElementById("cargador");
var leer = document.getElementById("leer");
var registrar = document.getElementById("registrar");

archivo.addEventListener("change", myFile);

cargador.addEventListener("click", subir);

leer.addEventListener("click", enviar);
registrar.addEventListener("click", Actualizar);






function subir()
{
    
    archivo.click(); //funcion cual objetivo es activar el input file
        
}   

function enviar()
{
    
    //document.getElementById("formulario").submit();
    if(carga!=true) return ;

    let formData = new FormData();
    formData.append('img_inicio', img_inicio.value);
  
    

    const options={

        method: 'POST',
        body: formData,

    }
    
    let url='/api/imagen';

        fetch(url, options)
        .then(function(response) { return response.text() })
        .then(function(data) {
            
            lectura.value=data;
        
            
        })
            
            
} 

function Actualizar()
{
    
    document.getElementById("formlectura").submit();

    
   
            
        
    
            
} 



  

function myFile()  {

    
    var file    = document.querySelector('input[type=file]').files[0];
        
    var reader  = new FileReader();

    

    reader.onloadend = function () {
    
        imagen = reader.result;
                            
        img.src = imagen;
        
        var str,cad="";
        str= imagen;
        cad=str.split(',');
        img_inicio.value=cad[1];

        carga=true;


        
    }

    if (file) {
        reader.readAsDataURL(file);
        
        
    } else {
        img.src = "";
    }
    
        


}


   