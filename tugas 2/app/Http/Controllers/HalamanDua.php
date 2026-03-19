<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class HalamanDua extends Controller{
    public function promo(){
        return view('promo');
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }
}