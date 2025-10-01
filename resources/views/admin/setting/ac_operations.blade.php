@extends('admin.layouts.app')

@section('title', 'JME29 SETTING')

@section('content')
<div class="container-fluid pt-4">
    <div class="panel panel-primary">
        <div class="panel-header">
            <span>List Of All Transactions(8)</span>
            <a href="{{-- pichle page ka route --}}" class="btn btn-danger btn-sm">Back</a>
        </div>
        <div class="panel-body">
            <form class="form-inline mb-3">
                <input type="date" class="form-control mr-2">
                <input type="date" class="form-control">
            </form>
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead style="background-color:#337ab7; color:white;">
                        <tr>
                            <th>Date</th>
                            <th>Operation</th>
                            <th>Done By</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>15 Sep 08:10 PM</td>
                            <td>updateFlatSharePermission</td>
                            <td>(SA11474) BHAGAT JI (ADM10224)</td>
                            <td>flate Share Permission change From (true) to (undefined) by BHAGAT JI (AD..</td>
                        </tr>
                         <tr>
                            <td>15 Sep 08:10 PM</td>
                            <td>UpdatePassword</td>
                            <td>(SA11474) BHAGAT JI (ADM10224)</td>
                            <td>User password updated by BHAGAT JI (ADM10224)</td>
                        </tr>
                         <tr>
                            <td>15 Sep 08:10 PM</td>
                            <td>casinoCommission</td>
                            <td>(SA11474) BHAGAT JI (ADM10224)</td>
                            <td>User updated from Casino commission (2) to (undefined) by BHAGAT JI (AD..</td>
                        </tr>
                        {{-- Baki rows bhi isi tarah add karein --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection