@extends('admin.layouts.app')

@section('title', 'Finished Games')

@section('content')
<section class="content" style="padding-top: 20px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-info">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h3 class="card-title">Completed Games Detail</h3>
                        {{-- Back button is correctly floated right due to 'justify-content-between' on card-header --}}
                        <a href="{{ url()->previous() }}" class="btn btn-sm btn-primary">Back</a>
                    </div>
                    
                    <div class="card-body">
                        
                        {{-- Filters (Date and Game Type) --}}
                        <form method="GET" action="#" class="form-inline mb-4">
                            <div class="form-group mr-2">
                                <input type="date" class="form-control" name="start_date" style="width: 130px;" value="2025-09-20">
                            </div>
                            <span class="mr-2"> → </span>
                            <div class="form-group mr-3">
                                <input type="date" class="form-control" name="end_date" style="width: 130px;" value="2025-09-27">
                            </div>
                            <div class="form-group mr-3">
                                <select class="form-control" name="game_type">
                                    <option value="">Select Game Type</option>
                                    <option value="Cricket" selected>Cricket</option>
                                    <option value="Football">Football</option>
                                    <option value="Tennis">Tennis</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                        </form>

                        <div class="table-responsive">
                            <table class="table table-bordered table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Time</th>
                                        <th>Declared Date</th>
                                        <th>Competition</th>
                                        <th>Won By</th>
                                        <th>P/L</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="dropdown d-inline mr-2">
                                                <a class="text-danger" href="#" role="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-caret-down"></i>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                    <a class="dropdown-item" href="#">Match and Session Plus Minus</a>
                                                    <a class="dropdown-item" href="#">Match and Session Plus Minus 2</a>
                                                    <a class="dropdown-item" href="#">Display Session Bets</a>
                                                    <a class="dropdown-item" href="#">Match And Session Bet</a>
                                                    <a class="dropdown-item" href="#">Completed Fancies</a>
                                                    <a class="dropdown-item" href="#">Agent Plus Minus</a>
                                                    <a class="dropdown-item" href="#">Rejected Bets</a>
                                                    <a class="dropdown-item" href="#">Rejected Match Bets</a>
                                                </div>
                                            </div>
                                            Nepal v West Indies
                                        </td>
                                        <td>27-09-2025 20:30:00</td>
                                        <td>27-09-2025 11:42 PM</td>
                                        <td>T20</td>
                                        <td>Nepal</td>
                                        <td><span class="text-success">0.00</span></td>
                                    </tr>
                                    
                                    {{-- Row 2: India v Sri Lanka --}}
                                    <tr>
                                        <td>
                                            <div class="dropdown d-inline mr-2">
                                                <a class="text-danger" href="#" role="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-caret-down"></i>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                    <a class="dropdown-item" href="#">Match and Session Plus Minus</a>
                                                    <a class="dropdown-item" href="#">Match and Session Plus Minus 2</a>
                                                    <a class="dropdown-item" href="#">Display Session Bets</a>
                                                    <a class="dropdown-item" href="#">Match And Session Bet</a>
                                                    <a class="dropdown-item" href="#">Completed Fancies</a>
                                                    <a class="dropdown-item" href="#">Agent Plus Minus</a>
                                                    <a class="dropdown-item" href="#">Rejected Bets</a>
                                                    <a class="dropdown-item" href="#">Rejected Match Bets</a>
                                                </div>
                                            </div>
                                            India v Sri Lanka
                                        </td>
                                        <td>27-09-2025 9:12 AM</td>
                                        <td>27-09-2025 12:18 AM</td>
                                        <td>T20</td>
                                        <td>draw</td>
                                        <td><span class="text-success">0.00</span></td>
                                    </tr>

                                    {{-- Row 3: Zimbabwe W v United Arab Emirates W --}}
                                    <tr>
                                        <td>
                                            <div class="dropdown d-inline mr-2">
                                                <a class="text-danger" href="#" role="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-caret-down"></i>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenu3">
                                                    <a class="dropdown-item" href="#">Match and Session Plus Minus</a>
                                                    <a class="dropdown-item" href="#">Match and Session Plus Minus 2</a>
                                                    <a class="dropdown-item" href="#">Display Session Bets</a>
                                                    <a class="dropdown-item" href="#">Match And Session Bet</a>
                                                    <a class="dropdown-item" href="#">Completed Fancies</a>
                                                    <a class="dropdown-item" href="#">Agent Plus Minus</a>
                                                    <a class="dropdown-item" href="#">Rejected Bets</a>
                                                    <a class="dropdown-item" href="#">Rejected Match Bets</a>
                                                </div>
                                            </div>
                                            Zimbabwe W v United Arab Emirates W
                                        </td>
                                        <td>26-09-2025 12:45:00</td>
                                        <td>26-09-2025 09:07 PM</td>
                                        <td>T20</td>
                                        <td>United Arab Emirates W</td>
                                        <td><span class="text-success">0.00</span></td>
                                    </tr>
                                    
                                    {{-- Row 4: Pakistan v Bangladesh (Static data adjusted for columns in image) --}}
                                    <tr>
                                        <td>
                                            <div class="dropdown d-inline mr-2">
                                                <a class="text-danger" href="#" role="button" id="dropdownMenu4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-caret-down"></i>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenu4">
                                                    <a class="dropdown-item" href="#">Match and Session Plus Minus</a>
                                                    <a class="dropdown-item" href="#">Match and Session Plus Minus 2</a>
                                                    <a class="dropdown-item" href="#">Display Session Bets</a>
                                                    <a class="dropdown-item" href="#">Match And Session Bet</a>
                                                    <a class="dropdown-item" href="#">Completed Fancies</a>
                                                    <a class="dropdown-item" href="#">Agent Plus Minus</a>
                                                    <a class="dropdown-item" href="#">Rejected Bets</a>
                                                    <a class="dropdown-item" href="#">Rejected Match Bets</a>
                                                </div>
                                            </div>
                                            Pakistan v Bangladesh
                                        </td>
                                        <td>25-09-2025 20:00:00</td>
                                        <td>26-09-2025 12:02 AM</td>
                                        <td>T20</td>
                                        <td>Pakistan</td>
                                        <td><span class="text-success">0.00</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection