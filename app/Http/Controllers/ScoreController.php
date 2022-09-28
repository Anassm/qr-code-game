<?php

namespace App\Http\Controllers;

use App\Models\score;
use Illuminate\Http\Request;

class ScoreController extends Controller
{
    public function Createscore(){
        
    }
    public function UpdateScore(Request $request)
    {
        $request->validate([
            'score'=>'required'

        ]);
        // $studid = score::all()->where('id',1);
        $studentid = $request->session()->get('studentid');
        $scoretabel = score::all()->where('students_id',$studentid)->first();
        $aantal = (int)$scoretabel->aantal;
        $studentid = $request->get('hiddenid');
        $scoreInput = $request->get('score');

        if($scoreInput == 1){
            $updateScore =  $aantal + 1;
            $scoretabel->aantal = $updateScore;
            $scoretabel->save();
            return redirect('/student/'.$studentid);
        }else{
            return redirect('/student/'.$studentid);

        }

    }
}
