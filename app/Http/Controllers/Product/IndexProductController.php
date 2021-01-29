<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexProductController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke(Request $request)
    {
        $category_id_list = $request->query('category_id');

        // 商品一覧
        $products = Product::query();

        // カテゴリで絞り込む
        if ($category_id_list) {
            $products->whereIn('category_id', $category_id_list);
        }

        return response()->json(
            $products->get()
        );
    }
}
