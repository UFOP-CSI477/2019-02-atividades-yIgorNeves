<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Request as Requet;
use App\Subject;

class SiteController extends Controller
{
    public function index(){
        $req = Subject::all();
        return view('homepage', compact('req'));
    }
}
