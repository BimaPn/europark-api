<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CollectionController;

Route::group([
    'prefix' => 'collections',
    'middleware' => 'auth:api'
], function ($router) {
    Route::get("/get",[CollectionController::class,"index"]);
    Route::get("/{collection}/update/get",[CollectionController::class,"edit"]);
    Route::put("/{collection}/update",[CollectionController::class,"update"]);
    Route::post("/create",[CollectionController::class,"store"]);
});
