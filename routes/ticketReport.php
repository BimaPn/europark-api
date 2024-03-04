<?php
use App\Http\Controllers\TicketReportController;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'tickets/report',
    'middleware' => 'api'
], function ($router) {
    Route::get("/year-available",[TicketReportController::class,"checkAvailableYears"]);
    Route::get("/month-available",[TicketReportController::class,"checkAvailableMonths"]);
    Route::get("/day-available",[TicketReportController::class,"checkAvailableDays"]);
});
