<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('introduction');
    }

    public function main_page()
    {
        return view('main_page');
    }

    public function sitemap_page()
    {
        return view('help/sitemap_page');
    }

    public function about_page()
    {
        return view('help/about_page');
    }

    public function user_profile()
    {
        return view('user/user_profile');
    }

    public function participating_club()
    {
        return view('user/participating_club');
    }

    public function participating_club__free()
    {
        return view('user/participating_club__free');
    }

    public function creator_info()
    {
        return view('user/creator_info');
    }

    public function account_setting()
    {
        return view('user/account_setting');
    }

    public function profile_edit()
    {
        return view('user/profile_edit');
    }

    public function invite_friend()
    {
        return view('user/invite_friend');
    }

    public function coin_charge()
    {
        return view('user/coin_charge');
    }

    public function what_register()
    {
        return view('user/what_register');
    }

    public function user_coin_balance()
    {
        return view('user/user_coin_balance');
    }

    public function user_coin_history()
    {
        return view('user/user_coin_history');
    }
    
}
