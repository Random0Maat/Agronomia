var bclima = document.getElementById("bclima");

var climalocal = document.getElementById("climalocal");
bclima.addEventListener("click", function(){consultarClima(climalocal)});

function consultarClima(contenido){

	let url='https://www.meteosource.com/api/v1/free/point?place_id=santa-cruz-de-la-sierra&sections=all&timezone=UTC&language=en&units=metric&key=ke8wk89sd1ubmw8p4ft6u35qwigiy2k0i14g0u6e';

     fetch(url)
    .then(function(response) { return response.json() })
      .then(function(data) {
        renderizarclima(data,contenido);
      })
     
  }

 function renderizarclima(datos,contenido){
    
    let lista=datos.daily.data;
        
    var listaColumnas="";

    lista.forEach(element => {

    let fecha=element.day;
    let icono=element.icon;
    let temperatura=element.all_day.temperature;


    let inicioimg="<img src=";
    let finimg="  width='100px' height='100px' alt='...'>";
 

    let auximg=inicioimg+"'/weather_icons/set01/big/"+icono+".png'"+finimg;

    let iniciodivcol="<div class='col'>";
    let iniciodiv="<div class='container'>";
    let iniciodivrow="<div class='row'>";
    let findiv="</div>";
    
    let auxrow=iniciodivrow+auximg+findiv;
    let auxrow2=iniciodivrow+fecha+findiv;
    let auxrow3=iniciodivrow+temperatura+findiv;

    let auxcontainer=iniciodiv+auxrow2+auxrow+auxrow3+findiv;

    let auxcol=iniciodivcol+auxcontainer+findiv;

    listaColumnas+=auxcol;
    
        
    });

    contenido.innerHTML =listaColumnas;

}