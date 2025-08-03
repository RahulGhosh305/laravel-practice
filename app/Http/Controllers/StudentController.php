<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    function showStudentList () {
        return "Student List";
    }

    function addStudent () {
        return "Add Student";
    }
}
