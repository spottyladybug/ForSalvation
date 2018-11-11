<?php

namespace App\Http\Controllers;

use App\Models\BloodNecessity;
use Illuminate\Http\Request;

class BloodNecessityController extends Controller
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
        $blNess = new BloodNecessity();
        $blNess->monday = $request->monday;
        $blNess->tuesday = $request->tuesday;
        $blNess->wensday = $request->wensday;
        $blNess->thursday = $request->thursday;
        $blNess->friday = $request->friday;
        $blNess->saturday = $request->saturday;
        $blNess->sunday = $request->sunday;
        $blNess->save();

        response()->json(true);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BloodNecessity  $bloodNecessity
     * @return \Illuminate\Http\Response
     */
    public function show(BloodNecessity $bloodNecessity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BloodNecessity  $bloodNecessity
     * @return \Illuminate\Http\Response
     */
    public function edit(BloodNecessity $bloodNecessity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BloodNecessity  $bloodNecessity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BloodNecessity $bloodNecessity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BloodNecessity  $bloodNecessity
     * @return \Illuminate\Http\Response
     */
    public function destroy(BloodNecessity $bloodNecessity)
    {
        //
    }
}
