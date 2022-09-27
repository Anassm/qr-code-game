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
        $scoreInput = $request->get('score');

        if($scoreInput == 1){
            $updateScore = 
        }

    }
}
