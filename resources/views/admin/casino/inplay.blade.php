@extends('admin.layouts.app') 

@section('content')
<section class="content" style="padding-top: 20px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
<div class="card card-info">
                    <div class="card-header d-flex justify-content-between align-items-center">
        <h3 class="card-title">Match Ledger</h3>
        <div class="card-tools">
            <button type="button" onclick="history.back()" class="btn btn-sm btn-primary">Back</button>
        </div>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.casino.inplay') }}" method="GET" class="form-inline mb-3">
            <input type="date" name="start_date" class="form-control mr-2" placeholder="Start date">
            <input type="date" name="end_date" class="form-control mr-2" placeholder="End date">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Date & Time</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                {{-- Example row based on image_3ef2e3.png --}}
                <tr>
                    <td>1</td>
                    <td>AmarAkbarAnthony</td>
                    <td>27-09-2025 11:46 AM</td>
                    <td>
                        <button class="btn btn-sm btn-info">View</button>
                        <button class="btn btn-sm btn-primary">Display Games</button>
                    </td>
                </tr>
                {{-- Add @foreach loops here to display $liveGames --}}
                @if (empty($liveGames))
                <tr>
                    <td colspan="4" class="text-center">No data found</td>
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