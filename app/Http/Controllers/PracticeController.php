<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Cookie;

class PracticeController extends Controller
{
    public function exampleOne(Request $req)
    {
        if($req->isMethod('Post') )
        {
            if($req->input('login') == "admin" and $req->input('password') == "admin88")
            {
                Cookie::Queue('auth', 1);
                $data = json_decode(DB::table('orders')->get(), true);
                return view('practice.exampleOneAdminka', ['status'=>'successfully', 'data'=>$data]);
            }
            else
            {
                return view('practice.exampleOneAdminka', ['status'=>"error"]);
            }
        }
        elseif($req->isMethod('Get') and $req->cookie('auth') == 1)
        {
            if($req->input('id_cancel') != null)
            {
                DB::table('orders')->update(['status'=>'Отменен']);
                $data = json_decode(DB::table('orders')->get(), true);
                return view('practice.exampleOneAdminka', ['status'=>'successfully', 'data'=>$data]);
            }
            elseif($req->input('id_confirm') != null)
            {
                DB::table('orders')->update(['status'=>'Подтверждён']);
                $data = json_decode(DB::table('orders')->get(), true);
                return view('practice.exampleOneAdminka', ['status'=>'successfully', 'data'=>$data]);
            }
            else
            {
                $data = json_decode(DB::table('orders')->get(), true);
                return view('practice.exampleOneAdminka', ['status'=>'successfully', 'data'=>$data]);
            }
        }
        else
        {
            return view('practice.exampleOneAdminka');
        }
    }

    public function exampleOneCatalog(Request $req)
    {
        $data = json_decode(DB::table('products')->get(), true);
        return view('practice.exampleOneCatalog', ['data'=>$data]);
    }

}
