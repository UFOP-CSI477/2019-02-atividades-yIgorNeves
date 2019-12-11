<?php

namespace App\Http\Controllers;

use App\Projeto;
use Illuminate\Http\Request;
use App\Aluno;
use App\Professor;

class ProjetoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $tccs)
    
    {  
        $tcc = Projeto::join('alunos','projetos.aluno_id','=','alunos.id')->orderBy('ano', 'DESC')->orderBy('semestre', 'DESC')->orderBy('alunos.name', 'ASC')->get('projetos.*');
      
        return view('projetos.relatoryProjects', compact('tcc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Projeto  $projeto
     * @return \Illuminate\Http\Response
     */
    public function show(Projeto $projeto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Projeto  $projeto
     * @return \Illuminate\Http\Response
     */
    public function edit(Projeto $projeto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Projeto  $projeto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Projeto $projeto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Projeto  $projeto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Projeto $projeto)
    {
        //
    }

    public function addIndex(){

        $prof = Professor::all();
        $aluno = Aluno::all();
        $tcc = Projeto::all();
        return view('projetos.incluir', compact('tcc'));
    }

    public function adicionar(){

        $prof = Professor::all();
        $aluno = Aluno::all();
        return view('projetos.adicionar', compact('prof','aluno'));
    }

    public function salvar(Request $request){
        $proj = new Projeto;
        $proj->fill($request->all());
        
        $proj->save();

        return redirect()->route('relatorio.tcc');
    }

}
