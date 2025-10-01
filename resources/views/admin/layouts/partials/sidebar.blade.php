<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('admin.dashboard') }}" class="brand-link">
        <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">BABA353</span>
    </a>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Admin</a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                
                {{-- Dashboard Link --}}
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link @if(request()->routeIs('admin.dashboard')) active @endif">
                        <i class="nav-icon far fa-clipboard"></i> 
                        <p>Dashboard</p>
                    </a>
                </li>

                {{--- Super Agent Details Dropdown ---}}
                <li class="nav-item @if(request()->routeIs('admin.agent.list') || request()->routeIs('admin.client.list')) menu-open @endif"> 
                    <a href="#" class="nav-link @if(request()->routeIs('admin.agent.list') || request()->routeIs('admin.client.list')) active @endif">
                        <i class="nav-icon fas fa-user-circle"></i> 
                        <p>
                            Super Agent Details
                            <i class="right fas fa-angle-down"></i> 
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.agent.list') }}" class="nav-link @if(request()->routeIs('admin.agent.list')) active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Agent Master</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.client.list') }}" class="nav-link @if(request()->routeIs('admin.client.list')) active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Client Master</p>
                            </a>
                        </li>
                    </ul>
                </li>

                {{--- Sports Betting Dropdown ---}}
                <li class="nav-item @if(request()->routeIs('admin.sports.*')) menu-open @endif">
                    <a href="#" class="nav-link @if(request()->routeIs('admin.sports.*')) active @endif">
                        <i class="nav-icon fas fa-tags"></i> 
                        <p>
                            Sports Betting
                            <i class="right fas fa-angle-up"></i> 
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.sports.active_games')}}" class="nav-link @if(request()->routeIs('admin.sports.active_games')) active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Active Games</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.sports.finished_games')}}" class="nav-link @if(request()->routeIs('admin.sports.finished_games')) active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Finished Games</p>
                            </a>
                        </li>
                    </ul>
                </li>

                {{--- Casino Dropdown ---}}
                <li class="nav-item @if(request()->routeIs('admin.casino.*')) menu-open @endif">
                    <a href="#" class="nav-link @if(request()->routeIs('admin.casino.*')) active @endif">
                        <i class="nav-icon fas fa-compass"></i> 
                        <p>
                            Casino
                            <i class="right fas fa-angle-down"></i> 
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        {{-- NOTE: Add your route name here (e.g., admin.casino.inplay) --}}
                        <li class="nav-item">
                            <a href="{{ route('admin.casino.inplay') }}" class="nav-link @if(request()->routeIs('admin.casino.inplay')) active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Inplay Casino</p>
                            </a>
                        </li>
                        {{-- NOTE: Add your route name here (e.g., admin.casino.completed) --}}
                        <li class="nav-item">
                            <a href="{{ route('admin.casino.completed') }}" class="nav-link @if(request()->routeIs('admin.casino.completed')) active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Completed Casino</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.casino.details') }}" class="nav-link @if(request()->routeIs('admin.casino.details')) active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Casino Details</p>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- Matka Link (No sub-items provided, assuming a single route like admin.matka.index) --}}
                <!-- <li class="nav-item">
                    <a href="#" class="nav-link @if(request()->routeIs('admin.matka.*')) active @endif"> {{-- Using a wildcard for potential future sub-routes --}}
                        <i class="nav-icon fas fa-compass"></i> 
                        <p>
                            Matka
                            <i class="right fas fa-angle-down"></i>
                        </p>
                    </a>
                </li> -->

                {{--- Ledger Dropdown ---}}
                <li class="nav-item @if(request()->routeIs('admin.ledger.*')) menu-open @endif">
                    <a href="#" class="nav-link @if(request()->routeIs('admin.ledger.*')) active @endif">
                        <i class="nav-icon fas fa-book"></i> 
                        <p>
                            Ledger
                            <i class="right fas fa-angle-down"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        {{-- NOTE: Add your route name here (e.g., admin.ledger.profit_loss) --}}
                        <li class="nav-item">
                            <a href="#" class="nav-link @if(request()->routeIs('admin.ledger.profit_loss')) active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Profit/Loss</p>
                            </a>
                        </li>
                        {{-- NOTE: Add your route name here (e.g., admin.ledger.my_ledger) --}}
                        <li class="nav-item">
                            <a href="#" class="nav-link @if(request()->routeIs('admin.ledger.my_ledger')) active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>My Ledger</p>
                            </a>
                        </li>
                        {{-- NOTE: Add your route name here (e.g., admin.ledger.agent_ledger) --}}
                        <li class="nav-item">
                            <a href="#" class="nav-link @if(request()->routeIs('admin.ledger.agent_ledger')) active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Agent Ledger</p>
                            </a>
                        </li>
                        {{-- NOTE: Add your route name here (e.g., admin.ledger.client_ledger) --}}
                        <li class="nav-item">
                            <a href="#" class="nav-link @if(request()->routeIs('admin.ledger.client_ledger')) active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Client Ledger</p>
                            </a>
                        </li>
                    </ul>
                </li>

                {{--- Cash Transaction Dropdown ---}}
                <li class="nav-item @if(request()->routeIs('admin.cash_transaction.*')) menu-open @endif">
                    <a href="#" class="nav-link @if(request()->routeIs('admin.cash_transaction.*')) active @endif">
                        <i class="nav-icon fas fa-wallet"></i> <p>
                            Cash Transaction
                            <i class="right fas fa-angle-up"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        {{-- NOTE: Add your route name here (e.g., admin.cash_transaction.c_debit_credit) --}}
                        <li class="nav-item">
                            <a href="#" class="nav-link @if(request()->routeIs('admin.cash_transaction.c_debit_credit')) active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>(C) Debit/Credit Entry</p>
                            </a>
                        </li>
                        {{-- NOTE: Add your route name here (e.g., admin.cash_transaction.a_debit_credit) --}}
                        <li class="nav-item">
                            <a href="#" class="nav-link @if(request()->routeIs('admin.cash_transaction.a_debit_credit')) active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>(A) Debit/Credit Entry</p>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- Comm. Report Link --}}
                <li class="nav-item">
                    {{-- NOTE: Add your route name here (e.g., admin.commission.report) --}}
                    <a href="#" class="nav-link @if(request()->routeIs('admin.commission.report')) active @endif">
                        <i class="nav-icon fas fa-clipboard-list"></i> <p>Comm. Report</p>
                    </a>
                </li>

                {{--- Reports Dropdown ---}}
                <li class="nav-item @if(request()->routeIs('admin.reports.*')) menu-open @endif">
                    <a href="#" class="nav-link @if(request()->routeIs('admin.reports.*')) active @endif">
                        <i class="nav-icon fas fa-edit"></i> <p>
                            Reports
                            <i class="right fas fa-angle-up"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            {{-- Assuming routes were added in the original prompt --}}
                            <a href="{{route('admin.reports.login_report')}}" class="nav-link @if(request()->routeIs('admin.reports.login_report')) active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Login Report</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            {{-- Assuming routes were added in the original prompt --}}
                            <a href="{{route('admin.reports.security_code_report')}}" class="nav-link @if(request()->routeIs('admin.reports.security_code_report')) active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Secure Code Report</p>
                            </a>
                        </li>
                    </ul>
                </li>
                
                {{-- JEM29 Setting Link --}}
                <li class="nav-item">
                    {{-- NOTE: Add your route name here (e.g., admin.settings) --}}
                    <a href="#" class="nav-link @if(request()->routeIs('admin.settings')) active @endif">
                        <i class="nav-icon fas fa-cog"></i> <p>JEM29 Setting</p>
                    </a>
                </li>
                
            </ul>
        </nav>
    </div>
</aside>