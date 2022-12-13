<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Cookie;

class PracticeController extends Controller
{
    public function exampleOneIndex()
    {
        $data = json_decode(DB::table('products')->orderBy('created_at', 'desc')->limit(5)->get(), true);

        return view('practice.exampleOneIndex', ['data'=>$data]);
    }

    public function exampleOne(Request $req)
    {
        $data = json_decode(DB::table('orders')->get(), true);
        return view('practice.exampleOneAdminka', ['data'=>$data]);
    }

    public function exampleOneAdminAdd(Request $req){
        $data = json_decode(DB::table('categories')->get(), true);
        if($req->input('category') != '')
        {
            $data_category = json_decode(DB::table('categories')->where('name', '=', $req->input('category'))->get(), true);
            if(isset($data_category[0]['name']))
            {
                $data = json_decode(DB::table('categories')->where('name', '=', $req->input('category'))->get(), true);
                \App\Models\products::create(['img_path'=>$req->input('img_path'), 'name'=>$req->input('name'), 'antagonists'=>$req->input('antagonists'), 
                'id_category'=> $data[0]['id'], 'price'=>$req->input('price'), 'quantity'=>$req->input('quantity')]);
                return redirect('/admin/');
            }
            else
            {
                DB::table('categories')->insert(['name'=>$req->input('category')]);
                $data = json_decode(DB::table('categories')->where('name', '=', $req->input('category'))->get(), true);
                \App\Models\products::create(['img_path'=>$req->input('img_path'), 'name'=>$req->input('name'), 'antagonists'=>$req->input('antagonists'), 
                'id_category'=> $data[0]['id'], 'price'=>$req->input('price'), 'quantity'=>$req->input('quantity')]);
                return redirect('/admin/');
            }
            // DB::insert('insert into products (name, img_path, antagonists, category, price, quantity)');
        }
        else
        {
            return view('practice.exampleOneAdminAdd');
        }
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

        if(Auth::check())
        {
            $data_cookie = 1;
        }
        else{
            $data_cookie = 0;
        }

        if($req->isMethod('get'))
        {
            // DODELAT' :CCCC i IsPOLZOVAT' MIDDLEWARE v AUTHORIZATION
            if($req->has('basket_id'))
            {
                if($req->cookie('basket_id') != "")
                {
                    $data_basket = $req->cookie('basket_id');
                    $data_basket = $data_basket.'+'.$req->input('basket_id');
                    Cookie::Queue('basket_id', $data_basket);
                    return back()->withInput();
                }
                else
                {
                    Cookie::Queue('basket_id', $req->input('basket_id'));
                    return back()->withInput();
                }
            }
        }

        $dataCategories = json_decode(DB::table('categories')->get(), true);
        return view('practice.exampleOneCatalog', ['data'=>$data, 'dataCategories'=>$dataCategories, 'sort'=>$sort, 'optionSorted'=>$optionSorted, 
        'sortCategory'=>$sortCategory, "data_cookie"=>$data_cookie, 'data_basket'=>$req->cookie('basket_id')]);
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

    public function exampleOneBasket(Request $req)
    {
        if($req->isMethod('post'))
        {
            $data_post = $req->input('delId');
            $data_basket = $req->cookie('basket_id');
            $data_basket = explode('+', $data_basket);
            $data_basket = array_count_values($data_basket);
            $data_basket[$data_post] = $data_basket[$data_post] - 1;

            // foreach($data_basket[$data_post] != 0)
            // {
            //     // DODELAT'
            //     $cookieEdit = $data_basket;
            // }
        }       
        else
        {
            $data_basket = $req->cookie('basket_id');
            $data_basket = explode('+', $data_basket);
            $data_basket = array_count_values($data_basket);
        }

        

        
        $data = json_decode(DB::table('products')->get(), true);

        return view('practice.exampleOneBasket', ['data'=>$data, 'data_basket'=>$data_basket]);
    }
}
