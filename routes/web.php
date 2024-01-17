<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FunnelController;

Route::get('/', [FunnelController::class, 'funnelA'])->name('funnelA');
Route::get('/funnel-b', [FunnelController::class, 'funnelB'])->name('funnelB');
Route::get('/funnel-c', [FunnelController::class, 'funnelC'])->name('funnelC');
Route::get('/funnel-d', [FunnelController::class, 'funnelD'])->name('funnelD');

Route::post('/save', [FunnelController::class, 'store'])->name('store');
