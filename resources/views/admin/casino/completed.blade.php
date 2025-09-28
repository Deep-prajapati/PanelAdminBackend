@extends('admin.layouts.app') 

@section('content')
<section class="content" style="padding-top: 20px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
<div class="card card-info">
                    <div class="card-header d-flex justify-content-between align-items-center">
        <h3 class="card-title">Casino PandL Detail</h3>
        <div class="card-tools">
            <button type="button" onclick="history.back()" class="btn btn-sm btn-primary">Back</button>
        </div>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.casino.completed') }}" method="GET" class="form-inline mb-3">
            <input type="date" name="start_date" class="form-control mr-2" value="2025-09-27">
            <input type="date" name="end_date" class="form-control mr-2" value="2025-09-27">
            <button type="submit" class="btn btn-danger">Apply</button>
        </form>

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Event Name</th>
                    <th>Date & Time</th>
                    <th>P/L</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                {{-- Total Row --}}
                <tr class="font-weight-bold">
                    <td>Total</td>
                    <td></td>
                    <td class="text-danger">0.00</td>
                    <td></td>
                </tr>
                {{-- Example row based on image_3efe40.png --}}
                <tr>
                    <td>2025-09-26</td>
                    <td>2025-09-26</td>
                    <td class="text-success">0.00</td>
                    <td>
                        <button class="btn btn-sm btn-info">plusminus2</button>
                        <button class="btn btn-sm btn-primary">Display Games</button>
                    </td>
                </tr>
                {{-- Add @foreach loops here to display $completedGames --}}
                @if (empty($completedGames))
                <tr>
                    <td colspan="4" class="text-center">No data</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
  </div>
        </div>
    </div>
</section>
@endsection