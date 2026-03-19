<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class HalamanSatu extends Controller{
    public function home(){
        return view('home');
    }

    public function menu(){
        return view('menu');
    }

    public function gallery(){
        return view('gallery');
    }
}