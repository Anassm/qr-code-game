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


        if($checkstudent == null){
            return redirect('/login')->with('loginerror', 'Uw heeft een verkeerd studentnummer ingevuld check of het begint met D...');
        }
        else{
            $request->session()->put('studentid', $checkstudent->id);
            $request->session()->put('studentfirstname', $checkstudent->firstname);
            $request->session()->put('studentlastname', $checkstudent->lastname);
            $student = students::first();

            return view('play')->with(array(
                'checkstudent' => $checkstudent,
                'student' => $student
            ));
        }
    }

    public function resultaat(Request $request){
        $studentid = $request->session()->get('studentid');

        $students = students::all()->where('id', $studentid)->first();
        
        $scores = score::all()->where('students_id',$studentid)->first();

        return view('score')->with(array(
            'scores' => $scores,
            'students' => $students
        ));
    }
}
