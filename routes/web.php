<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

Route::view('/about', 'about')->name('about');

// CS2
Route::view('/cs2', 'cs2.index')->name('cs2');
Route::view('/cs2/crosshair-generator', 'cs2.crosshair-generator')->name('cs2.crosshair');
Route::view('/cs2/config-generator', 'cs2.config-generator')->name('cs2.config');
Route::view('/cs2/pro-settings', 'cs2.pro-settings')->name('cs2.prosettings');
Route::view('/cs2/maps', 'cs2.maps')->name('cs2.maps');

// Valorant
Route::view('/valorant', 'valorant.index')->name('valorant');
Route::view('/valorant/crosshair-generator', 'valorant.crosshair-generator')->name('valorant.crosshair');
Route::view('/valorant/pro-settings', 'valorant.pro-settings')->name('valorant.prosettings');
Route::view('/valorant/lineups', 'valorant.lineups')->name('valorant.lineups');
Route::view('/valorant/agents', 'valorant.agents')->name('valorant.agents');

// Utilities
Route::view('/utilities', 'utilities.index')->name('utilities');
Route::view('/utilities/sensitivity-converter', 'utilities.sensitivity-converter')->name('utilities.sensitivity');
Route::view('/utilities/fps-calculator', 'utilities.fps-calculator')->name('utilities.fps');
Route::view('/utilities/monitor-distance', 'utilities.monitor-distance')->name('utilities.monitor');
Route::view('/utilities/config-converter', 'utilities.config-converter')->name('utilities.config');