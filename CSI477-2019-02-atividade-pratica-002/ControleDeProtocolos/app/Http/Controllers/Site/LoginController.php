<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function index(){
        return view('Login.login');
    }

    public function entrar(Request $req){
        $dados = $req->all();

        if(Auth::attempt(['email'=> $dados['email'], 'password'=> $dados['password']])){
            return redirect()->route('admin.requets');
        }

        return redirect()->route('Login.login');
    }

    public function sair(){
        Auth::logout();
        return redirect()->route('site.home');
    }
}
