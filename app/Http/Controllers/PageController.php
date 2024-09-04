<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return "Selamat Datang";
    }

    public function about()
    {
        $nama = "Wardanadira Pinkan Dwiyuwanda"; 
        $nim = "2241760116"; 
        return "Nama: $nama, NIM: $nim";
    }

    public function articles($id) {
        return 'Artikel Id :' . $id;
    }
}
