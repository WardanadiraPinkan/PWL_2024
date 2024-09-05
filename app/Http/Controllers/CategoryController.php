<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function homeCategory(){
        return view('jobsheet2.category');
    }

    public function foodCategory(){
        return view('jobsheet2.food');
    }

    public function beautyCategory(){
        return view('jobsheet2.beauty');
    }

    public function careCategory(){
        return view('jobsheet2.care');
    }

    public function babyCategory(){
        return view('jobsheet2.baby');
    }
}