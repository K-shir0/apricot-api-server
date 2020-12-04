<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // \App\Models\Category::factory(50)->create();
        // \App\Models\Product::factory(50)->create();
        // \App\Models\Shop::factory(50)->create();
        // \App\Models\PurchaseDetail::factory(50)->create();

        \App\Models\Category::query()->insert([
            ['name' => '食料品'],
            ['name' => '野菜'],
            ['name' => 'たまねぎ'],
            ['name' => '大根'],
            ['name' => 'きゅうり'],
            ['name' => 'にんじん'],
            ['name' => 'トマト'],
            ['name' => 'キャベツ'],
            ['name' => 'ピーマン'],
            ["name" => 'アスパラガス'],
            ["name" => 'ブロッコリー'],
            ['name' => 'カリフラワー・ロマネスコ'],
            ['name' => 'セロリ'],
            ['name' => 'もやし'],
            ['name' => 'ねぎ'],
            ['name' => 'なす'],
            ['name' => 'いも類'],
            ['name' => '根菜'],
            ['name' => 'きのこ'],
            ['name' => 'おくら'],
            ['name' => 'かぼちゃ'],
            ['name' => 'とうもろこし'],
            ['name' => 'ゴーヤ'],
            ['name' => 'ズッキーニ'],
            ['name' => 'アボカド'],
            ['name' => 'うり・冬瓜'],
            ['name' => 'たけのこ'],
            ['name' => '葉もの野菜'],
            ['name' => '薬味・ハーブ'],
            ['name' => '銀杏'],
            ['name' => '豆類（野菜）'],
            ['name' => '山菜'],
            ['name' => 'パプリカ'],
            ['name' => 'ししとう'],
            ['name' => 'かいわれ大根・スプラウト'],
            ['name' => 'らっきょう'],
            ['name' => '梅の実'],
            ['name' => 'カットサラダ'],
            ['name' => 'カット野菜'],
            ['name' => '水煮野菜'],
            ['name' => 'その他（野菜）'],
            ['name' => '果物'],
            ['name' => 'いちご'],
            ['name' => 'りんご'],
            ['name' => 'オレンジ'],
            ['name' => 'グレープフルーツ'],
            ['name' => 'みかん・柑橘類'],
            ['name' => 'バナナ'],
            ['name' => 'キウイフルーツ'],
            ['name' => 'ぶどう'],
            ['name' => 'メロン'],
            ['name' => 'パイナップル'],
            ['name' => 'もも'],
            ['name' => 'さくらんぼ'],
            ['name' => 'すいか'],
            ['name' => 'イチジク'],
            ['name' => 'なし'],
            ['name' => 'びわ'],
            ['name' => 'トロピカルフルーツ'],
            ['name' => 'ザクロ'],
            ['name' => 'ベリー類'],
            ['name' => 'レモン'],
            ['name' => '柿'],
            ['name' => '栗'],
            ['name' => 'カットフルーツ'],
            ['name' => '果物セット'],
            ['name' => '魚'],
            ['name' => '鮮魚'],
            ['name' => '刺身'],
            ['name' => '漬け・酢〆魚'],
            ['name' => '干物・燻製'],
            ['name' => '蒲焼き'],
            ['name' => 'ほぐし・フレーク'],
            ['name' => 'しらす・ちりめん'],
            ['name' => '海藻類'],
            ['name' => 'シーフードミックス'],
            

            ['name' => '肉'],
            ['name' => '鶏肉'],
            ['name' => '牛肉'],
            ['name' => '豚肉'],
            ['name' => 'その他（肉）'],
            ['name' => '肉加工品'],
            ['name' => '惣菜'],
            ['name' => 'パン'],
            ['name' => '菓子パン'],
            ['name' => '食パン'],
            ['name' => '乳製品'],
            ['name' => '牛乳'],
            ['name' => 'チーズ'],
            ['name' => 'ヨーグルト'],
            ['name' => '生クリーム'],
            ['name' => 'バター・マーガリン'],
            ['name' => '甘味料'],
            ['name' => '砂糖'],
            ['name' => 'メープルシロップ'],
            ['name' => 'その他（甘味料）'],
            ['name' => '調味料'],
            ['name' => '味噌'],
            ['name' => 'ソース'],
            ['name' => '醤油'],
            ['name' => 'お酢'],
            ['name' => 'みりん'],
            ['name' => 'たれ・つゆ'],
            ['name' => 'ケチャップ・マヨネーズ'],
            ['name' => '塩'],
            ['name' => '薬味'],
            ['name' => ''],
        ]);
    }
}


