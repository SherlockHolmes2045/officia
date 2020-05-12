<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Contracts\Validation\Validator, Illuminate\Support\Facades\Redirect, Illuminate\Support\Facades\Response, phpDocumentor\Reflection\File;
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
            /*$user = $this->createUser($getInfo, $provider);
            auth()->login($user);*/
            /*return redirect()->route('auth.finalise',[
                'provider_id' => $getInfo->id,
                'provider' => $provider
            ]);*/
            $info = serialize($getInfo);
            return view('auth.finalise',compact('info','provider'));
        }

        return redirect()->to('/home');

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
            'getInfo' => ['required','string']
        ]);

        $user = $this->createUser(unserialize($request->get('getInfo')),$request->get('provider'),$request->get('account_type'));
        event(new Registered($user));
        auth()->login($user);
        return redirect()->to('/home');
    }

}
