<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScoreController extends Controller
{
    public function UpdateScore(Request $request)
    {
        $request->validate([
            'score'=>'required'

        ]);
    }
}
