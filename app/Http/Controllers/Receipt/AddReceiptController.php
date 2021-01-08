<?php

namespace App\Http\Controllers\Receipt;

use App\Http\Controllers\Controller;
use App\Models\PurchaseDetail;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AddReceiptController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
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

        foreach ($request->records as $record) {
            // モデルに各項目を埋める
            $purchase_detail = new PurchaseDetail();

            $purchase_detail->fill([
                //TODO 仮置き
                'shop_id' => 1,
                'price' => $record["value"],
                'date' => Carbon::createFromFormat(
                    'Y年m月d日',
                    $request->purchaseDate
                ),
                'product_id' => 1, //TODO 正規化商品名(name)とカテゴリから商品idを取得する処理、なければ作成
            ]);

            // DB に追加
            $purchase_detail->save();
        }

        // 成功レスポンスを返す
        return response()->json(["message" => 'success']);
    }
}
