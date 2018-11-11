<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    use AuthenticatesUsers;

    public function register (Request $request)
    {
        $user = new User();
        $user->email = $request->email;
        $user->first_name = 'doctor_' . $user->getQueueableId();
        $user->last_name = 'cool doc';
        $user->avatar = 'cool_doc_ava';
        $user->access_role = User::DOCTOR;
        $user->save();
        \Auth::login($user, true);

        $doctor = new Doctor();
        $doctor->id = $user->id;
        $doctor->login = $request->login;
        $doctor->password = \Hash::make($request->password);
        $doctor->position = 'passive';
        $doctor->save();

        return redirect()->route('doctor.show', ['id' => $doctor->id]);
    }
}
