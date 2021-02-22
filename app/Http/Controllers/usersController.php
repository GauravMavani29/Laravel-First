<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\user;
use Illuminate\Support\Facades\Http;
class usersController extends Controller
{
    function index()
    {
        print_r(DB::select("select * from users"));
        return user::all();
    }
    function data()
    {
        $collection =  Http::withOptions(['verify' => false])->get("https://reqres.in/api/users?page=1");
        return view('user.displaydata',['collection'=>$collection['data']]); 
    }
}
