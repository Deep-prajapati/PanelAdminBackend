@extends('admin.layouts.app')

@section('title', 'JME29 SETTING')

@section('content')
<div class="container-fluid pt-4">
    <div class="panel panel-primary">
        <div class="panel-header">
            <span>Diamond Casino Details</span>
            <a href="{{-- pichle page ka route --}}" class="btn btn-danger btn-sm">Back</a>
        </div>
        <div class="panel-body">
            <form class="form-inline mb-3">
                <input type="date" class="form-control mr-2" value="2025-09-22">
                <input type="date" class="form-control mr-2" value="2025-09-29">
                <button type="submit" class="btn btn-primary mr-2">Apply</button>
                <button type="button" class="btn btn-success">Today P/L</button>
            </form>
            <div class="table-responsive">
                <table class="table table-bordered">
                     <thead style="background-color:#337ab7; color:white;">
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
                        <tr>
                            <td colspan="6" class="text-center p-5">
                                <i class="fa fa-folder-open-o" style="font-size: 30px;"></i>
                                <p>No data</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection