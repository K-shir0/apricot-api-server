<?php

namespace App\Http\Controllers\Usecase;

use App\Category;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryOrProductSearchController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke(Request $request)
    {
        $searchWord = $request->query('q');

        $products = Product::query();
        $categories = Category::query();
        if ($searchWord) {
            $products->where('name', 'like', '%' . $searchWord . '%');
            $categories->where('name', 'like', '%' . $searchWord . '%');
        }

        return response()->json([
            'products' => $products->get(),
            'categories' => $categories->get()
        ]);
    }
}
