<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class StudentController extends Controller
{
    public function registerForm(){
        return view('Annunziata/student');
    }


    public function saveStudent(Request $request)
    {

        $request->validate([
            'studentnumber' => 'required|unique:students,student_number',
            'studentname' => 'required:students,student_name',
            'dateofbirth' => 'required:students,date_of_birth',
            'address' => 'required:students,address'
        ]);

        $student = new Student();
        $student->student_number = $request->studentnumber;
        $student->student_name = $request->studentname;
        $student->date_of_birth = $request->dateofbirth;
        $student->address = $request->address;
        $student->created_at = now();
        $student->save();
        return Redirect::back();
    }
}
