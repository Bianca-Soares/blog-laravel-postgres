<?php

namespace App\Http\Controllers;

use App\Models\Atleta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Redis;

class AtletaController extends Controller
{

    public function lista(){
        return view('home');
    }

    public function novo(){
        return view('atleta.form');
    }
    //Inserir no banco 
    public function inserir(Request $request){

        $atleta = new Atleta;
        $atleta = $atleta->create( $request->all() );

        return view('home');
        //redirect('home');
        //return view('atleta/home');
    }
}
