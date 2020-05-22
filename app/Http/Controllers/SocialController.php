<?php

namespace App\Http\Controllers;

use App\Notifications\AccountCreated;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Contracts\Validation\Validator, Illuminate\Support\Facades\Redirect, Illuminate\Support\Facades\Response, phpDocumentor\Reflection\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;
use Laravel\Socialite\Facades\Socialite;
use App\User;

/**
 * Class SocialController
 * @package App\Http\Controllers
 */
class SocialController extends Controller
{

    /**
     * @param $provider
     * @return mixed
     */
    public function redirect($provider)
    {
        return Socialite::driver($provider)->stateless()->redirect();
    }

    /**
     * @param $provider
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function callback($provider)
    {
        try {
            $getInfo = Socialite::driver($provider)->stateless()->user();

        } catch (\Exception $e) {

            return redirect('/login');
        }

        $existingUser = User::where('email', $getInfo->email)->first();

        if($existingUser){

            auth()->login($existingUser, true);
        } else {
            $info = base64_encode(serialize($getInfo));
            Session::put('oauth',$info);
            return redirect()->route('auth.showform', [
                'provider' => $provider
            ]);
        }

        return Session::get('url.intended') == null ? redirect()->to('/'): redirect()->to(Session::get('url.intended'));


    }

    /**
     * @param $getInfo
     * @param $provider
     * @return mixed
     */
    function createUser($getInfo, $provider,$account_type){


            $user = User::create([
                'name'     => $getInfo->name,
                'email'    => $getInfo->email,
                'provider' => $provider,
                'provider_id' => $getInfo->id,
                'account_type' => $account_type
            ]);

        return $user;
    }

    public function finalise(Request $request){

        $request->validate([
            'account_type' => ['required',Rule::in(['candidate', 'employer'])],
            'provider' => ['required','string'],
        ]);

        $user = $this->createUser(unserialize(base64_decode(Session::get('oauth'))),$request->get('provider'),$request->get('account_type'));
        event(new Registered($user));
        Session::forget('oauth');
        auth()->login($user);
        return Session::get('url.intended') == null ? redirect()->to('/'): redirect()->to(Session::get('url.intended'));
    }

    public function showform($provider){

        return view('auth.finalise',compact('provider'));
    }

}
