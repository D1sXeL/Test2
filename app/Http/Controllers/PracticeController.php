<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Cookie;

class PracticeController extends Controller
{
<<<<<<< HEAD
    public function index()
    {
        $data = json_decode(DB::table('products')->orderBy('created_at', 'desc')->limit(5)->get(), true);

        return view('practice.index', ['data'=>$data]);
=======
    public function index(Request $req)
    {
        $data = json_decode(DB::table('products')->orderBy('created_at', 'desc')->limit(5)->get(), true);

        if($req->has('id_delete'))
        {
            DB::table('orders')->where('id', '=', $req->input('id_delete'))->where('status', '=', 'Новый')->delete();
            return redirect('/');
        }

        $data_orders = "";
        
        if(Auth::user() != null)
        {
            $data_orders = json_decode(DB::table('orders')->join('products', 'products.id', '=', 'id_product')->select('orders.id', 'products.name', 'products.img_path', 'orders.quantity as quantity', 'status', 'reason_cancel', 'orders.updated_at')->where('id_user', '=', $req->user()->id)->orderBy('updated_at', 'asc')->get(), true);
        }
        

        return view('practice.index', ['data'=>$data, 'data_orders'=>$data_orders]);
>>>>>>> 048d722 (added README.md)
    }

    public function adminka(Request $req)
    {
        if($req->isMethod('get'))
        {
            if($req->has('id_delete_product'))
            {
                DB::table('products')->where('id', '=', $req->input('id_delete_product'))->delete();
                return redirect('/admin/');
            }
            elseif($req->has('id_edit_product'))
            {
                $data_products = json_decode(DB::table('products')->where('id', '=', $req->input('id_edit_product'))->get(), true);
                return view('practice.AdminProductEdit', ['data_products'=>$data_products]);
            }
            elseif($req->has('id_delete_category'))
            {
                DB::table('categories')->where('id', '=', $req->input('id_delete_category'))->delete();
                return redirect('/admin/');
            }
            elseif($req->has('id_edit_category'))
            {
                $data_categories = json_decode(DB::table('categories')->where('id', '=', $req->input('id_edit_category'))->get(), true);
                return view('practice.AdminCategoriesEdit', ['data_categories'=>$data_categories]);
            }
            
        }
        elseif($req->isMethod('post'))
        {
            if($req->has('id_category'))
            {
                DB::table('categories')->where('id', '=', $req->input('id_category'))->update(['name'=>$req->input('name_category')]);
            }
            elseif($req->has('id_product'))
            {
                DB::table('products')->where('id', '=', $req->input('id_product'))->update(['name'=>$req->input('name_product'), 'img_path'=>$req->input('img_path_product'), 'antagonists'=>$req->input('antagonists_product'), 'updated_at'=>$req->input('updated_at_product'), 'price'=>$req->input('price_product'), 'quantity'=>$req->input('quantity_product'), 'id_category'=>$req->input('id_category_product')]);
            }


            // $data_category = json_decode(DB::table('categories')->where('name', '=', $req->input('category'))->get(), true);
            // if(!isset($data_category[0]['name']))
            // {
            //     DB::table('categories')->where('id', '=', $req->input('id'))->update(['name'=>$req->input('category')]);
            // }

            return redirect('/admin/');
        }
        $data_categories = json_decode(DB::table('categories')->get(), true);
        $data_orders = json_decode(DB::table('orders')->get(), true);
        $data_products = json_decode(DB::table('products')->get(), true);
        
        return view('practice.Adminka', ['data_orders'=>$data_orders, 'data_products'=>$data_products, 'data_categories'=>$data_categories]);
    }

    public function adminProductAdd(Request $req){
        // $data = json_decode(DB::table('categories')->get(), true);
        // if($req->input('category') != '')
        // {
            // $data_category = json_decode(DB::table('categories')->where('name', '=', $req->input('category'))->get(), true);
            // if(isset($data_category[0]['name']))
            // {
            //     $data = json_decode(DB::table('categories')->where('name', '=', $req->input('category'))->get(), true);
            //     \App\Models\products::create(['img_path'=>$req->input('img_path'), 'name'=>$req->input('name'), 'antagonists'=>$req->input('antagonists'), 
            //     'id_category'=> $data[0]['id'], 'price'=>$req->input('price'), 'quantity'=>$req->input('quantity')]);
            //     return redirect('/admin/');
            // }
            // else
            // {
            //     DB::table('categories')->insert(['name'=>$req->input('category')]);
            //     $data = json_decode(DB::table('categories')->where('name', '=', $req->input('category'))->get(), true);
            //     \App\Models\products::create(['img_path'=>$req->input('img_path'), 'name'=>$req->input('name'), 'antagonists'=>$req->input('antagonists'), 
            //     'id_category'=> $data[0]['id'], 'price'=>$req->input('price'), 'quantity'=>$req->input('quantity')]);
            //     return redirect('/admin/');
            // }
            // DB::insert('insert into products (name, img_path, antagonists, category, price, quantity)');
        // }
        // else
        // {
        //     return view('practice.AdminAdd');
        // }
        if($req->isMethod('post'))
        {
            \App\Models\products::create(['img_path'=>$req->input('img_path'), 'name'=>$req->input('name'), 'antagonists'=>$req->input('antagonists'), 'id_category'=> $req->input('id_category'), 'price'=>$req->input('price'), 'quantity'=>$req->input('quantity')]);
            return redirect('/admin/');
        }
        return view('practice.AdminProductAdd');
    }

    public function adminCategoryAdd(Request $req)
    {
        if($req->isMethod('post'))
        {
            \App\Models\category::create(['name'=>$req->input('name')]);
            return redirect('/admin/');
        }
        return view('practice.AdminCategoryAdd');
    }

    public function catalog(Request $req)
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
<<<<<<< HEAD
            $data = json_decode(DB::table('products')->join('categories', 'categories.id', '=', 'id_category')->where('quantity', '>', '0')->select("products.id", "products.name", "products.updated_at", "products.img_path", "products.antagonists", "products.price", "products.quantity", "categories.name as categoryName")->orderBy($sort, $optionSorted)->get(), true);
        }
        elseif($sortCategory != null){
            $data = json_decode(DB::table('products')->join('categories', 'categories.id', '=', 'id_category')->where('quantity', '>', '0')->where('categories.name', '=', $sortCategory)->select("products.id", "products.name", "products.updated_at", "products.img_path", "products.antagonists", "products.price", "products.quantity", "categories.name as categoryName")->orderBy($sort, $optionSorted)->get(), true);
        }
        else{
            $data = json_decode(DB::table('products')->join('categories', 'categories.id', '=', 'id_category')->where('quantity', '>', '0')->select("products.id", "products.name", "products.updated_at", "products.img_path", "products.antagonists", "products.price", "products.quantity", "categories.name as categoryName")->orderBy($sort, $optionSorted)->get(), true); 
=======
            $data = json_decode(DB::table('products')->join('categories', 'categories.id', '=', 'id_category')->where('quantity', '>', '0')->select("products.id", "products.name", "products.created_at", "products.img_path", "products.antagonists", "products.price", "products.quantity", "categories.name as categoryName")->orderBy($sort, $optionSorted)->get(), true);
        }
        elseif($sortCategory != null){
            $data = json_decode(DB::table('products')->join('categories', 'categories.id', '=', 'id_category')->where('quantity', '>', '0')->where('categories.name', '=', $sortCategory)->select("products.id", "products.name", "products.created_at", "products.img_path", "products.antagonists", "products.price", "products.quantity", "categories.name as categoryName")->orderBy($sort, $optionSorted)->get(), true);
        }
        else{
            $data = json_decode(DB::table('products')->join('categories', 'categories.id', '=', 'id_category')->where('quantity', '>', '0')->select("products.id", "products.name", "products.created_at", "products.img_path", "products.antagonists", "products.price", "products.quantity", "categories.name as categoryName")->orderBy($sort, $optionSorted)->get(), true); 
>>>>>>> 048d722 (added README.md)
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
                $data_basket = $req->cookie('basket_id');
                $data_basket = explode('+', $data_basket);
                $data_basket = array_count_values($data_basket);

                $quantity = json_decode(DB::table('products')->where('id', '=', $req->input('basket_id'))->get(), true);
                
                if($req->cookie('basket_id') != "")
                {
<<<<<<< HEAD
                    if($data_basket[$req->input('basket_id')] < $quantity[0]['quantity'])
                    {
                    $data_basket = $req->cookie('basket_id');
                    $data_basket = $data_basket.'+'.$req->input('basket_id');
                    Cookie::Queue('basket_id', $data_basket);
                    return back()->withInput(); 
=======
                    if(isset($data_basket[$req->input('basket_id')]))
                    {
                        if($data_basket[$req->input('basket_id')] < $quantity[0]['quantity'])
                        {
                            $data_basket = $req->cookie('basket_id');
                            $data_basket = $data_basket.'+'.$req->input('basket_id');
                            Cookie::Queue('basket_id', $data_basket);
                            return back()->withInput(); 
                        }
                    }
                    else
                    {
                        $data_basket = $req->cookie('basket_id');
                        $data_basket = $data_basket.'+'.$req->input('basket_id');
                        Cookie::Queue('basket_id', $data_basket);
                        return back()->withInput();
>>>>>>> 048d722 (added README.md)
                    }
                }
                else
                {
                    Cookie::Queue('basket_id', $req->input('basket_id'));
                    return back()->withInput();
                } 
                
            }
        }

