<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Donor;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Redirect the user to the Vkontakte authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        return Socialite::with('vkontakte')->redirect();
    }

    /**
     * Obtain the user information from Vkontakte.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        if( request()->get('code') ) {
            $vkuser = Socialite::driver('vkontakte')->user();
            $user_id = $vkuser->getId();
            $idUser = User::where('vk_id', $user_id)->first();
            if (!$idUser) {
                $newUser = new User();
                $newUser->vk_id = $user_id;
                $newUser->first_name = $vkuser->user['first_name'];
                $newUser->last_name = $vkuser->user['last_name'];
                $newUser->email = $vkuser->accessTokenResponseBody['email'];
                $newUser->access_role = User::DONOR;

                //лажа по получению фотки с большим разрешением
                $request_params = array(
                    'user_id' => $user_id,
                    'fields' => 'photo_200',
                    'v' => '5.52',
                    'access_token' => $vkuser->token
                );
                $get_params = http_build_query($request_params);
                $result = json_decode(file_get_contents('https://api.vk.com/method/users.get?'. $get_params));
                $newUser->avatar = $result->response[0]->photo_200;

                $newUser->save();
                Auth::login($newUser, true);

                $donor = new Donor();
                $donor->id = $newUser->id;

            } else Auth::login($idUser, true);

            return redirect()->route('donor.show', $idUser->getQueueableId());
        }
        return redirect()->home();
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
