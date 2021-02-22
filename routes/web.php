<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User;
use App\Http\Controllers\Form;
use App\Http\Controllers\usersController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('okay','welcome')->middleware('rnocheck'); 


Route::get('/myfirst/{id}', function($id){
    echo $id;
    return view('myfirst');
});

Route::view('', 'myfirst');

// Route::get('/home',[User::class, 'index']);
// Route::get('/about',[User::class, 'about']);
// Route::get('/service',[User::class, 'services']);
Route::put('/formSubmit',[Form::class, 'index']);
Route::view('/my_form', 'form');

Route::group(['middleware'=>['Protectedpage']],function(){
    Route::get('/home',[User::class, 'index']);
    Route::get('/about',[User::class, 'about']);
    Route::get('/service',[User::class, 'services']);
});

Route::get('/users',[usersController::class,'index']);
Route::get('/usersdata',[usersController::class,'data']);
// Route::view('sessionform','sessionform');
Route::view('sessiondata','sessiondata');
Route::post('/login',[Form::class,'loginsession']);

Route::get('sessionform', function () {
    if(session()->has('user'))
    {
        return redirect('sessiondata');
    }
    else{
        return view('sessionform');
    }
});

Route::get('removesession', function () {
    if(session()->has('user'))
    {
        session()->pull('user');
    }
    return redirect('sessionform');
});

Route::view('flashsessionform', 'user.flashsessionform');

Route::post('/flash',[Form::class,'flashsession']);