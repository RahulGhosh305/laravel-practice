<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function getUser() {
        return "Learn Laravel"; 
    }

    function getDetails() {
        // return "User Details";
        return view('user');
    }

    function getFullDetails($name) {
        // return "User Details ". $name;
        return view('userDetails', ['name' => $name]);
    }

     function adminLogin() {
        return view('admin.login');
    }
}
