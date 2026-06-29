<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Cs2Controller;
use App\Http\Controllers\ValorantController;
use App\Http\Controllers\UtilitiesController;
use App\Http\Controllers\AboutController;

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('/cs2', [Cs2Controller::class, 'index'])
    ->name('cs2');

Route::get('/cs2/crosshair-generator', [Cs2Controller::class, 'crosshair'])
    ->name('cs2.crosshair');

Route::get('/cs2/config-generator', [Cs2Controller::class, 'config'])
    ->name('cs2.config');

Route::get('/cs2/pro-settings', [Cs2Controller::class, 'proSettings'])
    ->name('cs2.prosettings');

Route::get('/cs2/maps', [Cs2Controller::class, 'maps'])
    ->name('cs2.maps');

Route::get('/valorant', [ValorantController::class, 'index'])
    ->name('valorant');

Route::get('/valorant/crosshair-generator', [ValorantController::class, 'crosshair'])
    ->name('valorant.crosshair');

Route::get('/valorant/pro-settings', [ValorantController::class, 'proSettings'])
    ->name('valorant.prosettings');

Route::get('/valorant/agents', [ValorantController::class, 'agents'])
    ->name('valorant.agents');

Route::get('/valorant/lineups', [ValorantController::class, 'lineups'])
    ->name('valorant.lineups');

Route::get('/utilities', [UtilitiesController::class, 'index'])
    ->name('utilities');

Route::get('/about', [AboutController::class, 'index'])
    ->name('about');
    
Route::get('/utilities/sensitivity-converter', [UtilitiesController::class, 'sensitivity'])
    ->name('utilities.sensitivity');

Route::get('/utilities/fps-calculator', [UtilitiesController::class, 'fps'])
    ->name('utilities.fps');

Route::get('/utilities/monitor-distance', [UtilitiesController::class, 'monitor'])
    ->name('utilities.monitor');

Route::get('/utilities/config-converter', [UtilitiesController::class, 'config'])
    ->name('utilities.config');

 Route::get('/cs2/maps/{map}', [Cs2Controller::class, 'map'])
    ->name('cs2.map');

Route::get('/cs2/player/{nickname}', [Cs2Controller::class,'player'])
    ->name('cs2.player');

Route::get('/cs2/crosshair/{nickname}',
    [Cs2Controller::class,'crosshairPlayer'])
    ->name('cs2.crosshair.player');

Route::get('/search',[SearchController::class,'index'])
    ->name('search');

Route::middleware(['auth'])->prefix('admin')->group(function () {

    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

});

Route::get('/admin/players', [Cs2Controller::class,'adminPlayers'])
    ->name('admin.players');

Route::get('/admin/players/create', [Cs2Controller::class,'createPlayer'])
    ->name('admin.players.create');

Route::post('/admin/players', [Cs2Controller::class,'storePlayer'])
    ->name('admin.players.store');

Route::get('/admin/players/{player}/edit', [Cs2Controller::class,'editPlayer'])
    ->name('admin.players.edit');

Route::put('/admin/players/{player}', [Cs2Controller::class,'updatePlayer'])
    ->name('admin.players.update');

Route::delete('/admin/players/{player}', [Cs2Controller::class,'destroyPlayer'])
    ->name('admin.players.destroy');

use App\Http\Controllers\Admin\CrosshairController;

Route::get('/admin/crosshairs',[CrosshairController::class,'index'])
    ->name('admin.crosshairs');

Route::get('/admin/crosshairs/create',[CrosshairController::class,'create'])
    ->name('admin.crosshairs.create');

Route::post('/admin/crosshairs',[CrosshairController::class,'store'])
    ->name('admin.crosshairs.store');


/*
|--------------------------------------------------------------------------
| Breeze Authentication
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

});

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');

});

require __DIR__.'/auth.php';
