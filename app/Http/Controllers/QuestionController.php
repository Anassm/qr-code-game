<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\question;
use App\Models\students;
use Ramsey\Uuid\Type\Integer;

class questionController extends Controller
{

    public function questionview($question){
        $studentrecord = students::all()->where('id', $question)->firstOrFail();
        $questionrecord = question::where('id', $question)->firstOrFail();
        $studentsnames = students::all();
        
        return view('guess-student', compact('questionrecord', 'studentsnames','studentrecord'));
    }

    
    
    
}