<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use App\Models\Schedule;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hospitals = Hospital::with(['times', 'bloodTypes'])->get();

        return response($hospitals);
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
        $hospital = new Hospital();
        $hospital->name = $request->name;
        $hospital->phone_number = $request->phone_number;
        $hospital->location_x = $request->location_x;
        $hospital->location_y = $request->location_y;
        $hospital->code = str_random(4);
        $hospital->blood_necessity_id = $request->blood_necessity_id;
        $hospital->blood_type_id = $request->blood_type_id;
        $hospital->save();

        return response()->json(true);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function show(Hospital $hospital)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function edit(Hospital $hospital)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hospital $hospital)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hospital $hospital)
    {
        //
    }

    public function getSchedule()
    {
        $schedules = Schedule::with(['donor', 'hospital'])->whereDate('time', Carbon::tomorrow())
            ->get();

        return response($schedules);
    }
}
