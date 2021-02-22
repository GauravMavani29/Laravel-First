<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Form extends Controller
{
    public function index(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'password' => 'required'
        ]);
        echo "submited";
        return $req->input();
        
    }
    public function loginsession(Request $req)
    {
        $data = $req->post();
        $req->session()->put('user',$data['username']);
        return redirect('sessiondata');
    }

    public function flashsession(Request $req)
    {
        // $data = $req->input('username');
        // $req->session()->flash('user',$data);
        // return redirect('flashsessionform');
        // return $req->file('file')->store('images');
        // $ext = $req->file('file')->getClientOriginalExtension();
        // return $req->file('file')->storeAs('images','todo', $ext);
        $md5Name = md5_file($req->file('file')->getRealPath());
        $guessExtension = $req->file('file')->guessExtension();
        return $req->file('file')->storeAs('images',"todo".'.'.$guessExtension);
    }
}
