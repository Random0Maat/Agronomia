
function myarchivo(imagen){
          
    var file    = document.querySelector('input[type=file]').files[0];
    
    var reader  = new FileReader();
  
    reader.onloadend = function () {
  
      imagen.src= reader.result;
               
    }
  
    if (file) {
  
        reader.readAsDataURL(file); 
    
    } 
  
}

function load(){
          
    archivo.click(); //funcion cual objetivo es activar el input file
          
} 

