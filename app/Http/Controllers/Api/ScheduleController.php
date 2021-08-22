<?php

namespace App\Http\Controllers\Api;

use App\Models\Schedule;
use App\Http\Resources\ScheduleResource;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $schedule = Schedule::All();
        return ScheduleResource::collection($schedule);
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
        $schedule = new Schedule;
        $schedule->speciality_id = $request->input('speciality_id');
        $schedule->date = $request->input('date');
        
        if($schedule->save()){
            return new ScheduleResource($schedule);

        }
    }

    /**
     * Display the specified resource.
     *
     */
    public function show($id)
    {
        $schedule = Schedule::find($id);
        return new ScheduleResource($schedule);
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request)
    {
        $schedule = Schedule::find($request->id);
        $schedule->speciality_id = $request->input('speciality_id');
        $schedule->date = $request->input('date');
        
        if($schedule->save()){
            return new ScheduleResource($schedule);
            
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy($id)
    {
        $schedule = Schedule::find($id);
        if ($schedule->delete()){
            return new ScheduleResource($schedule);

        }
    }
}
