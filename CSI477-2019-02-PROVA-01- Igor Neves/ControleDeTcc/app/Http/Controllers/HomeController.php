<?php

namespace App\Http\Controllers;

use App\Professor;
use App\Projeto;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $professor = Professor::orderBy('area', 'ASC')->orderBy('name', 'ASC')->get();  
        return view('teste', compact('professor'));
    }

    public function sobre(){
        return view('sobre');
    }

    public function relatorios(){
        $registros = Projeto::all();
        return view('relatoryProjects',compact('registros'));
    }
}
