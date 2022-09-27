<?php

namespace App\Http\Controllers;

use App\Models\score;
use Illuminate\Http\Request;
use App\Models\students;

class StudentsController extends Controller
{
    //
    public function students(){
        $student = students::first();
        return view('play')->with(compact('student'));
    }
    public function Checkstudentnr(Request $request){
        $score = score::all();
        $txtstudentnr = $request->get('studententnr');
        $checkstudent = students::all()->where('studentnumber', $txtstudentnr)->first();

        if($checkstudent == null){
            return redirect('/login')->with('loginerror', 'Uw heeft een verkeerd studentnummer ingevuld check of het begint met D...');
        }
        else{
            if(score::find($checkstudent->id)==null){
                $score = new score();
                $score->students_id = $checkstudent->id;
                $score->save();  
                
            }else{
                return redirect('/login')->with('loginerror', 'Uw heeft dit spel al gespeeld u kunt niet nog een keer spelen.');

            }
            return redirect('/play'); 
        }
    }
    public function resultaat(){
        $students = students::all();
        $scores = score::all();
        return view('score')->with(array(
            'scores' => $scores,
            'students' => $students
        ));
    }
}
