<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

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

    public function handleProviderCallbackFacebook()
    {
        $date = date('Y-m-d H:i:s');
        try{
            $user = Socialite::driver($provider)->user();
        }
        catch(\Exception $e){
            return redirect('/login');
        }
        
        $findUser = User::where('email', $userSocial->email)->first();
        if (!$findUser) //if doesnt find user 
        {
            $user = User::create([
                'name' => $userSocial->name,
                'email' => $userSocial->email,
                'password' => Hash::make(12345678),
            ]);

            //Calling the table users_has_social and inserting the user_id
            if ($provider == 'google')
            {
                $google_user = Social::create([
                    'user_id' => $user->id,
                    'social_id' => $GOOGLE_ID
                ]);
            }
            else if ($provider == 'facebook')
            {
                $facebook_user = Social::create([
                    'user_id' => $user->id,
                    'social_id' => $FACEBOOK_ID
                ]);
            }
            else if ($provider == 'twitter')
            {
                $twitter_user = Social::create([
                    'user_id' => $user->id,
                    'social_id' => $TWITTER_ID
                ]);
            }
            
        }

        Auth::login($findUser);
        return redirect('/home');
    }
}
