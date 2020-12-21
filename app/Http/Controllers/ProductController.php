<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //商品名とcategory_idで product_idをとってくる
    public function serch(Request $request){
        if($request->search != null)
        {
            $search = $request->search;
            $query1 = product::Product($search)->get();
            $query2 = Category::Category($search)->get();
            if(!$query1->isEmpty()){
                return $query1;
            }else if(!$query2->isEmpty()){
                return $query2;
            }
            return 'その商品は在りません';

        }
        return '検索ワードを書いてください';
    }
}
