<?php

namespace App\Http\Controllers;


use App\Category;

class CategoryTreeController extends Controller
{
    //category_top(parent_idとchild_idが同じ)を返す。
    public function category_top()
    {
        $category_top = Category::query()
            ->findOrFail(1)
            ->children()
            ->get();
        return $category_top;
    }
}
