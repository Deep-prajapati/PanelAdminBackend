@extends('admin.layouts.app')

@section('title', 'JME29 SETTING')

@section('content')
<style>
    /* Basic styling for the page elements */
    .content-wrapper {
        padding: 20px;
        background-color: #f4f6f9;
    }
    .action-buttons .btn {
        margin-right: 10px;
        margin-bottom: 10px;
        min-width: 150px;
    }
    .panel {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 4px;
        margin-top: 20px;
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
    .panel-header {
        background-color: #337ab7;
        color: white;
        padding: 10px 15px;
        border-bottom: 1px solid transparent;
        border-top-left-radius: 3px;
        border-top-right-radius: 3px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .panel-body {
        padding: 15px;
    }
    .table-responsive {
        overflow-x: auto;
    }
    .no-data-message {
        text-align: center;
        padding: 50px;
        color: #777;
    }
    /* Modal styles */
    .modal-dialog {
        margin-top: 10%;
    }
    .modal-header {
        background-color: #337ab7;
        color: white;
    }
</style>
<div >
<div class="content-wrapper">
    {{-- Top Action Buttons --}}
   <div class="action-buttons">
    <a href="{{ route('admin.jem29.search_user') }}" class="btn btn-primary">Search User</a>
    <a href="{{ route('admin.jem29.statements') }}" class="btn btn-primary">Statements</a>
    <a href="{{ route('admin.jem29.ac_operations') }}" class="btn btn-primary">A/c Operations</a>
    <a href="{{ route('admin.jem29.profit_loss') }}" class="btn btn-primary">Profit and Loss</a>
    <a href="{{ route('admin.jem29.casino_profit_loss') }}" class="btn btn-primary">Casino Profit&Loss</a>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#changePasswordModal">
        Change Password
    </button>
</div>

    {{-- Data Table --}}
    <div class="panel">
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="thead-dark" style="background-color: #f8f9fa;">
                        <tr>
                            <th>Title</th>
                            <th>Sport</th>
                            <th>Open Date</th>
                            <th>Declared</th>
                            <th>Won By</th>
                            <th>ProfitLoss</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="6">
                                <div class="no-data-message">
                                    <i class="fa fa-folder-open-o" style="font-size: 30px;"></i>
                                    <p>No data</p>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
{{-- Change Password Modal --}}
<div class="modal fade" id="changePasswordModal" tabindex="-1" role="dialog" aria-labelledby="changePasswordModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="changePasswordModalLabel">Change Password</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="oldPassword">Enter Old Password</label>
            <input type="password" class="form-control" id="oldPassword">
          </div>
          <div class="form-group">
            <label for="newPassword">Enter New Password</label>
            <input type="password" class="form-control" id="newPassword">
          </div>
          <div class="form-group">
            <label for="confirmPassword">Enter Confirm password</label>
            <input type="password" class="form-control" id="confirmPassword">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Return</button>
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>
@endsection