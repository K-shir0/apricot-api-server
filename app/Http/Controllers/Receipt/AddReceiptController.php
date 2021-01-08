<?php

namespace App\Http\Controllers\Receipt;

use App\Http\Controllers\Controller;
use App\Models\PurchaseDetail;
use App\Models\Shop;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AddReceiptController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        // バリデーション処理
        $request->validate([
            'storeName' => 'required|string',
            'phoneNumber' => 'required|string',
            'purchaseDate' => 'required|date_format:Y年m月d日',
            'records.*.value' => 'required|integer',
            'records.*.name' => 'required|string',
            'records.*.categoryId' => 'required|integer'
        ]);

        //TODO　店を特定する
        $shop = Shop::query()
            ->where("shop_name", '=', $request->storeName)
            ->firstOrFail();

        $purchase_details = [];
        foreach ($request->records as $record) {
            $purchase_detail = new PurchaseDetail();
            $purchase_detail->fill([
                'shop_id' => 1,
                'price' => $record["value"],
                'date' => Carbon::createFromFormat(
                    'Y年m月d日',
                    $request->purchaseDate
                ),
                'product_id' => 1, //TODO 商品名から商品idを取得する処理
            ]);

            $purchase_detail->append($purchase_details);
        }

        return $purchase_details;

        PurchaseDetail::query()->insert($purchase_details);

        //TODO DBに追加


        // ストアidとカテゴリを返す
    }
}
