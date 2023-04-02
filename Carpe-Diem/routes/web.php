<?php


use App\Http\Controllers\LoginController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;
use App\Models\Event;


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
// Show main page
Route::get('/', [EventController::class, 'index']);


Route::get('/', function () {
    return view('welcome');
});


Route::get('/login',[LoginController::class,"index"]);

//Show create form
Route::get('/events/new_event', [EventController::class, 'create']);

//Store create form data
Route::post('/create', [EventController::class, 'store']);


