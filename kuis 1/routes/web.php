<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\D0224043Controller;

Route::get('/',[D0224043Controller::class, 'home']);
Route::get('/layanan',[D0224043Controller::class, 'layanan']);
Route::get('/kontak',[D0224043Controller::class, 'kontak']);
