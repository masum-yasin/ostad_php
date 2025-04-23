<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(Request $request){

        $num1=40;
        $num2=50;
        $marks = $num1 + $num2;
        return view('home', [
            'marks'=>$marks
        ]);
    }

}
