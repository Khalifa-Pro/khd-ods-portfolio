<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('contents.accueil');
});

Route::get('/details-services', function () {
    return view('contents.details');
});

Route::post('/send-message', [\App\Http\Controllers\ContactController::class, 'send'])->name('contact.send');

