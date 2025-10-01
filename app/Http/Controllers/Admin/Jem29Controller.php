<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Controllers\Controller;

class Jem29Controller extends Controller
{
    // Main JEM29 Settings Page
    public function settings(): View
    {
        return view('admin.setting.jem29_settings'); // Updated view path
    }

    // Search User Page
    public function searchUser(): View
    {
        return view('admin.setting.search_user');
    }

    // Statements Page
    public function statements(): View
    {
        return view('admin.setting.statements');
    }
    
    // A/c Operations Page
    public function acOperations(): View
    {
        return view('admin.setting.ac_operations');
    }

    // Profit & Loss Page
    public function profitLoss(): View
    {
        return view('admin.setting.profit_loss');
    }

    // Casino Profit & Loss Page
    public function casinoProfitLoss(): View
    {
        return view('admin.setting.casino_profit_loss');
    }
}