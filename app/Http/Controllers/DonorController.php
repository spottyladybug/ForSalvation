<?php

namespace App\Http\Controllers;

use App\Models\Donor;
use App\Models\Hospital;
use App\Models\Schedule;
use App\Models\UsersDonateBlood;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Psy\Shell;

class DonorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donor = Donor::all();

        return response($donor);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function show(Donor $donor)
    {
        return response(Donor::with('user')->where('id', $donor->id)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function edit(Donor $donor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Donor $donor)
    {
        $donor->phone_number = $request->phone_number;
        $donor->city = $request->city;
        $donor->blood_type = ($request->blood_type === null)? $request->blood_type: 0;
        $donor->save();

        return response()->json(true);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donor $donor)
    {
        //
    }

    public function setApproval(Request $request)
    {
        $approval = Hospital::where('code', $request->code)->first();

        if ($approval == null){
            return response()->json('0000');
        }

        Donor::where('id', $request->id_donor)->update(['last_donation' => date('Y-m-d H:i:s')]);
        Donor::where('id', $request->id_donor)->increment('donations', 1);

        $newBlood = new UsersDonateBlood();
        $newBlood->id_donor = $request->id_donor;
        $newBlood->all_blood = $request->all_blood? 1: 0;
        $newBlood->plazma= $request->plazma? 1: 0;
        $newBlood->save();

        Schedule::where('id', $request->id)->update(['approval' => true, 'blood_components' => $newBlood->id]);

        return response()->json(true);
    }
}
