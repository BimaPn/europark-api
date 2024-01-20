<?php

use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\TicketPricingController;
use Illuminate\Support\Facades\Route;



Route::group([
    'prefix' => 'tickets'
], function ($router) {
    Route::get("/schedules/get",[ScheduleController::class,"index"]);
    Route::get("/categories/get",[TicketPricingController::class,"index"]);
    Route::post("/create",[TicketController::class,"store"]);
    Route::get("/categories/get",[TicketPricingController::class,"index"]);
    Route::get("/session/check",[TicketController::class,"checkSession"]);
    Route::post("/session/create",[TicketController::class,"storeSession"]);
    Route::get("/{ticket}/get",[TicketController::class,"getTicketVerify"])->middleware("auth:api");
    Route::post("/{ticket}/verify",[TicketController::class,"verifyTicket"])->middleware("auth:api");
});


