<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FreeController extends Controller
{
    public function fizzbuzz(Request $request){

        $value = $request->value;

        $start = 1;
        $result = [];
        while($start <= $value){

            if(($start % 3) == 0 && ($start % 5) == 0){
                $result[] = "$start : 'Fizz Buzz'";
            }elseif(($start % 3) == 0){
                $result[] = "$start : 'Fizz'";
            }elseif (($start % 5) == 0){
                $result[] = "$start : 'Buzz'";
            }else {
                $result[] = $start;
            }

            $start = $start + 1;
        }

        return view('fizzbuzz')->with([
            'result' => $result,
        ]);
    }
}
