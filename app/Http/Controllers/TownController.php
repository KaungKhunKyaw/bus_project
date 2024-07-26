<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Town;
use Psy\CodeCleaner\FunctionReturnInWriteContextPass;

class TownController extends Controller
{
    public function index()
    {
        $towns = Town::all();
        return view('towns.index', compact('towns'));
    }

    public function show(Town $town)
    {
        return view('towns.show', compact('town'));
    }  
}
