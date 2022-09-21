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
    public function studentview($studid){
        $studentrecord = students::all()->where('studentnumber', $studid)->firstOrFail();
        //dd($studentrecord);
        return view('guess-student')->with(compact('studentrecord'));
    }
}
