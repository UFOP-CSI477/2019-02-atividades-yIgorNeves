<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function create(){
        return view('cadastro');
    }

    public function store(Request $request){
        $user = new User;
        $user->fill($request->all());
        $user->type =1;
        
        $user->fill(['password'=>Hash::make($request->newPassword)])->save();
        $user->save();

        return redirect()->route('site.login');
    }
 
}
