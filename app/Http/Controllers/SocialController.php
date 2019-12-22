<?php

namespace App\Http\Controllers;

use App\User;
use App\Social;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        try{
            //The stateless disables the session state verification
            $user = Socialite::driver($provider)->stateless()->user(); 
            //return $user->token;
        }
        catch(\Exception $e){
            return redirect('/login');
        }

        $authUser = $this->findOrCreateUser($user, $provider);
        Auth::login($authUser, true);
        return redirect('/home');
    }

    public function findOrCreateUser($user, $provider)
    {
        $GOOGLE_ID = 1;
        $FACEBOOK_ID = 2;
        $TWITTER_ID = 3;

        $date = date('Y-m-d H:i:s');
    
        $findUser = User::where('email', $user->email)->first();

        /**
         *  If the user doesn't exist in the database, 
         *  creates a new user and attach the provider and user id to the user_has_role
         * */ 
        if (!$findUser) 
        {
            $user = User::create([
                'name' => $userSocial->name,
                'email' => $userSocial->email,
                'password' => Hash::make(12345678),
                'created_at' => $date,
                'updated_at' => $date
            ]);

            /**
             *  Calling the table users_has_social
             * */ 
            if ($provider == 'google')
            {
                $google_provider = Social::find($GOOGLE_ID);
                $user->getSocialsFromUser()->attach($google_provider);

            }
            else if ($provider == 'facebook')
            {
                $facebook_provider = Social::find($FACEBOOK_ID);
                $user->getSocialsFromUser()->attach($facebook_provider);
            }
            else if ($provider == 'twitter')
            {
                $twitter_provider = Social::find($TWITTER_ID);
                $user->getSocialsFromUser()->attach($twitter_provider);
            }
        }
        return $findUser;
    }
}
