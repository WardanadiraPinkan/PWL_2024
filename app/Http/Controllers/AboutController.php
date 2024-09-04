<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        $nama = "Wardanadira Pinkan Dwiyuwanda"; 
        $nim = "2241760116"; 
        return "Nama: $nama, NIM: $nim";
    }
}
