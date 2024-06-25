<?php

namespace App\Http\Controllers;

use CURLFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;


class SensorController extends Controller
{

    public function login(Request $request)
    {
        // Aquí va tu código para manejar el inicio de sesión
        $clientId = $request->input('clientId');
        $userName = $request->input('userName');
        $password = $request->input('password');


        $headers = [

            'Access-Control-Allow-Origin:*',
            'Content-type: application/json',
        
        ];
        
        $data = [
            'clientId' => $clientId,
            'userName' => $userName,
            'password' => $password,
            'cleanSession' => false,
          ];
        
        $jsonData = json_encode($data);
        
        $res=null;
        
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, "https://node02.myqtthub.com/login");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
        
        
        $res = curl_exec($ch);
        
        
        while ($res==null) {
        
          sleep(1);
        
        }
        
                
        curl_close($ch);
        
        $respuesta=null;
        
        $respuesta=json_decode($res);
        
        while ($respuesta==null) {
        
          sleep(1);
        
        }
        
        
        $tokenId=$respuesta->{'tokenId'};
        
        return $tokenId;//envio de un texto largo
        

    }

    public function mensaje(Request $request)
    {
        // Aquí va tu código para manejar el mensaje
        $tokenId = $request->input('tokenId');

        
        $headers = [

            "Access-Control-Allow-Origin:*",
            "Content-type: application/json",
            "Cookie: tokenId={$tokenId}",
            
        ];
        
        $data = [
        
        "tokenId" => "{$tokenId}",
        
        ]; 
        
        $jsonData = json_encode($data);
        
        $res="";
        
        
        
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, "https://node02.myqtthub.com/pull");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
        
        
        $res = curl_exec($ch);
        
        while ($res==="") {
        
            sleep(1);
        
        }
        
        curl_close($ch);
        
        $respuesta=[];
        
        $respuesta=json_decode($res);
        
        sleep(1);
        
        $length=count($respuesta);
        
        if ($length>0) {
        
            $aux=$respuesta[$length-1];
        
            $payload=$aux->{'payload'};
        
            return base64_decode($payload);
        
        }else{ return '0;0';}

    }

    public function logout(Request $request)
    {
        // Aquí va tu código para manejar el cierre de sesión
        $tokenId = $request->input('tokenId');


        $headers = [

        "Access-Control-Allow-Origin:*",
        "Content-type: application/json",
        "Cookie: tokenId={$tokenId}",
        
        ];

        $data = [

        "tokenId" => "{$tokenId}",
        
        ]; 

        $jsonData = json_encode($data);

        $res="";



        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://node02.myqtthub.com/logout");
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
    }  

}