@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
<section class="content" style="padding-top: 20px;">
    <div class="container-fluid">
        <div class="row">
            
            <div class="col-md-3 col-sm-6 col-12 mb-3">
                <a href="#" class="info-box bg-primary dashboard-card" data-toggle="modal" data-target="#modal-superagent">
                    <span class="info-box-icon"><i class="fas fa-user-tie"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Superagent</span>
                        <span class="info-box-number">My Team</span>
                    </div>
                </a>
            </div>

            <div class="col-md-3 col-sm-6 col-12 mb-3">
                <a href="#" class="info-box bg-primary dashboard-card" data-toggle="modal" data-target="#modal-sports">
                    <span class="info-box-icon"><i class="fas fa-running"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Sport's Details</span>
                    </div>
                </a>
            </div>

            <div class="col-md-3 col-sm-6 col-12 mb-3">
                <a href="#" class="info-box bg-primary dashboard-card" data-toggle="modal" data-target="#modal-ledger">
                    <span class="info-box-icon"><i class="fas fa-book"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Ledger</span>
                    </div>
                </a>
            </div>

            <div class="col-md-3 col-sm-6 col-12 mb-3">
                <a href="#" class="info-box bg-primary dashboard-card" data-toggle="modal" data-target="#modal-reports">
                    <span class="info-box-icon"><i class="fas fa-file-invoice-dollar"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Reports</span>
                        <span class="info-box-number">Cash Transaction</span>
                    </div>
                </a>
            </div>

            <div class="col-md-3 col-sm-6 col-12 mb-3">
                <a href="#" class="info-box bg-primary dashboard-card" data-toggle="modal" data-target="#modal-settings">
                    <span class="info-box-icon"><i class="fas fa-cog"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Settings</span>
                    </div>
                </a>
            </div>

            <div class="col-md-3 col-sm-6 col-12 mb-3">
                {{-- Use a form to submit POST request, matching Laravel's default logout route --}}
                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                
                {{-- This a-tag visually functions as the card and triggers the form submission --}}
                <a href="#" class="info-box bg-primary dashboard-card" 
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <span class="info-box-icon"><i class="fas fa-sign-out-alt"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Logout</span>
                    </div>
                </a>
            </div>
            
            <div class="col-md-3 col-sm-6 col-12 mb-3">
                <div class="info-box bg-primary dashboard-card" style="visibility: hidden;">
                    <div class="info-box-content">
                        <span class="info-box-text"></span>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-12 mb-3">
                <div class="info-box bg-primary dashboard-card" style="visibility: hidden;">
                    <div class="info-box-content">
                        <span class="info-box-text"></span>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-12 mb-3">
                <div class="info-box bg-primary dashboard-card">
                    <span class="info-box-icon"><i class="fas fa-user-circle"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">SA11474</span>
                        <span class="info-box-number" style="font-size: 0.9rem;">You are superagent</span>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-12 mb-3">
                <div class="info-box bg-primary dashboard-card">
                    <span class="info-box-icon"><i class="fas fa-coins"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">0</span>
                        <span class="info-box-number">Chips</span>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-12 mb-3">
                <div class="info-box bg-primary dashboard-card">
                    <span class="info-box-icon"><i class="fas fa-users"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">1</span>
                        <span class="info-box-number">Members</span>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-12 mb-3">
                <div class="info-box bg-primary dashboard-card">
                    <span class="info-box-icon"><i class="fas fa-chart-bar"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">0</span>
                        <span class="info-box-number">My Share</span>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-12 mb-3">
                <div class="info-box bg-primary dashboard-card">
                    <div class="info-box-content text-center">
                        <span class="info-box-text">100%</span>
                        <span class="info-box-number">Company Share</span>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-12 mb-3">
                <div class="info-box bg-primary dashboard-card">
                    <div class="info-box-content text-center">
                        <span class="info-box-text">2%</span>
                        <span class="info-box-number">Match Commission</span>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-12 mb-3">
                <div class="info-box bg-primary dashboard-card">
                    <div class="info-box-content text-center">
                        <span class="info-box-text">3%</span>
                        <span class="info-box-number">Session Commission</span>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-12 mb-3">
                <div class="info-box bg-primary dashboard-card">
                    <span class="info-box-icon"><i class="fas fa-info-circle"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Rules</span>
                    </div>
                </div>
            </div>

        </div>
        <div class="row mt-4">
            <div class="col-12">
                <div class="card card-info">
                    <div class="card-header bg-primary">
                        <h3 class="card-title">Active Matches</h3>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10px">S/N</th>
                                    <th>NAME</th>
                                    <th>OPEN DATE</th>
                                    <th>COMPETITION</th>
                                    <th>INPLAY</th>
                                    <th>DETAILS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>NEPAL V WEST INDIES</td>
                                    <td>27-09-2025 20:30:00</td>
                                    <td>INTERNATIONAL TWENTY20 MATCHES</td>
                                    <td><button class="btn btn-sm btn-primary">INPLAY</button></td>
                                    <td><a href="#" class="btn btn-sm btn-default">DETAILS</a></td>
                                </tr>
                                </tbody>
                        </table>
                    </div>
                    </div>
                </div>
        </div>
        </div></section>

<!-- Superagent Modal -->
<div class="modal fade" id="modal-superagent">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header bg-primary" style="padding: 10px 15px;">
                <h4 class="modal-title" style="font-size: 1.2rem;">Superagent</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="color: white;">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center p-0">
                <div class="row p-3">
                    <div class="col-6 mb-3">
                        <a href="{{ route('admin.agent.list') }}" class="btn btn-primary btn-lg btn-block" style="height: 80px; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                            <i class="fas fa-user-cog mb-1" style="font-size: 1.5rem;"></i>
                            <span style="font-size: 0.9rem;">Agent Master</span>
                        </a>
                    </div>
                    <div class="col-6 mb-3">
                        <a href="{{ route('admin.client.list') }}" class="btn btn-primary btn-lg btn-block" style="height: 80px; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                            <i class="fas fa-users mb-1" style="font-size: 1.5rem;"></i>
                            <span style="font-size: 0.9rem;">Client Master</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-center" style="padding: 10px;">
                <button type="button" class="btn btn-default" data-dismiss="modal" style="min-width: 100px;">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Sports Modal -->
<div class="modal fade" id="modal-sports">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header bg-primary" style="padding: 10px 15px;">
                <h4 class="modal-title" style="font-size: 1.2rem;">Sport's Details</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="color: white;">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center p-0">
                <div class="row p-3">
                    <div class="col-6 mb-3">
                        <a href="{{ route('admin.sports.active_games') }}" class="btn btn-primary btn-lg btn-block" style="height: 80px; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                            <i class="fas fa-circle-notch mb-1" style="font-size: 1.5rem;"></i>
                            <span style="font-size: 0.9rem;">Active Games</span>
                        </a>
                    </div>
                    <div class="col-6 mb-3">
                        <a href="{{route('admin.sports.finished_games') }}" class="btn btn-primary btn-lg btn-block" style="height: 80px; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                            <i class="fas fa-check-circle mb-1" style="font-size: 1.5rem;"></i>
                            <span style="font-size: 0.9rem;">Finished Games</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-center" style="padding: 10px;">
                <button type="button" class="btn btn-default" data-dismiss="modal" style="min-width: 100px;">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Ledger Modal -->
<div class="modal fade" id="modal-ledger">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header bg-primary" style="padding: 10px 15px;">
                <h4 class="modal-title" style="font-size: 1.2rem;">Ledger</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="color: white;">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center p-0">
                <div class="row p-3">
                    <div class="col-6 mb-3">
                        <a href="#" class="btn btn-primary btn-lg btn-block" style="height: 80px; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                            <i class="fas fa-chart-line mb-1" style="font-size: 1.5rem;"></i>
                            <span style="font-size: 0.9rem;">Profit/Loss</span>
                        </a>
                    </div>
                    <div class="col-6 mb-3">
                        <a href="#" class="btn btn-primary btn-lg btn-block" style="height: 80px; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                            <i class="fas fa-wallet mb-1" style="font-size: 1.5rem;"></i>
                            <span style="font-size: 0.9rem;">My Ledger</span>
                        </a>
                    </div>
                    <div class="col-6 mb-3">
                        <a href="#" class="btn btn-primary btn-lg btn-block" style="height: 80px; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                            <i class="fas fa-users-cog mb-1" style="font-size: 1.5rem;"></i>
                            <span style="font-size: 0.9rem;">Agent Ledger</span>
                        </a>
                    </div>
                    <div class="col-6 mb-3">
                        <a href="#" class="btn btn-primary btn-lg btn-block" style="height: 80px; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                            <i class="fas fa-users mb-1" style="font-size: 1.5rem;"></i>
                            <span style="font-size: 0.9rem;">Client Ledger</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-center" style="padding: 10px;">
                <button type="button" class="btn btn-default" data-dismiss="modal" style="min-width: 100px;">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Setting Modal -->
<div class="modal fade" id="modal-settings">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header bg-primary" style="padding: 10px 15px;">
                <h4 class="modal-title" style="font-size: 1.2rem;">Reports</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="color: white;">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center p-0">
                <div class="row p-3">
                    <div class="col-6 mb-3">
                        <a href="#" class="btn btn-primary btn-lg btn-block" style="height: 80px; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                            <i class="fas fa-clipboard-list mb-1" style="font-size: 1.5rem;"></i>
                            <span style="font-size: 0.9rem;">Statements</span>
                        </a>
                    </div>
                    <div class="col-6 mb-3">
                        <a href="#" class="btn btn-primary btn-lg btn-block" style="height: 80px; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                            <i class="fas fa-exchange-alt mb-1" style="font-size: 1.5rem;"></i>
                            <span style="font-size: 0.9rem;">A/C Operations</span>
                        </a>
                    </div>
                    <div class="col-6 mb-3">
                        <a href="#" class="btn btn-primary btn-lg btn-block" style="height: 80px; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                            <i class="fas fa-chart-pie mb-1" style="font-size: 1.5rem;"></i>
                            <span style="font-size: 0.9rem;">Profit And Loss</span>
                        </a>
                    </div>
                    <div class="col-6 mb-3">
                        <a href="#" class="btn btn-primary btn-lg btn-block" style="height: 80px; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                            <i class="fas fa-dice mb-1" style="font-size: 1.5rem;"></i>
                            <span style="font-size: 0.9rem;">Casino Profit&Loss</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-center" style="padding: 10px;">
                <button type="button" class="btn btn-default" data-dismiss="modal" style="min-width: 100px;">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-reports">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header bg-primary" style="padding: 10px 15px;">
                <h4 class="modal-title" style="font-size: 1.2rem;">Reports</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="color: white;">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center p-0">
                <div class="row p-3">
                    <div class="col-6 mb-3">
                        <a href="#" class="btn btn-primary btn-lg btn-block" style="height: 80px; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                            <i class="fas fa-clipboard-list mb-1" style="font-size: 1.5rem;"></i>
                            <span style="font-size: 0.9rem;">Agent</span>
                            <span style="font-size: 0.9rem;">Dr/Cr Entry</span>
                        </a>
                    </div>
                    <div class="col-6 mb-3">
                        <a href="#" class="btn btn-primary btn-lg btn-block" style="height: 80px; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                            <i class="fas fa-exchange-alt mb-1" style="font-size: 1.5rem;"></i>
                            <span style="font-size: 0.9rem;">Client</span>
                            <span style="font-size: 0.9rem;">Dr/Cr Entry</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-center" style="padding: 10px;">
                <button type="button" class="btn btn-default" data-dismiss="modal" style="min-width: 100px;">Close</button>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const cards = document.querySelectorAll('.dashboard-card');
        cards.forEach(card => {
            if (card.querySelector('.info-box-icon').children.length === 0) {
                card.querySelector('.info-box-icon').style.display = 'none';
                card.querySelector('.info-box-content').style.marginLeft = '0';
            }
        });
    });
</script>
@endsection