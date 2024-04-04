<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    //roles

    public function index(){
        $role=Auth::user()->role->value;

        if ($role == 2){
            return view("admin.index");
        }

        if ($role== 1){
            return view("admin.index");
        }
        else {
            return view('dashboard');        }

    }

}
