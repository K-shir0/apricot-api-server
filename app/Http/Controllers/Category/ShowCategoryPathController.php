<?php

namespace App\Http\Controllers\Category;

use App\Category;
use App\Http\Controllers\Controller;

class ShowCategoryPathController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Category $category)
    {
        $categories = Category::query()->ancestorsWithSelfOf($category->id)->get();

        $path_string = "";

        //TOPを削除
        $categories->pop();
        foreach ($categories->reverse() as $index => $category) {
            if ($index == $categories->count() - 1)
                $path_string = $category->name;
            else
                $path_string = $path_string . " ＞ " . $category->name;
        }

        return $path_string;
    }
}
