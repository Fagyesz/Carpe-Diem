<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;


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

//Show event create form
Route::get('/events/create_form', [ListingController::class, 'index']);

//Store event listing data
Route::post('/events', [ListingController::class, 'store']);

