<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Socialite;

class loginController extends Controller
{
    function getLogin(){
        return view("frontend.login.login");
    }
    function getAccount(){
        return view("frontend.login.newaccount");
    }

    public function getInfo()
    {
        // $social = 'facebook';
        return Socialite::driver('facebook')->redirect();
    }

    // public function checkInfo ()
    // {
    //     // $user = Socialite::drive($provider)->user();
    //     $user = Socialite::driver($provider)->user();
    //     dd($user);
    // }
}
