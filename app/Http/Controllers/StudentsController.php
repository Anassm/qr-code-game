<?php

namespace App\Http\Controllers;

use App\Models\score;
use Illuminate\Http\Request;
use App\Models\students;
use Cookie;
use Tracker;
use Session;


class StudentsController extends Controller
{
    //

    public function Checkstudentnr(Request $request){
        $txtstudentnr = $request->get('studententnr');
        $checkstudent = students::all()->where('studentnumber', $txtstudentnr)->first();

        $request->session()->put('studentid', $checkstudent->id);
        
        if($checkstudent == null){
            return redirect('/login')->with('loginerror', 'Uw heeft een verkeerd studentnummer ingevuld check of het begint met D...');
        }
        else{
            $student = students::first();

            return view('play')->with(array(
                'checkstudent' => $checkstudent,
                'student' => $student
            ));
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
