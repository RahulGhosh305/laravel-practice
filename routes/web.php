<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controller\AdminController;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/details/{name}', function ($name) {
    return view('details', ['name' => $name]);
});

route::redirect('/home2', '/welcome');

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('user', [UserController::class, 'getUser' ]);
Route::get('/userDetails', [UserController::class, 'getDetails']);
Route::get('/userDetails/{name}', [UserController::class, 'getFullDetails']);
Route::get('/admin', [UserController::class, 'adminLogin']);



// Route::view('/about', 'about');