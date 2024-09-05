<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class posController extends Controller
{
    public function penjualan(){
        return view('jobsheet2.transaksi');
    }
}