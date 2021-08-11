<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        $schedule = Schedule::first();

        return response([
            'name' => $schedule->user->name,
            'book' => $schedule->book->name,
            'date' => $schedule->date
        ]);
    }
}
