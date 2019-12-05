<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;

class PaginasController extends Controller
{
    public function index()
    {
        $subjects = Subject::orderBy('name')->get();
        return view ('homepage', [ 'subjects' => $subjects]);
    }
}
