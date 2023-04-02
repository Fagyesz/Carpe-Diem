<?php


use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\Auth\RegisterController;
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


// Login routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// Registration routes
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Logout route
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

//Show create form
Route::get('/events/new_event', [EventController::class, 'create']);

//Store create form data
Route::post('/create', [EventController::class, 'store']);

Route::get('/', [EventController::class, 'index'])->name('home');


