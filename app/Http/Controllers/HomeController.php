<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        $role=Auth::user()->role;

        if ($role== "1"){
            return view("admin.user.dashboard");
        }

        if ($role== "2"){
            return view("admin.AgriExpert");
        }
        if ($role== "3"){
            return view("admin.fianciaal");
        }

        else {
            return view("user.dashboard");
        }
    }
}
