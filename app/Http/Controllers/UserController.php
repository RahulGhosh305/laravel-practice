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

    function addUser (Request $req) {
        $req->validate([
            // default message write here
            'username'=>'required | min:3 | max:10 | uppercase',
            'password'=>'required',
            'email'=>'required | email',
            'gender'=>'required',
            'city'=>'required',
        ],[
            // custom message write here
            'username.required'=>"user name can not be empty", 
            'username.min'=>"user name can not be less than 3",
            'username.max'=>"user name can not be more than 10",
            'username.uppercase'=>"username must be uppercase",
            'email.email'=> "not a valid email"

        ]);
        return $req;
    }
}
