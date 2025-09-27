<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CasinoController;
use App\Http\Controllers\Admin\SportController;

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

            // Casino route
            Route::get('casino/details', [CasinoController::class, 'details'])->name('casino.details');

         });
     });
