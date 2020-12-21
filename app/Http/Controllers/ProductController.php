<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //商品名とcategory_idで product_idをとってくる
    public function serch(Request $request){
        if($request->search != null)
        {
            $search = $request->search;
            $query = product::Product($search)->get();
            //$query = product::where('product_name', 'like', "%$search%")->get();
            //dd($search);
            return $query;
        }
        return 'その商品は在りません';
    }

    //product_id から 商品名とcategory_id をとってくる
    // public function get_by_id(Request $request)
    // {
    //     if($request->id)
    //     {
    //         $product_id = product::query()->where('product_id', $request->id)->get();
    //         return $product_id;
    //     }
    // }
}
