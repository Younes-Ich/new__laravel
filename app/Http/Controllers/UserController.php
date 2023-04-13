<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Route;


class UserController extends Controller
{
    public function profiel(){
        $assistant = DB::select('select * from users where isassistant = ?', [1]);
        $user=Auth::user();
        if(Route::has('login')){
        if(Auth::user()->isadmin) return view('admin',['user' => $user , 'assis'=>$assistant]);
        else{
            if(Auth::user()->isassistant) return view('assistant');
            else return view('client');
        }
    }
    else return view('login');
}
}
