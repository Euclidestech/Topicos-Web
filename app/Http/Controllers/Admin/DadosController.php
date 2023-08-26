<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DadosController extends Controller
{
    public function ExibirDados(){
        $nome = "Euclides Cardoso";
        $endereco = ['Rua: 22','Bairro: Santos Dumont','Cidade: Pirapora-MG'];

        return view('dados',compact('nome','endereco'));
    }
}
