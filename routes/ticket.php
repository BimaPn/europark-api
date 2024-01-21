<?php
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\TicketPricingController;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'tickets',
    'middleware' => 'api'
], function ($router) {
    Route::get("/schedules/get",[ScheduleController::class,"index"]);
    Route::get("/categories/get",[TicketPricingController::class,"index"]);
    Route::post("/create",[TicketController::class,"store"]);
    Route::get("/categories/get",[TicketPricingController::class,"index"]);
    Route::get("/session/check",[SessionController::class,"checkTicketSession"]);
    Route::post("/session/create",[SessionController::class,"storeTicketSession"]);

});
Route::group([
    'prefix' => 'tickets',
    'middleware' => 'auth:api'
], function ($router) {
    Route::get("/get",[TicketController::class,"index"]);
    Route::get("{ticket}/get",[TicketController::class,"show"]);
    Route::get("/{ticket}/verify/get",[TicketController::class,"getTicketVerify"]);
    Route::post("/{ticket}/verify",[TicketController::class,"verifyTicket"]);
    Route::put("/categories/update",[TicketPricingController::class,"update"]);
});


