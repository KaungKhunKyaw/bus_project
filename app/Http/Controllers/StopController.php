<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stop;
use App\Models\Route;

class StopController extends Controller
{
    public function index(Route $route)
    {
        $stops = $route->stops;
        return view('stops.index', compact('route', 'stops'));
    }
}
