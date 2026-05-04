<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/aboutus', [FrontendController::class, 'aboutus']);
Route::get('/contactus', [FrontendController::class, 'contactus']);
Route::get('/products', [FrontendController::class, 'products']);
Route::get('/dashboard', [FrontendController::class, 'dashboard']);

