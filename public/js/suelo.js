    var archivo = document.getElementById("archivo");
    var cargar = document.getElementById("cargar");
    var identificar = document.getElementById("identificar");
    var imagen = document.getElementById("imagen");
    var contenido = document.getElementById("contenido");

    archivo.addEventListener("change", function(){myarchivo(imagen);});
	
    cargar.addEventListener("click", load);

    identificar.addEventListener("click", function(){enviar(imagen.src,contenido)});

    function enviar(imagen,contenido){

        const options={
            method: 'POST',
            headers: {
                
              "Authorization": "Token 8d2a399fdcd08e94b65a42deac9e7dcae1485e15",
              "Content-type": "application/json"
        
            },
            body: JSON.stringify({ 
              "task": "e3d92555-ca56-4677-9b7c-8f9e20d3d792", 
              "version": 1, 
              "records": [ { 
                "_base64": imagen 
              } ] 
            })
        }
        
        
        fetch('https://api.ximilar.com/recognition/v2/classify/', options)
        .then(function(response) { return response.json() })
          .then(function(data) {
            renderizar2(data,contenido);
          })
        
        
    }

    function renderizar2(datos,contenido){

        let lista=datos.records[0];
        
      
        let elemento=lista.best_label;
        
        //let prob=elemento.prob*100;
        let nombre=elemento.name;
        var src="";
      
        if(nombre==="arenoso"){
          src="./img/suelos/arenosos/arenoso.jpg";
        }else if(nombre==="arcilloso"){
          src="./img/suelos/arcillosos/arcillosos1.jpg";
        }else if(nombre==="salino"){
          src="./img/suelos/salinos/salino.jpg";
        }else if(nombre==="calizo"){
          src="./img/suelos/calizos/calizo.jpg";
        }else if(nombre==="franco"){
          src="./img/suelos/franco/franco1.jpg";
        }else if(nombre==="limoso"){
          src="./img/suelos/Limosos/limoso1.jpg";
        }
      
         //---------------imagen--------------------
         let inicioimg="<img src=";
         let finimg="  width='100px' height='100px' alt='...'>";
         let imagen=inicioimg+"'"+src+"'"+finimg;
      
         let iniciodiv="<div class='col-auto'>";
         let findiv="</div>";
         let columna=iniciodiv+imagen+findiv;
      
         let iniciodiv2="<div class='row justify-content-center align-items-center'>";
         let findiv2="</div>";
         let fila=iniciodiv2+columna+findiv2;
              
         //----------------nombre--------------------
      
         
         let columna1=iniciodiv+nombre+findiv;
      
         let fila1=iniciodiv2+columna1+findiv2;
        
      
        let resultado=fila+fila1;
      
        contenido.innerHTML =resultado;
      
      }