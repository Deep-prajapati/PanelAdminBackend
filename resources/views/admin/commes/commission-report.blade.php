@extends('admin.layouts.app')

@section('title', 'COMMISION REPORT')

@section('content')
<style>
    /* Custom styles to match the screenshot */
    .content-wrapper {
        padding: 20px;
        background-color: #f4f6f9; /* Page background color */
    }
    .card-header-blue {
        background-color: #1a6ab9;
        color: white;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0.75rem 1.25rem;
    }
    .card-header-blue h5 {
        margin: 0;
    }
    .btn-back {
        background-color: #007bff;
        color: white;
        border: none;
    }
    .filter-card {
        background-color: #ffffff;
        padding: 20px;
        border-radius: 5px;
        margin-bottom: 20px;
        box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);
    }
    .table-container {
        background-color: #ffffff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);
    }
    .table thead th {
        text-align: center;
        vertical-align: middle;
        background-color: #e9ecef; /* Light grey header */
    }
    .table-bordered {
        border: 1px solid #dee2e6;
    }
    .table-bordered th,
    .table-bordered td {
        border: 1px solid #dee2e6;
    }
    .no-data {
        text-align: center;
        padding: 50px 0;
        color: #888;
    }
    .no-data-icon {
        font-size: 48px;
        margin-bottom: 15px;
    }
</style>

<div class="content-wrapper">
    {{-- Page Title Bar --}}
    <div class="card-header-blue mb-4">
        <h5 class="m-0">Commission Len Den</h5>
        <a href="#" class="btn btn-sm btn-back">Back</a>
    </div>

    {{-- Filters Section --}}
    <div class="filter-card">
        <form action="" method="GET">
            <div class="row g-3 align-items-center">
                <div class="col-md-3">
                    <input type="date" class="form-control" name="start_date" placeholder="Start date">
                </div>
                <div class="col-md-3">
                    <input type="date" class="form-control" name="end_date" placeholder="End date">
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="agent_username" placeholder="Agent Username">
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary w-100">Apply</button>
                </div>
            </div>
        </form>
    </div>

    {{-- Table Section --}}
    <div class="table-container">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th colspan="6">Mila Hai</th>
                        <th colspan="4">Dena Hai</th>
                        <th colspan="1">Bacha Hai</th>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <th>M.Comm.</th>
                        <th>S.Comm.</th>
                        <th>C.Comm.</th>
                        <th>T.Comm.</th>
                        <th>Action.</th>
                        <th>M.Comm.</th>
                        <th>S.Comm.</th>
                        <th>C.Comm.</th>
                        <th>T.Comm.</th>
                        <th>Comm</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- Yahan loop chalega jab data hoga --}}
                    {{-- Agar data nahi hai toh neeche wala part dikhega --}}
                    <tr>
                        <td colspan="11">
                            <div class="no-data">
                                {{-- Aap yahan ek icon bhi daal sakte hain --}}
                                {{-- <div class="no-data-icon">📂</div> --}}
                                <p>No data</p>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection