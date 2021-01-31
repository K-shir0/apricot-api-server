<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Shop;
use Illuminate\Http\Request;

class IndexShopController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke(Request $request)
    {
        // 座標
        $location = preg_split('[,]', $request->query('location'));
        // 商品id
        $product_id_list = $request->query('product_id');
        // 店名
        $shop_name_search_strings = preg_split('[ ]', $request->query('shop_name'));

        $shops = Shop::query()->with(['purchase_details' => function ($q) use ($product_id_list) {
            if ($product_id_list) {
                $q->whereIn('product_id', $product_id_list);
            }
        }]);

        // 座標検索
//        if ($location && is_numeric($location[0]) && is_numeric($location[1])) {
//            $g = new Geohash();
//            $present_location = $g->encode($location[0], $location[1], 6);
//            $neighbors = collect($g->getNeighbors($present_location))->add($present_location);
//            $shops->whereIn('geo_hash', $neighbors);
//        }

        // 商品id 検索3
        if ($product_id_list) {

            // 商品id毎にwhereを掛ける
            foreach ($product_id_list as $product_id) {
                $shops->whereHas('purchase_details', function ($query) use ($product_id) {
                    $query->where('product_id', '=', $product_id);
                });
            }
        }

        // 店名検索
        if ($shop_name_search_strings) {
            foreach ($shop_name_search_strings as $shop_search_string) {
                $shops->where('name', 'like', "%$shop_search_string%");
            }
        }

        return response()->json($shops->get());
    }
}
