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

Route::get("/events", [API::class, "getAllEvents"]);
Route::get("/events/{id}", [API::class, "getEventById"]);

Route::post("/events", [API::class, "createEvent"]);

Route::put("/events", [API::class, "updateEvent"]);

Route::delete("/events/{id}", [API::class, "deleteEvent"]);

Route::get("/tickets", [API::class, "getAllTickets"]);
Route::get("/tickets/{id}", [API::class, "getTicketById"]);
Route::post("/tickets", [API::class, "createTicket"]);
Route::put("/tickets", [API::class, "updateTicket"]);
Route::delete("/tickets/{id}", [API::class, "deleteTicket"]);

Route::get("/posts", [API::class, "getAllPosts"]);
Route::get("/posts/{id}", [API::class, "getPostById"]);
Route::post("/posts", [API::class, "createPost"]);
Route::put("/posts", [API::class, "updatePost"]);
Route::delete("/posts/{id}", [API::class, "deletePost"]);