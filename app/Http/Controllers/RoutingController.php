<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoutingController extends Controller
{
    //
    public function adminpage(){
        return view('admin');
    }

    public function messagepage(){
        return view('message');    }
}
