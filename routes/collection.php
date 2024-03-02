<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CollectionController;

Route::group([
    'prefix' => 'collections',
    'middleware' => 'api'
], function ($router) {
    Route::get("/get",[CollectionController::class,"index"]);
    Route::get("/{collection}/get",[CollectionController::class,"show"]);
    Route::get("/search",[CollectionController::class,"search"]);
});

Route::group([
    'prefix' => 'collections',
    'middleware' => 'auth:api'
], function ($router) {
    Route::get("/get/admin",[CollectionController::class,"adminIndex"]);
    Route::get("/search/admin",[CollectionController::class,"adminSearch"]);
    Route::get("/{collection}/update/get",[CollectionController::class,"edit"]);
    Route::put("/{collection}/update",[CollectionController::class,"update"]);
    Route::post("/create",[CollectionController::class,"store"]);
    Route::delete("/{collection}/delete",[CollectionController::class,"destroy"]);
});
