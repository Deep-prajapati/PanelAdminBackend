@extends('admin.layouts.app')

@section('title', 'Create Client')

@section('content')
<style>
    .required-label::after {
        content: ' *';
        color: red;
    }
    /* Style for the select upline box */
    .select-upline-box {
        background-color: #f8f9fa; /* Light background for separation */
        border: 1px solid #dee2e6;
        padding: 15px;
        margin-bottom: 20px;
        border-radius: 5px;
    }
</style>
<section class="content" style="padding-top: 20px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                
                {{-- Select Upline Box --}}
                <div class="select-upline-box">
                    <h5>Select Upline</h5>
                    <div class="form-group">
                        <select class="form-control" id="uplineAgent" name="upline_agent">
                            <option value="">A14274 - Demo agent</option>
                            {{-- Add dynamic options for available Agents here --}}
                        </select>
                    </div>
                </div>
                
                <div class="card card-info">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h3 class="card-title">Create Client</h3>
                        <a href="{{ url()->previous() }}" class="btn btn-sm btn-primary">Back</a>
                    </div>
                    <form action="{{ route('admin.client.store') }}" method="POST" class="form-horizontal">
                        @csrf
                        <div class="card-body">
                            
                            <div class="form-group row">
                                <label for="name" class="col-sm-3 col-form-label required-label">Name:</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter full name">
                                </div>
                                <label for="reference" class="col-sm-3 col-form-label required-label">Reference:</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="reference" name="reference" placeholder="Enter reference">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="myCoins" class="col-sm-3 col-form-label required-label">My Coins:</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="myCoins" name="my_coins" placeholder="0.00">
                                </div>
                                <label for="coins" class="col-sm-3 col-form-label required-label">Coins:</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="coins" name="coins" placeholder="client coins">
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="password" class="col-sm-3 col-form-label required-label">Password:</label>
                                <div class="col-sm-3">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                </div>
                            </div>
                            
                            <hr>
                            
                            <h5 class="mb-3">Client Match Share And Commission</h5>
                            
                            <div class="form-group row">
                                <label for="myCommType" class="col-sm-3 col-form-label required-label">My Comm Type:</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="myCommType" name="my_comm_type" placeholder="BetBuyBet">
                                </div>
                                <label for="commType" class="col-sm-3 col-form-label required-label">Comm Type:</label>
                                <div class="col-sm-3">
                                    <select class="form-control" id="commType" name="comm_type">
                                        <option value="">Commission Type</option>
                                    </select>
                                </div>
                            </div>
                            
                            <hr>

                            <h5 class="mb-3">Client Casino Share And Commission</h5>
                            
                            <div class="form-group row">
                                <label for="myCasinoComm" class="col-sm-3 col-form-label required-label">My Casino Comm (%):</label>
                                <div class="col-sm-3">
                                    <input type="number" class="form-control" id="myCasinoComm" name="my_casino_comm" placeholder="2">
                                </div>
                                <label for="casinoCommPercent" class="col-sm-3 col-form-label required-label">Casino Comm (%):</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="casinoCommPercent" name="casino_comm_percent" placeholder="casino commission">
                                </div>
                            </div>
                            
                            <hr>
                            
                            <h5 class="mb-3">Client Matka Share</h5>
                            
                            <div class="form-group row align-items-center">
                                <label for="matkaToggleSwitch" class="col-sm-3 col-form-label">Matka Share Enable:</label>
                                <div class="col-sm-3">
                                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                        <input type="checkbox" name="matka_share_enabled" class="custom-control-input" id="matkaToggleSwitch">
                                        <label class="custom-control-label" for="matkaToggleSwitch"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="myMatkaCommission" class="col-sm-3 col-form-label">My Matka Commission:</label>
                                <div class="col-sm-3">
                                    <input type="number" class="form-control" id="myMatkaCommission" name="my_matka_commission" placeholder="0">
                                </div>
                                <label for="matkaCommissionPercent" class="col-sm-3 col-form-label required-label">Matka Commission %:</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="matkaCommissionPercent" name="matka_commission_percent" placeholder="Matka Commission">
                                </div>
                            </div>

                        </div>
                        <div class="card-footer d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection