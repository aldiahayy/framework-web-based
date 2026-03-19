<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HalamanSatu;
use App\Http\Controllers\HalamanDua;

Route::get('/', [HalamanSatu::class, 'home']);
Route::get('/menu', [HalamanSatu::class, 'menu']);
Route::get('/gallery', [HalamanSatu::class, 'gallery']);
Route::get('/promo', [HalamanDua::class, 'promo']);
Route::get('/about', [HalamanDua::class, 'about']);
Route::get('/contact', [HalamanDua::class, 'contact']);