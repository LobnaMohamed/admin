<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //Actions
    public function index(){
        $user  = 'Lobna';
        return view('dashboard.index',compact('user'));
    }
}
