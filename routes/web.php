<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/feedback', [FeedbackController::class, 'create']);
Route::post('/feedback/send', [FeedbackController::class, 'send']);
Route::get('/feedback/success', [FeedbackController::class, 'success']); 
