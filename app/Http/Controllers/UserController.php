<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use Illuminate\Http\Request;
use App\Http\Controllers\Exception;

class UserController extends Controller
{

    public function login(Request $request){
        
        $listaPerfil = array('admins', 'admin', 'arbitro', 'atleta', 'com_tec', 'coord_compet', 'coord_time');
        $perfilOK = false;
        $CPF = $request->CPF;
        $senha = $request->senha;

        $usuarios = Usuario::where('CPF', '=', $CPF)->where('senha', '=', $senha)->first();
        
        if(@$usuarios->CPF != null){
            
            @session_start();
            $_SESSION['CPF_usuario'] = $usuarios->CPF;
            $_SESSION['nome_usuario'] = $usuarios->nome;
            $_SESSION['nivel_usuario'] = $usuarios->perfil;
            
            $pagina = "Index";

            foreach ($listaPerfil as &$perfil) {
                if($perfil == $_SESSION['nivel_usuario']){
                    $perfilOK = true;
                    break;
                }
                               
            }
            
            if($perfilOK){

                $pagina = $_SESSION['nivel_usuario']."/painel.index";
                return Redirect::to('index');
            }
                  
        } else {
            echo "CPF ou Senha incorreto";
            return view('Index');

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
