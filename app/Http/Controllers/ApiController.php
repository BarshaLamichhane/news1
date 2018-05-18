<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;

class ApiController extends Controller
{


    public function SaveQuery(Request $request){

    }
    public function all(Request $request){
    
       $client=new \GuzzleHttp\Client();
       $res=$client->request('GET', 'http://api.openweathermap.org/data/2.5/find?q='.$request->input('city').'&units=metric&appid=68fa573f555aea658bd7c7f5557857a0');
       return $res->getBody();
    }
}
