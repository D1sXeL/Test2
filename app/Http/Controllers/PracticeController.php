<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Cookie;

class PracticeController extends Controller
{
    public function exampleOneIndex()
    {
        $data = json_decode(DB::table('products')->orderBy('created_at', 'asc')->limit(5)->get(), true);

        return view('practice.exampleOneIndex', ['data'=>$data]);
    }

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
        $sort = $req->input('sorted');
        if($sort == null)
        {
            $sort = "created_at";
        }
        elseif ($sort == "date") {
            $sort = "created_at";
        }
        $optionSorted = $req->input('optionSorted');
        if($optionSorted == null)
        {
            $optionSorted = "asc";
        }
        $data = json_decode(DB::table('products')->where('quantity', '>', '0')->orderBy($sort, $optionSorted)->get(), true);
        return view('practice.exampleOneCatalog', ['data'=>$data, 'sort'=>$sort, 'optionSorted'=>$optionSorted]);
    }

    public function exampleOneCatalogId(Request $req, $id)
    {
        $data = json_decode(DB::table('products')->get()->where("id", "=", $id), true);
        return view('practice.exampleOneCatalogId', ['data'=>$data, 'id'=>$id]);
    }

    public function exampleOneGeolocation()
    {
        return view('practice.exampleOneGeolocation');
    }
}
