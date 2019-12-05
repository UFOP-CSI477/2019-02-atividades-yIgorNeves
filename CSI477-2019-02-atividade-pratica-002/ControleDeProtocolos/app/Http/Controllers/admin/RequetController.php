<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Request as Requet;
use App\Subject;
use App\User;

class RequetController extends Controller
{
    public function index(){
        $registros = Requet::all();
        return view('admin.requets.index', compact('registros'));
    }

    public function adicionar(){

        $sub = Subject::all();
        $user = User::all();
        return view('admin.requets.adicionar', compact('sub','user'));
    }

    public function salvar(Request $req){
        $dados = $req->all();
        $sub = Subject::all();
        $user = User::all();
        //d($dados);
        Requet::create($dados);

        return redirect()->route('admin.requets');
    }

    public function editar($id){
        $sub = Subject::all();
        $user = User::all();

        $registro = Requet::find($id);
        return view('admin.requets.adicionar', compact($registro));
    }

    public function atualizar(Request $req, $id){
        $sub = Subject::all();
        $user = User::all();

        $dados = $req->all();
        Requet::find($id)->update($dados);

        return redirect()->route('admin.requets');
    }

    public function deletar($id){
        $sub = Subject::all();
        $user = User::all();
        Requet::find($id)->delete();
        return redirect()->route('admin.requets');
    }
}
