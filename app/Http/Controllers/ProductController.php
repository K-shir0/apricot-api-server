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
            // $query= product::query();
            $search = $request->search;
            // $query -> where('product_name', 'LIKE', "%$search%");
            $query = product::ofType('$search')->get();
            dd($query);
            //$query ->where('category_id', $request->category_id)->Where('product_name', $request->name)->get();
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
