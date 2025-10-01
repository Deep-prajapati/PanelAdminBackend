@extends('admin.layouts.app')

@section('title', 'JME29 SETTING')

@section('content')
<div class="container-fluid pt-4">
    <div class="panel panel-primary">
        <div class="panel-header">
            <span>List Of All Transactions (2)</span>
            <a href="{{-- pichle page ka route --}}" class="btn btn-danger btn-sm">Back</a>
        </div>
        <div class="panel-body">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <form class="form-inline">
                    <input type="date" class="form-control mr-2">
                    <input type="date" class="form-control">
                </form>
                <div>
                    <ul class="nav nav-pills">
                        <li class="nav-item"><a class="nav-link" href="#">All</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">P&L</a></li>
                        <li class="nav-item"><a class="nav-link active" href="#">Account</a></li>
                    </ul>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead style="background-color:#337ab7; color:white;">
                        <tr>
                            <th>Date</th>
                            <th>Description</th>
                            <th>CR</th>
                            <th>DR</th>
                            <th>Balance</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>15 Sep 08:08:35 PM</td>
                            <td>Coins updated to Demo agent ( A14274 ) by ADM10224</td>
                            <td>0</td>
                            <td>50000</td>
                            <td>0.00</td>
                        </tr>
                        <tr>
                            <td>15 Sep 08:08:25 PM</td>
                            <td>Coins deposit from 0 to 50000 AND Received From Jai shri ram patil (MA10742) by ADM10224-(BHAGAT JI)</td>
                            <td>50000</td>
                            <td>0</td>
                            <td>50000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <nav class="float-right">
              <ul class="pagination">
                <li class="page-item disabled"><a class="page-link" href="#">&lt;</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item disabled"><a class="page-link" href="#">&gt;</a></li>
              </ul>
            </nav>
        </div>
    </div>
</div>
@endsection