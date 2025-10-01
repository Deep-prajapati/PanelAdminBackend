@extends('admin.layouts.app')

@section('title', 'JME29 SETTING')

@section('content')
<style>
    .container-fluid{
        border: 1px solid #cac8cb ;
        padding: 20px;
       
    }
    .panel-header{
        background-color: #337ab7;
        color: white;
        padding: 10px 15px;
        border-bottom: 1px solid transparent;
        border-top-left-radius: 3px;
        border-top-right-radius: 3px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }
</style>
<div class="container-fluid pt-4" >
    <div class="panel panel-primary">
        <div class="panel-header" style="">
            <span>User Search</span>
            <a href="{{-- pichle page ka route --}}" class="btn btn-danger btn-sm">Back</a>
        </div>
        <div class="panel-body">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form class="form-inline">
                        <div class="form-group mx-sm-3 mb-2">
                            <label for="userInput" class="sr-only">Enter</label>
                            <input type="text" class="form-control" id="userInput" placeholder="Enter">
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">Show</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- Is page ke liye upar diye gaye style ko apni main CSS file me daal sakte hain --}}