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
                DB::table('orders')->where('id', '=', $req->input('id_cancel'))->update(['status'=>'Отменен']);
                $data = json_decode(DB::table('orders')->get(), true);
                return view('practice.exampleOneAdminka', ['status'=>'successfully', 'data'=>$data]);
            }
            elseif($req->input('id_confirm') != null)
            {
                DB::table('orders')->where('id', '=', $req->input('id_confirm'))->update(['status'=>'Подтверждён']);
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
// # DODELAT'(MNE LEN' :C)
    public function exampleOneAdminAdd(Request $req){
        $data = json_decode(DB::table('category')->get(), true);
        if($req->input('name') != "")
        {
            // if(isset($data[$req->input('category') )
            DB::insert('insert into products (name, img_path, antagonists, category, price, quantity)')
        }
        return view('practice.exampleOneAdminAdd');
    }

    public function exampleOneCatalog(Request $req)
    {
        $sort = $req->input('sorted');
        if($sort == null)
        {
            $sort = "products.created_at";
        }
        elseif ($sort == "date") {
            $sort = "products.created_at";
        }
        elseif ($sort == "publisher") {
            $sort = "categories.name";
        }
        else{
            $sort = "products.".$sort;
        }
        $optionSorted = $req->input('optionSorted');
        if($optionSorted == null)
        {
            $optionSorted = "asc";
        }
        $sortCategory = $req->input('categorySorted');
        if($sortCategory == "Все")
        {
            $data = json_decode(DB::table('products')->join('categories', 'categories.id', '=', 'id_category')->where('quantity', '>', '0')->select("products.id", "products.name", "products.created_at", "products.img_path", "products.antagonists", "products.price", "products.quantity", "categories.name as categoryName")->orderBy($sort, $optionSorted)->get(), true);
        }
        elseif($sortCategory != null){
            $data = json_decode(DB::table('products')->join('categories', 'categories.id', '=', 'id_category')->where('quantity', '>', '0')->where('categories.name', '=', $sortCategory)->select("products.id", "products.name", "products.created_at", "products.img_path", "products.antagonists", "products.price", "products.quantity", "categories.name as categoryName")->orderBy($sort, $optionSorted)->get(), true);
        }
        else{
            $data = json_decode(DB::table('products')->join('categories', 'categories.id', '=', 'id_category')->where('quantity', '>', '0')->select("products.id", "products.name", "products.created_at", "products.img_path", "products.antagonists", "products.price", "products.quantity", "categories.name as categoryName")->orderBy($sort, $optionSorted)->get(), true);
        }
        $dataCategories = json_decode(DB::table('categories')->get(), true);
        return view('practice.exampleOneCatalog', ['data'=>$data, 'dataCategories'=>$dataCategories, 'sort'=>$sort, 'optionSorted'=>$optionSorted, 'sortCategory'=>$sortCategory]);
    }

    public function exampleOneCatalogId(Request $req, $id)
    {
        $data = json_decode(DB::table('products')->join('categories', 'categories.id', '=', 'id_category')->select("*", "products.name", "categories.name as categoryName")->where("products.id", "=", $id)->get(), true);
        return view('practice.exampleOneCatalogId', ['data'=>$data, 'id'=>$id]);
    }

    public function exampleOneGeolocation()
    {
        return view('practice.exampleOneGeolocation');
    }
}
