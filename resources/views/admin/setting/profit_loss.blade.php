@extends('admin.layouts.app')

@section('title', 'JME29 SETTING')

@section('content')
<div class="container-fluid pt-4">
    <div class="panel panel-primary">
        <div class="panel-header">
            <span>Profit Loss</span>
            <a href="{{-- pichle page ka route --}}" class="btn btn-danger btn-sm">Back</a>
        </div>
        <div class="panel-body">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <form class="form-inline">
                    <input type="date" class="form-control mr-2" value="2025-08-29">
                    <input type="date" class="form-control mr-2" value="2025-09-29">
                    <select class="form-control">
                        <option>All</option>
                    </select>
                </form>
                <h4>Total: <span class="text-success">0.00</span></h4>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead style="background-color:#337ab7; color:white;">
                        <tr>
                            <th>Date</th>
                            <th>Event Name</th>
                            <th>Debit</th>
                            <th>Credit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>27-09-2025</td><td>teen20 (28-09-2025)</td><td>0.00</td><td>0.00</td></tr>
                        <tr><td>27-09-2025</td><td>card02 (28-09-2025)</td><td>0.00</td><td>0.00</td></tr>
                        <tr><td>26-09-2025</td><td>teen20 (28-09-2025)</td><td>0.00</td><td>0.00</td></tr>
                        <tr><td>23-09-2025</td><td>lucky7eu (22-09-2025)</td><td>0.00</td><td>0.00</td></tr>
                        <tr style="background-color: #e0f7ff;"><td>23-09-2025</td><td>dt202 (22-09-2025)</td><td>0.00</td><td>0.00</td></tr>
                        <tr><td>22-09-2025</td><td>Pakistan W v South Africa W</td><td>0.00</td><td>0.00</td></tr>
                        <tr><td>21-09-2025</td><td>dt20 (20-09-2025)</td><td>0.00</td><td>0.00</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection