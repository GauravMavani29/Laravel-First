<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    public function index()
    {
        $user = ['gaurav','artik','prit'];
        return view('user.header').view('user.index',['users'=>$user]).view('user.footer');
    }
    public function about()
    {
        return view('user.header').view('user.about').view('user.footer');
    }
    public function services()
    {
        return view('user.header').view('user.service').view('user.footer');
    }
}
