<?php

namespace App\Http\Site\Controllers;

use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function index(){
        return view('Cadastro.cadastro');
    }
}
