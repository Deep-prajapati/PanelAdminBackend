@extends('admin.layouts.app')

@section('title', 'Agent Details')

@section('content')
<section class="content" style="padding-top: 20px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-info">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h3 class="card-title">Client Details</h3>
                        <div>
                            {{-- This button would link to the 'Create Agent' page --}}
                            <a href="{{ route('admin.client.create') }}" class="btn btn-sm btn-primary">
                                <i class="fas fa-plus"></i> &nbsp; Create
                            </a>
                            <a href="#" class="btn btn-sm btn-primary">
                                Update Limit
                            </a>
                            <a href="#" class="btn btn-sm btn-primary">
                                Back
                            </a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th style="width: 10px;">
                                       #
                                    </th>
                                    <th style="width: 10px;">
                                        <button class="btn btn-xs btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-caret-down"></i>
                                        </button>
                                        
                                    </th>
                                    <th>Code</th>
                                    <th><i class="fas fa-search" style="opacity: 0.6;"></i> Name</th>
                                    <th><i class="fas fa-search" style="opacity: 0.6;"></i> Superagent</th>
                                    <th>D.O.J</th>
                                    <th>Share %</th>
                                    <th>PWD</th>
                                    <th>Master Comm %</th>
                                    <th>C.Chip</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <button class="btn btn-xs btn-default" data-toggle="modal" data-target="#modal-partnership" style="padding: 2px 5px; cursor: pointer;">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </td>
                                    <td>
                                        {{-- Dropdown for individual agent actions --}}
                                        <div class="dropdown">
                                            <button class="btn btn-xs btn-default dropdown-toggle" type="button" id="agentAction1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding: 2px 5px;">
                                                <i class="fas fa-caret-down"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="agentAction1">
                                                <a class="dropdown-item" href="#">Deposit</a>
                                                <a class="dropdown-item" href="#">Withdrawn</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Inactive</a>
                                                <a class="dropdown-item" href="#">Block Betting</a>
                                                <a class="dropdown-item" href="#">Block Casino</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Statement</a>
                                                <a class="dropdown-item" href="#">Account Operations</a>
                                                <a class="dropdown-item" href="#">Login Report</a>
                                                <a class="dropdown-item" href="#">Downline</a>
                                                <a class="dropdown-item" href="#">Reset Password</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>A14274</td>
                                    <td>Demo agent</td> {{-- Changed from link to static text as per new interaction --}}
                                    <td>Demo (SA11474)</td>
                                    <td>15-09-25</td>
                                    <td>0</td>
                                    <td>******</td>
                                    <td>2</td>
                                    <td>3</td>
                                    <td>Active</td>
                                </tr>
                                
                                {{-- Add more static rows here if needed, each with its own plus button --}}
                                
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer clearfix">
                        {{-- Pagination placeholder --}}
                        <ul class="pagination pagination-sm m-0 float-right">
                            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="modal fade" id="modal-partnership" tabindex="-1" role="dialog" aria-labelledby="partnershipModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            {{-- Modal Header with background color matching card-info header --}}
            <div class="modal-header bg-info">
                <h5 class="modal-title" id="partnershipModalLabel">PARTNERSHIP DETAILS - A14274</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #fff;">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
                <h6 class="text-bold mb-2">Match Share</h6>
                <table class="table table-bordered table-sm mb-4">
                    <thead>
                        <tr class="bg-primary">
                            <th>SuperAgent</th>
                            <th>Agent</th>
                            <th>Client</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                    </tbody>
                </table>

                {{-- Match Commission Section --}}
                <h6 class="text-bold mb-2">Match Commission</h6>
                <table class="table table-bordered table-sm mb-4">
                    <thead>
                        <tr class="bg-primary">
                            <th>SuperAgent</th>
                            <th>Agent</th>
                            <th>Client</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2</td>
                            <td>2</td>
                            <td>0</td>
                        </tr>
                    </tbody>
                </table>

                {{-- Session Commission Section --}}
                <h6 class="text-bold mb-2">Session Commission</h6>
                <table class="table table-bordered table-sm mb-4">
                    <thead>
                        <tr class="bg-primary">
                            <th>SuperAgent</th>
                            <th>Agent</th>
                            <th>Client</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>3</td>
                            <td>3</td>
                            <td>0</td>
                        </tr>
                    </tbody>
                </table>

                {{-- Casino Share Section --}}
                <h6 class="text-bold mb-2">Casino Share</h6>
                <table class="table table-bordered table-sm mb-4">
                    <thead>
                        <tr class="bg-primary">
                            <th>SuperAgent</th>
                            <th>Agent</th>
                            <th>Client</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                    </tbody>
                </table>
                
                {{-- Casino Commission Section --}}
                <h6 class="text-bold mb-2">Casino Commission</h6>
                <table class="table table-bordered table-sm mb-4">
                    <thead>
                        <tr class="bg-primary">
                            <th>SuperAgent</th>
                            <th>Agent</th>
                            <th>Client</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2</td>
                            <td>2</td>
                            <td>0</td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@endsection