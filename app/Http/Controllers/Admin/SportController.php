<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class SportController extends Controller
{
    public function activeGames(Request $request)
    {
        
        return view('admin.sports.active_games');
    }

    public function finishedGames(Request $request)
    {
        return view('admin.sports.finished_games');
    }
}