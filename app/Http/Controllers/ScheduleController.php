<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        $result = Schedule::all(["id","schedule"]);
        return response()->json([
            "result" => $result
        ]);
    }
}
