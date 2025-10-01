<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CommissionReportController extends Controller
{
    /**
     * Commission Len Den report page dikhane ke liye.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function commission (Request $request)
    {
        // Form se aane wale filter data ko get karein
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');
        $agentUsername = $request->input('agent_username');

        // Yahan par aap filters ke आधार par database se data fetch karne ka logic likhenge.
        // Abhi ke liye hum ek empty array bhej rahe hain.
        $reports = []; 

        // View ko data ke saath return karein
        return view('admin.commes.commission-report', [
            'reports' => $reports,
            'filters' => $request->all() 
        ]);
    }
}