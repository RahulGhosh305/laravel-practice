<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('home');
});

Route::get('/url-generation', function () {
    return view('url-generation');
});


// Route::get('/about', function () {
//     return view('about');
// });

Route::get('/details/{name}', function ($name) {
    return view('details', ['name' => $name]); // Dynamic Data Pass
});

Route::redirect('/home2', '/welcome');

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('user', [UserController::class, 'getUser' ]);
Route::get('/userDetails', [UserController::class, 'getDetails']);
Route::get('/userDetails/{name}', [UserController::class, 'getFullDetails']);
Route::get('/admin', [UserController::class, 'adminLogin']);

Route::get('/test', [UserController::class, 'userHome'] );

Route::view('/user-form', 'userForm');
Route::post('/add-user', [UserController::class, 'addUser']);



// Route::view('/about', 'about', ['company' => 'BRAC IT Services']); // Static Data pass