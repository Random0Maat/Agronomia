
<?php

////////////////////// mensaje ////////////////////////////

$img=$_POST["img"];

return "hola";



$headers = [

  "Access-Control-Allow-Origin:*",
  "Content-type: application/json",
  
];

$data = [

"img" => "{$img}",
 
]; 

$jsonData = json_encode($data);

$res="";



$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "/api/imagen");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);


$res = curl_exec($ch);

while ($res==="") {

  sleep(1);

}

curl_close($ch);

return $res;




?>