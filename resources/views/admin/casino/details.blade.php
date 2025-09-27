@extends('admin.layouts.app')

@section('title', 'Diamond Casino Details')

@section('content')
<section class="content" style="padding-top: 20px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-info">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h3 class="card-title">Diamond Casino Details</h3>
                        <a href="{{ url()->previous() }}" class="btn btn-sm btn-primary">Back</a>
                    </div>
                    
                    <div class="card-body">
                        
                        {{-- Date Filters --}}
                        <form method="GET" action="{{ route('admin.casino.details') }}" class="form-inline mb-4">
                            <div class="form-group mr-2">
                                <input type="date" class="form-control" name="start_date" value="{{ request('start_date', '2025-09-20') }}" style="width: 130px;">
                            </div>
                            <span class="mr-2"> — </span>
                            <div class="form-group mr-3">
                                <input type="date" class="form-control" name="end_date" value="{{ request('end_date', '2025-09-27') }}" style="width: 130px;">
                            </div>
                            <button type="submit" class="btn btn-danger btn-sm mr-2">Apply</button>
                            <a href="{{ route('admin.casino.details', ['start_date' => date('Y-m-d'), 'end_date' => date('Y-m-d')]) }}" class="btn btn-info btn-sm">Today P/L</a>
                        </form>

                        {{-- Casino Details Table --}}
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>Game Id</th>
                                        <th>Type</th>
                                        <th>Exposer</th>
                                        <th>P/L</th>
                                        <th>Client P/L</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- Static Data Rows --}}
                                    <tr>
                                        <td><a href="#">2025-09-27_AAB</a></td>
                                        <td>Amar Akbar Anthony</td>
                                        <td><span class="text-danger">0.00</span></td>
                                        <td><span class="text-success">500.00</span></td>
                                        <td><span class="text-danger">-500.00</span></td>
                                        <td>
                                            <a href="#" class="btn btn-xs btn-info">View</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">2025-09-27_DT20</a></td>
                                        <td>Dragon Tiger T20</td>
                                        <td><span class="text-danger">0.00</span></td>
                                        <td><span class="text-danger">-1200.00</span></td>
                                        <td><span class="text-success">1200.00</span></td>
                                        <td>
                                            <a href="#" class="btn btn-xs btn-info">View</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">2025-09-26_LTPOD</a></td>
                                        <td>Live Teen Patti One Day</td>
                                        <td><span class="text-danger">0.00</span></td>
                                        <td><span class="text-success">250.00</span></td>
                                        <td><span class="text-danger">-250.00</span></td>
                                        <td>
                                            <a href="#" class="btn btn-xs btn-info">View</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">2025-09-26_CARD32</a></td>
                                        <td>Card 32</td>
                                        <td><span class="text-danger">0.00</span></td>
                                        <td><span class="text-danger">-800.00</span></td>
                                        <td><span class="text-success">800.00</span></td>
                                        <td>
                                            <a href="#" class="btn btn-xs btn-info">View</a>
                                        </td>
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