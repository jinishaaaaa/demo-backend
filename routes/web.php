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
Route::post('/contactus', [FrontendController::class, 'submit']);

Route::get('/ankita', [FrontendController::class, 'ankita']);
Route::post('/ankita', [FrontendController::class, 'submitForm']);

Route::get('/register', [FrontendController::class, 'register']);
Route::post('/register', [FrontendController::class, 'submitForm2']);