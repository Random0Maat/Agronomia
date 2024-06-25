
var clima= document.getElementById("clima");

var actualizar = document.getElementById("actualizar");
var conexion = document.getElementById("conexion");

var token="";




  function loginMQTT(){

    let formData = new FormData();
	formData.append('clientId', 'climaWeb');
    formData.append('userName', 'climaWeb');
    formData.append('password', 'Settings5');


	const options={

		method: 'POST',
        body: formData,

	}
	
	let url='/api/sensor/login';
	
	  fetch(url, options)
	  .then(function(response) { return response.text(); })
		.then(function(data) {
			
			token=data.trim().split("\n").join("");
            conexion.textContent="Finalizar";
            actualizar.disabled = false;
			
		})
	  
  }
  
function logoutMQTT(){

	let formData = new FormData();
	formData.append('tokenId', token);
	

	const options={

		method: 'POST',
		
		 body: formData,

	}
	
	let url='/api/sensor/logout';

	if(token!=""){

		 fetch(url, options)
		 .then(function(response) { return response.text() })
		  .then(function(data) {
			
			token="";
            conexion.textContent="Iniciar";
            actualizar.disabled = true;
			
		})
			
		
	}

}


function mensajeMQTT(){	

	let formData = new FormData();
	formData.append('tokenId', token);
	

	const options={

		method: 'POST',
		
		 body: formData,

	}
	
	let url='/api/sensor/mensaje';

	if(token!=""){

		 fetch(url, options)
		 .then(function(response) { return response.text() })
		  .then(function(data) {

            let aux=data.split(";");

            let temperatura=aux[0];
            let humedad=humedadTierra=aux[1];

            //let resp1="Temperatura del terreno: "+temperatura+" C";
            let resp2="Humedad del terreno: "+humedad+" %";

            clima.textContent=resp2;

            
		})
			
		
	}

	
  }






actualizar.addEventListener("click", mensaje);
actualizar.disabled = true;

conexion.addEventListener("click", conectar);



function conectar(){

    if(token!=""){

        logoutMQTT();

    }else{

        loginMQTT();
        
    }

}





function mensaje()
{
    
    if(token!=""){

        mensajeMQTT();

    }
    
} 





  




   