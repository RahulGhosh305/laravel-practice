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

    function editStudent () {
        return "Edit Student";
    }

    function deleteStudent ($id) {
        return "Delete Student ". $id;
    }
}
