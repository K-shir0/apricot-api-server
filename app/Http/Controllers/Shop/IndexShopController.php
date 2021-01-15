<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Shop;
use Illuminate\Http\Request;
use Sk\Geohash\Geohash;

class IndexShopController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        // 座標
        $location = preg_split('[,]', $request->query('location'));

        $shops = Shop::query();

        if ($location && is_numeric($location[0] && is_numeric($location[1]))) {
            $g = new Geohash();
            $present_location = $g->encode($location[0], $location[1], 6);
            $neighbors = collect($g->getNeighbors($present_location))->add($present_location);
            $shops->whereIn('geo_hash', $neighbors);
        }

        return $shops->get();
    }
}
