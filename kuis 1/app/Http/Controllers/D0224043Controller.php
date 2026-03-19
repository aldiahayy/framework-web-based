<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class D0224043Controller extends Controller
{
    public function home(){
        return view('home');
    }

    public function layanan(){
        return view('layanan');
    }
    public function kontak(){
        return view('kontak');
    }
}
