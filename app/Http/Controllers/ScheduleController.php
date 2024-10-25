<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\schedule;

class ScheduleController extends Controller
{
    public function index(){
        return view('schedules.index');
    }

    public function create_schedule(){
        return view('schedules.create_schedule');
    }

    public function store_schedule(Request $request) {
        $data = $request->validate([
            'Pet_Name' => 'required',
            'Date_to_Feed' => 'required|date', 
            'Feed_Time' => 'required|date_format:H:i',
            'Feeding_Amount' => 'required|numeric',
        ]);
    
        

    
        $newSchedule = schedule::create($data);
        return redirect(route('schedule.index'));
    }


}
