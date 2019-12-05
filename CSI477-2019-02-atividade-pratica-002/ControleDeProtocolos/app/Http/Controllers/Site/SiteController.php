<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Request as Requet;

class SiteController extends Controller
{
    public function index(){
        $req = Requet::all();
        return view('homepage', compact('req'));
    }
}
