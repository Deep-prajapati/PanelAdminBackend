<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CasinoController;
use App\Http\Controllers\Admin\SportController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\Jem29Controller;
use App\Http\Controllers\Admin\CommissionReportController;

Route::prefix('admin')
     ->name('admin.')
     ->group(function () {
        Route::middleware('admin.guest')->group(function () {
            Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
            Route::post('login', [AuthController::class, 'login'])->name('login.submit');
            Route::post('logout', [AuthController::class, 'logout'])->name('logout');
        });

         Route::middleware('admin.auth')->group(function () {
            Route::get('dashboard', function () {
                 return view('admin.dashboard');
             })->name('dashboard');
             # Agent Routes
            Route::get('agent/details', [UserController::class, 'agentList'])->name('agent.list');
            Route::get('agent/create', [UserController::class, 'agentCreate'])->name('agent.create');
            Route::post('agent/store', [UserController::class, 'agentStore'])->name('agent.store');

            # Client Routes
            Route::get('client/details', [UserController::class, 'clienttList'])->name('client.list');
            Route::get('client/create', [UserController::class, 'createClient'])->name('client.create');
            Route::post('client/store',[UserController::class, 'storeClient'])->name('client.store');

            # Sports Route
            Route::get('sports/active-games', [SportController::class,'activeGames'])->name('sports.active_games');
            
            Route::get('sports/finished-games', [SportController::class,'finishedGames'])->name('sports.finished_games');
            
            Route::get('/commission', [CommissionReportController::class, 'commission'])->name('commission.report');
            // Casino route
            Route::get('casino/details', [CasinoController::class, 'details'])->name('casino.details');
            Route::get('casino/inplay-casino', [CasinoController::class, 'inplay'])->name('casino.inplay');
            Route::get('casino/completed-casino', [CasinoController::class, 'completed'])->name('casino.completed');

            // Reports Route
            Route::get('reports/login-report', [ReportController::class, 'loginReport'])->name('reports.login_report');
            Route::get('reports/security-code-report', [ReportController::class, 'securityCodeReport'])->name('reports.security_code_report');
            // --- JEM29 Setting Routes (Yahan se naya code add kiya gaya hai) ---
            Route::prefix('jem29')->name('jem29.')->group(function () {
                Route::get('/settings', [Jem29Controller::class, 'settings'])->name('settings');
                Route::get('/search-user', [Jem29Controller::class, 'searchUser'])->name('search_user');
                Route::get('/statements', [Jem29Controller::class, 'statements'])->name('statements');
                Route::get('/ac-operations', [Jem29Controller::class, 'acOperations'])->name('ac_operations');
                Route::get('/profit-loss', [Jem29Controller::class, 'profitLoss'])->name('profit_loss');
                Route::get('/casino-profit-loss', [Jem29Controller::class, 'casinoProfitLoss'])->name('casino_profit_loss');
            });
         });
     });
