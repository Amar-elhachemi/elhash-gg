<?php

use Illuminate\Support\Facades\Route;

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