<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
// commit

Route::get('/', function () {
    return view('RealEstate/index');
});
Route::get('/contact', function () {
    return view('RealEstate/contact');
});
Route::get('/contactSend', [ContactController::class, 'create']);
Route::post('/contactSend', [ContactController::class, 'store']);