        $dataCategories = json_decode(DB::table('categories')->get(), true);
        return view('practice.Catalog', ['data'=>$data, 'dataCategories'=>$dataCategories, 'sort'=>$sort, 'optionSorted'=>$optionSorted, 
        'sortCategory'=>$sortCategory, "data_cookie"=>$data_cookie, 'data_basket'=>$req->cookie('basket_id')]);
    }

    public function catalogId(Request $req, $id)
    {
        if($req->has('basket_id'))
        {
            $data_basket = $req->cookie('basket_id');
            $data_basket = explode('+', $data_basket);
            $data_basket = array_count_values($data_basket);


            $quantity = json_decode(DB::table('products')->where('id', '=', $req->input('basket_id'))->get(), true);

            if($req->cookie('basket_id') != "")
            {
                if($data_basket[$req->input('basket_id')] < $quantity[0]['quantity'])
                {
                    $data_basket = $req->cookie('basket_id');
                    $data_basket = $data_basket.'+'.$req->input('basket_id');
                    Cookie::Queue('basket_id', $data_basket);
                    return redirect('catalog/'.$id); 
                }
            }
            else
            {
                Cookie::Queue('basket_id', $req->input('basket_id'));
                return redirect('catalog/'.$id); 
            } 
        }
<<<<<<< HEAD
        $data = json_decode(DB::table('products')->join('categories', 'categories.id', '=', 'id_category')->select("*", "products.name", "categories.name as categoryName")->where("products.id", "=", $id)->get(), true);
=======
        $data = json_decode(DB::table('products')->join('categories', 'categories.id', '=', 'id_category')->select("*", 'products.id', 'products.quantity', "products.name", "categories.name as categoryName")->where("products.id", "=", $id)->get(), true);
>>>>>>> 048d722 (added README.md)
        return view('practice.CatalogId', ['data'=>$data, 'id'=>$id]);
    }

    public function geolocation()
    {
        return view('practice.Geolocation');
    }

    public function basket(Request $req)
    {
<<<<<<< HEAD
=======
        if($req->has('id_delete'))
        {
            $data_basket = $req->cookie('basket_id');
            $data_basket = explode('+', $data_basket);
            $data_basket = array_count_values($data_basket);


            $data_basket[$req->input('id_delete')] = $data_basket[$req->input('id_delete')]-1;

            $edit_cookie = "";
            $count = 0;

            foreach($data_basket as $key=>$value)
            {
                if($count == 0 and $value != 0)
                {
                    $edit_cookie .= $key;
                    $value -= 1;  
                    $count += 1;
                }
                    
                while($value > 0)
                {
                    $edit_cookie .= '+'.$key;
                    $value -= 1;
                }
            }
            Cookie::Queue('basket_id', $edit_cookie);
            return redirect('/basket/');
        }

>>>>>>> 048d722 (added README.md)
        if($req->isMethod('post'))
        {
            if($req->has('basketButton'))
            {
                return view('practice.CheckPassword');
            }


<<<<<<< HEAD
            $data_post = $req->input('delId');
=======
            // $data_post = $req->input('delId');
>>>>>>> 048d722 (added README.md)
            $data_basket = $req->cookie('basket_id');
            $data_basket = explode('+', $data_basket);
            $data_basket = array_count_values($data_basket);

            if(Hash::check($req->has('password'), DB::table('users')->select('password')))
            {
                $data = json_decode(DB::table('products')->get(), true);

                foreach($data as $key=>$value)
                {  
                    foreach($data_basket as $key2=>$value2)
                    {
                        if($value['id'] == $key2)
                        {
                            \App\Models\orders::create(['name'=>$value['name'], 'user_id'=>auth()->id(), 'quantity'=>$value2, 'status'=>'Новый']);
                        }
                    }
                }
            }

<<<<<<< HEAD
            if(isset($data_basket[$data_post]))
            {
                $data_basket[$data_post] = $data_basket[$data_post] - 1;
            }
            $edit_cookie = "";
            $count = 0;

            foreach($data_basket as $key=>$value)
            {
                if($count == 0 and $value != 0)
                {
                    $edit_cookie .= $key;
                    $value -= 1;  
                    $count += 1;
                }
                    
                while($value > 0)
                {
                    $edit_cookie .= '+'.$key;
                    $value -= 1;
                }
            }
            Cookie::Queue('basket_id', $edit_cookie);
=======
            // if(isset($data_basket[$data_post]))
            // {
            //     $data_basket[$data_post] = $data_basket[$data_post] - 1;
            // }
            // $edit_cookie = "";
            // $count = 0;

            // foreach($data_basket as $key=>$value)
            // {
            //     if($count == 0 and $value != 0)
            //     {
            //         $edit_cookie .= $key;
            //         $value -= 1;  
            //         $count += 1;
            //     }
                    
            //     while($value > 0)
            //     {
            //         $edit_cookie .= '+'.$key;
            //         $value -= 1;
            //     }
            // }
            // Cookie::Queue('basket_id', $edit_cookie);
>>>>>>> 048d722 (added README.md)
            return redirect('/basket');
        }       

        $data_basket = $req->cookie('basket_id');
        $data_basket = explode('+', $data_basket);
        $data_basket = array_count_values($data_basket);

        
        $data = json_decode(DB::table('products')->get(), true);

        return view('practice.Basket', ['data'=>$data, 'data_basket'=>$data_basket]);
    }

    public function check(Request $req)
    {
        if($req->isMethod('post'))
        {
            $data_basket = $req->cookie('basket_id');
            $data_basket = explode('+', $data_basket);
            $data_basket = array_count_values($data_basket);

            if(Hash::check($req->input('password'), (json_decode(DB::table('users')->where('id', '=', Auth::id())->select('password')->get(), true)[0]['password'])))
            {
                $data = json_decode(DB::table('products')->get(), true);

                foreach($data as $key=>$value)
                {  
                    foreach($data_basket as $key2=>$value2)
                    {
                        if($value['id'] == $key2)
                        {
                            \App\Models\orders::create(['id_product'=>$value['id'], 'id_user'=>Auth::id(), 'quantity'=>$value2, 'status'=>'Новый']);
                            // return dd(json_decode(DB::table('products')->where('id', '=', $value['id'])->select('quantity')->get(), true)[0]['quantity']);
                            \App\Models\products::where('id', '=', $value['id'])->update(['quantity'=>(json_decode(DB::table('products')->where('id', '=', $value['id'])->select('quantity')->get(), true)[0]['quantity'])-$value2]);
                        }
                    }
                }
            }
            Cookie::Queue('basket_id', "");
            return redirect('/catalog/');
        }
        return view('practice.CheckPassword');
    }

    public function confirm(Request $req, $id)
    {
        \App\Models\orders::where('id', '=', $id)->update(['status'=>"Подтверждено", 'reason_cancel'=>'']);
        return redirect('admin');
    }

    public function cancel(Request $req, $id)
    {
        if($req->isMethod('post'))
        {
            $data_order_quantity = json_decode(DB::table('orders')->where('id', '=', $id)->get(), true);
            $data_product_quantity = json_decode(DB::table('products')->where('id', '=', $data_order_quantity[0]['id_product'])->get(), true);
            \App\Models\orders::where('id', '=', $id)->update(['status'=>"Отменено", 'reason_cancel'=>$req->input('reason')]);
            \App\Models\products::where('id', '=', $data_order_quantity[0]['id_product'])->update(['quantity'=>$data_order_quantity[0]['quantity']+$data_product_quantity[0]['quantity']]);
            return redirect('admin');
        }
        return view('practice.Cancel');
    }
}

