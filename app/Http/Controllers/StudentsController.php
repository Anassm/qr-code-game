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
    public function Checkstudentnr(Request $request){
        $txtstudentnr = $request->get('studententnr');
        $checkstudent = students::all()->where('studentnumber', $txtstudentnr)->first();
        if($checkstudent == null){
            return redirect('/login')->with('loginerror', 'Uw heeft een verkeerd studentnummer ingevuld check of het begint met D...');
        }
        else{
            return redirect('/play');
        }
    }
}
