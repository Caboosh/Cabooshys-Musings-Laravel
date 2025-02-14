<?php

use App\Http\Controllers\FrontendController;
use App\Livewire\Pages\Home;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'Homepage']);
Route::get('/blog', [FrontendController::class, 'Blog']);
Route::get('/cbsh', [FrontendController::class, 'CBSH']);
Route::get('/car-stuff', [FrontendController::class, 'CarStuff']);
Route::get('/vape-stuff', [FrontendController::class, 'VapeStuff']);
Route::get('/drones', [FrontendController::class, 'FPVDrones']);
