<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/session/status/get',function() {
    $message = session('status');
    return response()->json([
        "message" => $message ?? null
    ]);
});

require __DIR__.'/auth.php';
require __DIR__.'/ticket.php';
