<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    
    public function loginReport(Request $request)
    {
        $loginHistory = [
            [
                'username' => 'SuperAdmin',
                'login_time' => '2025-09-29 12:45:00',
                'logout_time' => '2025-09-29 12:48:00',
                'duration' => '3 mins',
                'ip' => '192.168.1.50',
                'status' => 'Success',
            ],
            [
                'username' => 'DemoAgent',
                'login_time' => '2025-09-29 10:00:00',
                'logout_time' => '2025-09-29 11:30:00',
                'duration' => '1 hr 30 mins',
                'ip' => '203.0.113.12',
                'status' => 'Success',
            ],
            [
                'username' => 'SuperAdmin',
                'login_time' => '2025-09-28 23:01:00',
                'logout_time' => '2025-09-29 00:05:00',
                'duration' => '1 hr 4 mins',
                'ip' => '192.168.1.50',
                'status' => 'Success',
            ],
            [
                'username' => 'FailedUser',
                'login_time' => '2025-09-29 09:00:00',
                'logout_time' => 'N/A',
                'duration' => 'N/A',
                'ip' => '24.24.24.24',
                'status' => 'Failed (Wrong Password)',
            ],
        ];

        return view('admin.reports.login_report', compact('loginHistory'));
    }

    /**
     * Display the Security Code Report (Audit Log for Code Changes).
     */
    public function securityCodeReport(Request $request)
    {
        $securityCodeChanges = [
            [
                'user' => 'SuperAdmin',
                'datetime' => '2025-09-28 15:30:00',
                'ip' => '192.168.1.50',
                'action' => 'Security Code Generated',
                'details' => 'New code generated for user DemoAgent.',
            ],
            [
                'user' => 'SuperAdmin',
                'datetime' => '2025-09-27 11:00:00',
                'ip' => '192.168.1.50',
                'action' => 'Security Code Changed',
                'details' => 'Code updated for Master Account.',
            ],
            [
                'user' => 'DemoAgent',
                'datetime' => '2025-09-26 18:45:00',
                'ip' => '10.0.0.1',
                'action' => 'Security Code Used',
                'details' => 'Used to confirm high-value transaction.',
            ],
        ];

        return view('admin.reports.security_code_report', compact('securityCodeChanges'));
    }
}