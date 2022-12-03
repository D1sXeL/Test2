<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public function exampleOne(Request $req)
    {
        if($req->isMethod('Post'))
        {
            return view('practice.exampleOneAdminka', ['data'=>$req->all()]);
        }
        else{
            return view('practice.exampleOneAdminka');
        }
    }
}
