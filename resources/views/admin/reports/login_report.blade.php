@extends('admin.layouts.app')

@section('title', 'Login Report')

@section('content')

<section class="content" style="padding-top: 20px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-info">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h3 class="card-title">User Login Report</h3>
                        <a href="{{ url()->previous() }}" class="btn btn-sm btn-primary">Back</a>
                    </div>
                    
                    <div class="card-body">
                        
                        {{-- Date Filters & Search --}}
                        <form method="GET" action="{{ route('admin.reports.login_report') }}" class="form-inline mb-4">
                            <div class="form-group mr-2">
                                <label class="mr-2">From:</label>
                                <input type="date" class="form-control form-control-sm" name="start_date" value="2025-09-20" style="width: 120px;">
                            </div>
                            <div class="form-group mr-3">
                                <label class="mr-2">To:</label>
                                <input type="date" class="form-control form-control-sm" name="end_date" value="2025-09-29" style="width: 120px;">
                            </div>
                            <button type="submit" class="btn btn-danger btn-sm mr-2">Apply Filter</button>
                        </form>

                        {{-- Login Report Table (Static Demo Data) --}}
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>Username</th>
                                        <th>Login Time</th>
                                        <th>Logout Time</th>
                                        <th>Duration</th>
                                        <th>IP Address</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- Static Data from Controller --}}
                                    <?php
                                    $loginHistory = [
                                        ['username' => 'SuperAdmin', 'login_time' => '2025-09-29 12:45:00', 'logout_time' => '2025-09-29 12:48:00', 'duration' => '3 mins', 'ip' => '192.168.1.50', 'status' => 'Success'],
                                        ['username' => 'DemoAgent', 'login_time' => '2025-09-29 10:00:00', 'logout_time' => '2025-09-29 11:30:00', 'duration' => '1 hr 30 mins', 'ip' => '203.0.113.12', 'status' => 'Success'],
                                        ['username' => 'SuperAdmin', 'login_time' => '2025-09-28 23:01:00', 'logout_time' => '2025-09-29 00:05:00', 'duration' => '1 hr 4 mins', 'ip' => '192.168.1.50', 'status' => 'Success'],
                                        ['username' => 'FailedUser', 'login_time' => '2025-09-29 09:00:00', 'logout_time' => 'N/A', 'duration' => 'N/A', 'ip' => '24.24.24.24', 'status' => 'Failed (Wrong Password)'],
                                    ];
                                    ?>
                                    
                                    @foreach ($loginHistory as $log)
                                    <tr>
                                        <td>{{ $log['username'] }}</td>
                                        <td>{{ $log['login_time'] }}</td>
                                        <td>
                                            @if ($log['logout_time'] === 'N/A')
                                                <span class="badge badge-danger">Active</span>
                                            @else
                                                {{ $log['logout_time'] }}
                                            @endif
                                        </td>
                                        <td>{{ $log['duration'] }}</td>
                                        <td>{{ $log['ip'] }}</td>
                                        <td>
                                            @if (str_contains($log['status'], 'Failed'))
                                                <span class="badge badge-warning">{{ $log['status'] }}</span>
                                            @else
                                                <span class="badge badge-success">{{ $log['status'] }}</span>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach

                                    @if (empty($loginHistory))
                                    <tr>
                                        <td colspan="6" class="text-center">No login history found for the selected period.</td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection


