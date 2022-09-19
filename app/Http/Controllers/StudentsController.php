<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\students;

class StudentsController extends Controller
{
    //
    public function students(){
        $students = students::all();

        return view('play')->with(compact('students'));
    }
}
