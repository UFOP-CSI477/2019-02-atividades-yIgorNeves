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
        return view('admin.requets.editar', compact('registro', 'sub', 'user'));
    }

    public function atualizar(Request $req, $id){
        // $sub = Subject::all();
        // $user = User::all();

        $dados = $req->all();
        $find = Requet::find($id);
        $find->fill($dados);
        $find->save();

        return redirect()->route('admin.requets');
    }

    public function deletar($id){
       
        Requet::find($id)->delete();
        return redirect()->route('admin.requets');
    }
}
