<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function user(){
        return view('jobsheet2.user')
            ->with('id', '23')
            ->with('name', 'Wardanadira Pinkan Dwiyuwanda');
    }
}