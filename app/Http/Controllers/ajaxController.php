<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
use App\Test;

class ajaxController extends Controller
{
    function getdrbycode(Request $request){
        if(Doctor::where('id', $request->drCode)->exists()){
            $dr = Doctor::where('id', $request->drCode)->get()->first();
            return response()->json(array('dr'=> $dr->name), 200);
        }
        else{
            return response()->json(array('dr'=> 'No doctor found with this dr code('.$request->drCode.').'), 200);
        }
    }

    function gettestbycode(Request $request){
        if(Test::where('test_id', $request->tcode)->exists()){
            $test = Test::where('test_id', $request->tcode)->get()->first();
            return response()->json(array('name'=> $test->tname, 'rday' => $test->rday, 'rate' => $test->rate), 200);
        }
        else{
            return response()->json(array('name'=> 'No test found with this dr code ('.$request->tcode.').'), 200);
        }
    }
}
