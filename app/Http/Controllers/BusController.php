<?php

namespace App\Http\Controllers;
use App\Models\Bus;

use Illuminate\Http\Request;

class BusController extends Controller
{
    public function index()
    {
        $buses = Bus::all();
        return view('buses.index', compact('buses'));
    }

    public function show(Bus $bus)
    {
        return view('buses.show', compact('bus'));
    }
}
