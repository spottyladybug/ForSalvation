<?php

namespace App\Http\Controllers;

use App\Models\BloodType;
use App\Models\WorkingSchedule;
use Illuminate\Http\Request;

class WorkingScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        for ($day = 1; $day <= 7; $day++){
            $working_shedule = new WorkingSchedule();
            $working_shedule->id_hospital = $request->id_hospital;
            $working_shedule->start = $request->start;
            $working_shedule->finish = $request->finish;
            $working_shedule->day = $day;
            $working_shedule->count = $request->count;
            $working_shedule->save();
        }

        $blood_types = new BloodType();
        $blood_types->monday = $request->monday;
        $blood_types->tuesday = $request->tuesday;
        $blood_types->wednesday = $request->wednesday;
        $blood_types->thursday = $request->thursday;
        $blood_types->friday = $request->friday;
        $blood_types->saturday = $request->saturday;
        $blood_types->sunday = $request->sunday;

        return response()->json(true);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WorkingSchedule  $workingSchedule
     * @return \Illuminate\Http\Response
     */
    public function show(WorkingSchedule $workingSchedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WorkingSchedule  $workingSchedule
     * @return \Illuminate\Http\Response
     */
    public function edit(WorkingSchedule $workingSchedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WorkingSchedule  $workingSchedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WorkingSchedule $workingSchedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WorkingSchedule  $workingSchedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(WorkingSchedule $workingSchedule)
    {
        //
    }
}
