<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    function index(){
         return view('index', ['cadena' => '<a href="https://google.es">enlace</a>']);
    }
    
    function sesion(Request $request){
        
        $incrementar = $request ->get('incrementar');
        
        $suma = 0;
        if($request->session()->exists('sumaContinua')){
            $suma = session()->get('sumaContinua');
        }
        $suma =  $suma + $incrementar;
        
        if($incrementar == 11){
            $request->session()->flash('flash', $incrementar);
        }
        
        $request->session()->put('sumaContinua' , $suma);
        return view('sesion', ['incrementar' => $incrementar, 'suma' => $suma]);
    }
}
