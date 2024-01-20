<?php
use App\Http\Controllers\StatisticController;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'statistics',
    'middleware' => 'auth:api'
], function ($router) {
    Route::get("/main-data/get",[StatisticController::class,"getMainStatistic"]);
    Route::get("/last-half-year-tickets/get",[StatisticController::class,"getLastHalfYearTicketSold"]);
});
