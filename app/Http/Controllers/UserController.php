<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function login(Request $request){
        
        $CPF = $request->CPF;
        $senha = $request->senha;

        $usuarios = Usuario::where('CPF', '=', $CPF)->where('senha', '=', $senha)->first();
        
        if(@$usuarios->CPF != null){
            
            @session_start();
            $_SESSION['CPF_usuario'] = $usuarios->CPF;
            $_SESSION['nome_usuario'] = $usuarios->nome;
            $_SESSION['nivel_usuario'] = $usuarios->perfil;
            
            $pagina = $_SESSION['nivel_usuario']."/painel.Index";
            return view($pagina);

          
            if($_SESSION['nivel_usuario'] == 'admin'){
                return view('painel-ADM.Index');
            }
            if($_SESSION['nivel_usuario'] == 'atleta'){
                return view('painel-Atleta.Index');
            }if($_SESSION['nivel_usuario'] == 'c.time'){
                return view('painel-C-Time.Index');
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

//Pág do formurário de usuário
    public function novo(){
        return view('usuario.form');
    }

//Inserir usuario no banco 
    public function inserir(Request $request){
        $usuario = new usuario();
        $usuario = $usuario->create( $request->all() );

        return view('Index');
    }

}
