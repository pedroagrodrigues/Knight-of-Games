<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inside\SteamspyApi\Steamspy;

class GeneralController extends Controller
{
    public function retrieveSteamSpyTop100InTwoWeeks()
    {
        $url = "https://steamspy.com/api.php?request=top100in2weeks";
        $data = file_get_contents($url);
        $games = json_decode($data);

        return view('example', ['games' => $games]);
    }

    public function retrieveSteamSpyTop100Forever()
    {
        $url = "https://steamspy.com/api.php?request=top100forever";
        $data = file_get_contents($url);
        $games = json_decode($data);

        return view('example', ['games' => $games]);
    }
}
