<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\question;
use App\Models\students;

class questionController extends Controller
{

    public function questionview($question){
        $studentrecord = students::all()->where('id', $question)->firstOrFail();
        $questionrecord = question::where('student_id', $question)->firstOrFail();
        $studentsnames = students::inRandomOrder()->get();
        
        return view('guess-student', compact('questionrecord', 'studentsnames','studentrecord'));
    }

    
    
    
}
