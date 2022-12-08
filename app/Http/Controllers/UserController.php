<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class UserController extends Controller
{
    public function welcome(Request $request)
    {
        // $ip = $request->ip();
        // $ip = '162.159.24.227'; // testing ip address of canada
        $ip = '103.177.246.186'; // testing ip address of bd
        $UserLocation = Location::get($ip);
        return view('welcome',compact('UserLocation'));
    }
}
