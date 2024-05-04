<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class frontendController extends Controller
{
    public function welcome()
    {
        $students = Student::all(); // retrieves all records from the "students" table 
        return view('welcome', compact('students'));
    }
    public function register()
    {
        return view('register');
    }
}
