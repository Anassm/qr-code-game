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
        $scoretabel = score::all()->where('students_id',1);
        $aantal = (int)$scoretabel->aantal;
        $scoreInput = $request->get('score');

        if($scoreInput == 1){
            $updateScore =  $aantal + 1;
            $scoretabel->aantal = $updateScore;
            $scoretabel->save();
        }

    }
}
