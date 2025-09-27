<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function agentList()
    {
        return view('admin.agent.details');
    }

    public function agentCreate()
    {
        return view('admin.agent.create');
    }

    public function agentStore(Request $request)
    {
        return redirect()->route('admin.agent.details')->with('success', 'agent created successfully!');
    }

    public function clienttList()
    {
        return view('admin.client.index');
    }
    public function createClient()
    {
        
        return view('admin.client.create');
    }

    public function storeClient(Request $request)
    {
        return redirect()->route('admin.client.list')->with('success', 'Client created successfully!');
    }

    
}