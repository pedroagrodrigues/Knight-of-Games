<?php

namespace App\Http\Controllers;

use App\User;
use App\Social;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    private $GOOGLE_ID = 1;
    private $FACEBOOK_ID = 2;
    private $TWITTER_ID = 3;
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider($provider)
    {
        //dd("FUNCIONA AQUI");
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        $date = date('Y-m-d H:i:s');
        //dd("FUNCIONA AQUI FILHO DA PUTA!");
        try{
            //The stateless disables the session state verification
            $user = Socialite::driver($provider)->stateless()->user(); 
            //return $user->token;
        }
        catch(\Exception $e){
            return redirect('/login');
        }

        // $authUser = findOrCreateUser($user, $provider);
        // Auth::login($authUser, true);
        // return redirect('/home');
    }

    public function findOrCreateUser($user, $provider)
    {
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
            ]);
            //echo "Will create a user<br>";

            /**
             *  Calling the table users_has_social
             * */ 
            if ($provider == 'google')
            {
                $google_provider = Social::find($GOOGLE_ID);
                $user->getSocialsFromUser()->attach($google_provider);
                //echo "With the google provider<br>";

            }
            else if ($provider == 'facebook')
            {
                $facebook_provider = Social::find($FACEBOOK_ID);
                $user->getSocialsFromUser()->attach($facebook_provider);
                //echo "With the facebook provider<br>";
            }
            else if ($provider == 'twitter')
            {
                $twitter_provider = Social::find($TWITTER_ID);
                $user->getSocialsFromUser()->attach($twitter_provider);
                //echo "With the twitter provider<br>";
            }
        }
        return $findUser;
    }
}
