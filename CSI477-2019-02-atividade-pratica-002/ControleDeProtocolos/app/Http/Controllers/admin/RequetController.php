<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Request as Requet;

class RequetController extends Controller
{
    public function index(){
        $registros = Requet::all();
        return view('admin.requets.index', compact('registros'));
    }

    public function adicionar(){
        return view('admin.requets.adicionar');
    }

    public function salvar(Request $req){
        $dados = $req->all();
        Requet::create($dados);

        return redirect()->route('admin.requets');
    }

    public function editar($id){
        $registro = Requet::find($id);
        return view('admin.requets.adicionar', compact($registro));
    }

    public function atualizar(Request $req, $id){
        $dados = $req->all();
        Requet::find($id)->update($dados);

        return redirect()->route('admin.requets');
    }

    public function deletar($id){
        Requet::find($id)->delete();
        return redirect()->route('admin.requets');
    }
}
