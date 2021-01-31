<?php

namespace App\Http\Controllers\Receipt;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\PurchaseDetail;
use App\Models\Shop;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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
            'records' => 'required',
            'records.*.value' => 'required|integer',
            'records.*.name' => 'required|string',
            'records.*.categoryId' => 'required|integer'
        ]);

        $shop = Shop::query()
            ->where('name', $request->storeName)
            ->first();

        if (!$shop) {
            //TODO 番号検索
            $response = Http::get(config('app.place_api') . $request->phoneNumber);
            $candidate = $response["candidates"][0];

            $shop = Shop::query()->where('id', $candidate["place_id"])->first();
        }

        foreach ($request->records as $record) {
            // モデルに各項目を埋める
            $purchase_detail = new PurchaseDetail();
            $product = Product::query()
                ->where('category_id', $record['categoryId'])
                ->where('name', $record["name"])
                ->first();

            $purchase_detail->fill([
                'shop_id' => $shop->id,
                'price' => $record["value"],
                'date' => Carbon::createFromFormat(
                    'Y年m月d日',
                    $request->purchaseDate
                ),
            ]);

            // 商品が見つからなかったとき
            if ($product == null) {
                // 正規化
                $response = Http::asForm()->post(config('app.analysis_api'), [
                    'word' => $record["name"]
                ]);

                // 検索
                $product = Product::query()
                    ->where('category_id', $record['categoryId'])
                    ->where('name', $response->body())
                    ->first();

                // 正規化した商品名でも満つからなかっとき商品を登録
                if ($product == null) {
                    $product = Product::query()->create([
                        'name' => $response->body(),
                        'category_id' => $record['categoryId']
                    ]);
                }

                // 商品IDを埋め込む
                $purchase_detail->fill([
                    'product_id' => $product->id
                ]);
            }

            $purchase_detail->save();
        }

        // 成功レスポンスを返す
        return response()->json(["message" => 'success']);
    }
}
