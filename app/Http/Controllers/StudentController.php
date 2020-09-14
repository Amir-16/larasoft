<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function all(){
        $students = Student::all(); //select * from students
        return view('students',['data'=>$students]);

    }
}
