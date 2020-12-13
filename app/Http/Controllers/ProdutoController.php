<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index(){
        return "Página index";
    }

    public function create(){
        # code...
        return "Página para adicionar produto";
    }

    public function show($nome, $valor){
        # code...
        return view('produto.show', ['nome'=> $nome, 'valor'=>$valor]);
       /* if($valor){
            return "O nome do produto é $nome";
        }else{
            return "O nome do produto é $nome, seu valor é $valor";
        }*/
    }
}
