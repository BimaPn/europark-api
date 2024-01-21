<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CollectionController;

Route::group([
    'prefix' => 'collections',
    'middleware' => 'auth:api'
], function ($router) {
    Route::get("/get",[CollectionController::class,"index"]);
    Route::post("/create",[CollectionController::class,"store"]);
});
