<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home(){
        if(Auth::check()){
            return redirect("login");
        }
        else{
            return view("home");
        }
    }
}
