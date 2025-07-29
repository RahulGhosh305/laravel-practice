<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

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
         if(View::exists('admin.login')) {
            return view('admin.login');
         }else {
            echo 'No Page Found';
         }
       
    }

    function userHome () {
        $mainUser = "G";
        $users = ["R", "G", "J"];
        return view('test', ['mainUser' => $mainUser, 'users' => $users]);
    } 
}
