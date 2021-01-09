<?php

namespace App\Http\Controllers;

use App\Models\CategoryTree;
use Illuminate\Http\Request;

class CategoryTreeController extends Controller
{
    //category_top(parent_idとchild_idが同じ)を返す。
    public function category_top()
    {
        $category_top = CategoryTree::whereColumn('parent_id', '=', 'child_id')->get();
        return $category_top;
    }
}
