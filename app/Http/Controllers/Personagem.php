<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personagens;

class Personagem extends Controller
{
    function view(){
        return view('cadastrar-personagem');
    }
    function salvarPersonagem(Request $dados){
        // codigo para salvar no BD
        $personagem = new Personagens();
        $personagem = $dados->all();
        $personagem->save();
    }

    function listarPersonagem(){
        return view('listar-personagem');
    }
}
