<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PagesController;
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
    return view('welcome');
});

Route::get('/about',[PagesController::class,'about'])->name('about');
Route::get('/commitments',[PagesController::class,'commitments'])->name('commitments');
Route::get('/endorsements',[PagesController::class,'endorsements'])->name('endorsements');
Route::get('/events',[PagesController::class,'events'])->name('events');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');


