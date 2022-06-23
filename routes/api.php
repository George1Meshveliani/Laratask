<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Endpoint: http://{url}/api/users
// In our example http://localhost:8000/api/users
Route::get('users', [UserController::class, 'allUsers']);


// Endpoint: http://{url}/api/users/token
// In our example http://localhost:8000/api/users/token
Route::get('users/{token}', [UserController::class, 'userDetail']);
