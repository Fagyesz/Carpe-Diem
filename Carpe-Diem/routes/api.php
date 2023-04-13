<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/users", [API::class, "getAllUsers"]);
Route::get("/users/{id}", [API::class, "getUserById"]);

Route::post("/users", [API::class, "createUser"]);

Route::put("/users", [API::class, "updateUser"]);

Route::delete("/users/{id}", [API::class, "deleteUser"]);