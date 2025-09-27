@extends('admin.layouts.app')

@section('title', 'Active Games')

@section('content')
<section class="content" style="padding-top: 20px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-info">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h3 class="card-title">Sport Details</h3>
                        <a href="{{ url()->previous() }}" class="btn btn-sm btn-primary">Back</a>
                    </div>
                    
                    <div class="card-body">
                        
                        {{-- Date Filters --}}
                        <form method="GET" action="#" class="form-inline mb-4">
                            <div class="form-group mr-2">
                                <input type="date" class="form-control" name="start_date" style="width: 130px;" placeholder="Start date">
                            </div>
                            <span class="mr-2"> → </span>
                            <div class="form-group mr-3">
                                <input type="date" class="form-control" name="end_date" style="width: 130px;" placeholder="End date">
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Filter</button>
                        </form>

                        {{-- Active Games Table --}}
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>Code</th>
                                        <th>Name</th>
                                        <th>Setting</th>
                                        <th>Time</th>
                                        <th>Competition</th>
                                        <th>Status</th>
                                        <th>Declare</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- Static data example for Active Games --}}
                                    <tr>
                                        <td>CR001</td>
                                        <td><a href="#">India v Pakistan</a></td>
                                        <td><a href="#" class="btn btn-xs btn-warning">View Settings</a></td>
                                        <td>28-09-2025 10:00 AM</td>
                                        <td>T20 World Cup</td>
                                        <td><span class="badge badge-success">In-Play</span></td>
                                        <td><button class="btn btn-xs btn-info">Declare</button></td>
                                    </tr>
                                    <tr>
                                        <td>FB005</td>
                                        <td><a href="#">Real Madrid v Barcelona</a></td>
                                        <td><a href="#" class="btn btn-xs btn-warning">View Settings</a></td>
                                        <td>28-09-2025 02:00 PM</td>
                                        <td>League Match</td>
                                        <td><span class="badge badge-info">Open</span></td>
                                        <td><button class="btn btn-xs btn-info">Declare</button></td>
                                    </tr>
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