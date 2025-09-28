<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CasinoController extends Controller
{
    public function details(Request $request)
    {
        return view('admin.casino.details');
    }

    public function inplay()
    {
        $liveGames = []; 

        return view('admin.casino.inplay', compact('liveGames'));
    }
    public function completed()
    {
        $completedGames = []; 
        return view('admin.casino.completed', compact('completedGames'));
    }
    
}