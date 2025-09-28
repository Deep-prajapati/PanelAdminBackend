@extends('admin.layouts.app')

@section('title', 'Security Code Report')

@section('content')
<section class="content" style="padding-top: 20px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-info">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h3 class="card-title">Security Code Audit Log</h3>
                        <a href="{{ url()->previous() }}" class="btn btn-sm btn-primary">Back</a>
                    </div>
                    
                    <div class="card-body">
                        
                        {{-- Date Filters --}}
                        <form method="GET" action="{{ route('admin.reports.security_code_report') }}" class="form-inline mb-4">
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

                        {{-- Security Code Report Table (Static Demo Data) --}}
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>User</th>
                                        <th>Date & Time</th>
                                        <th>IP Address</th>
                                        <th>Action</th>
                                        <th>Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- Static Data from Controller --}}
                                    <?php
                                    $securityCodeChanges = [
                                        ['user' => 'SuperAdmin', 'datetime' => '2025-09-28 15:30:00', 'ip' => '192.168.1.50', 'action' => 'Code Generated', 'details' => 'New code generated for user DemoAgent.'],
                                        ['user' => 'MasterAdmin', 'datetime' => '2025-09-27 11:00:00', 'ip' => '192.168.1.50', 'action' => 'Code Changed', 'details' => 'Code updated for Master Account.'],
                                        ['user' => 'DemoAgent', 'datetime' => '2025-09-26 18:45:00', 'ip' => '10.0.0.1', 'action' => 'Code Used', 'details' => 'Used to confirm high-value transaction.'],
                                    ];
                                    ?>
                                    
                                    @foreach ($securityCodeChanges as $log)
                                    <tr>
                                        <td>{{ $log['user'] }}</td>
                                        <td>{{ $log['datetime'] }}</td>
                                        <td>{{ $log['ip'] }}</td>
                                        <td><span class="badge badge-info">{{ $log['action'] }}</span></td>
                                        <td>{{ $log['details'] }}</td>
                                    </tr>
                                    @endforeach

                                    @if (empty($securityCodeChanges))
                                    <tr>
                                        <td colspan="5" class="text-center">No security code audit events found for the selected period.</td>
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