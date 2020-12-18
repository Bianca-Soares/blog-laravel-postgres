<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request){
        
        $CPF = $request->CPF;
        $senha = $request->senha;

        $usuarios = usuario::where('CPF', '=', $CPF)->where('senha', '=', $senha)->first();
        
        if(@$usuarios->CPF != null){
            @session_start();
            $_SESSION['CPF_usuario'] = $usuarios->CPF;
            $_SESSION['nome_usuario'] = $usuarios->nome;
            $_SESSION['nivel_usuario'] = $usuarios->nivel;
            
            if($_SESSION['nivel_usuario'] == 'adminS'){
                return view('painel-ADMS.Index');
            }
            if($_SESSION['nivel_usuario'] == 'admin'){
                return view('painel-ADM.Index');
            }
            if($_SESSION['nivel_usuario'] == 'atleta'){
                return view('painel-Atleta.Index');
            }if($_SESSION['nivel_usuario'] == 'c.time'){
                return view('painel-C.time.Index');
            }if($_SESSION['nivel_usuario'] == 'com.tecnica'){
                return view('painel-Com.Tecnica.Index');
            }if($_SESSION['nivel_usuario'] == 'c.competição'){
                return view('painel-C.Competição.Index');
            }if($_SESSION['nivel_usuario'] == 'Arbitro'){
                return view('painel-Arbitros.Index');
            }
        } else {
            echo "CPF ou Senha incorreto";
            return view ('Index');

        }
    }
    public function logout(){
        @session_start();
        @session_destroy();
        return view('Index');
     }
}
