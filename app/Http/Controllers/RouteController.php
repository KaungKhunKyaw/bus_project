<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bus;
use App\Models\Route;

class RouteController extends Controller
{
    public function index(Bus $bus)
    {
        $route = $bus->route;
        return view('routes.index', compact('bus', 'routes'));
    }

    public function show(Route $route)
    {
        return view('routes.show', compact('route'));
    }
}
