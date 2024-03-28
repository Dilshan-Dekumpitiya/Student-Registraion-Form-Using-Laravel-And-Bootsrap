<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function AddStudent(){
        return view(('index'));
    }

    public function save(Request $request){
        Student::create([
            'student_name' => $request -> studentName,
            'student_email'=> $request -> email,
            'student_dob' => $request -> studentDOB,
        ]);

        $notification = [
            "message" => "student has been added"
        ];
        return redirect() -> back() -> with($notification);
    }
}
