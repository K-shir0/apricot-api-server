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
            ['name' => 'もやし'],
            ['name' => 'ねぎ'],
            ['name' => 'なす'],
            ['name' => 'いも類'],
            ['name' => '根菜'],
            ['name' => 'きのこ'],
            ['name' => 'かぼちゃ'],
            ['name' => 'とうもろこし'],
            ['name' => '葉もの野菜'],
            ['name' => '豆類（野菜）'],
            ['name' => 'パプリカ'],
            ['name' => 'カットサラダ'],
            ['name' => 'カット野菜'],
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
            ['name' => 'なし'],
            ['name' => 'ベリー類'],
            ['name' => 'レモン'],
            ['name' => 'カットフルーツ'],

            ['name' => '魚'],
            ['name' => '鮮魚'],
            ['name' => 'その他（魚）'],
            
            ['name' => '肉'],
            ['name' => '鶏肉'],
            ['name' => '牛肉'],
            ['name' => '豚肉'],
            ['name' => '合いびき肉'],
            ['name' => 'その他（肉）'],

            ['name' => '肉加工品'],
            ['name' => 'ハム・ベーコン'],
            ['name' => 'ソーセージ'],
            ['name' => 'ローストビーフ'],  
            ['name' => '生ハム'],

            ['name' => '惣菜'],
            ['name' => 'お弁当'],
            ['name' => '焼き鳥'],
            ['name' => '揚げ物'],
            ['name' => 'サラダ等'],
            ['name' => '寿司'],
            ['name' => 'その他（惣菜）'],

            ['name' => 'パン・シリアル'],
            ['name' => '菓子パン'],
            ['name' => '食パン'],
            ['name' => 'シリアル'],

            ['name' => '乳製品'],
            ['name' => '牛乳'],
            ['name' => '豆乳'],
            ['name' => 'チーズ'],
            ['name' => 'ヨーグルト'],
            ['name' => '生クリーム'],
            ['name' => 'ホイップクリーム'],
            ['name' => 'バター・マーガリン'],
            
            ['name' => '冷凍食品'],
            ['name' => '冷凍麺・パスタ'],
            ['name' => '冷凍弁当おかず'],
            ['name' => '冷凍惣菜'],
            ['name' => 'その他（冷凍食品）'],
            ['name' => '卵'],																	

            ['name' => '調味料'],
            ['name' => '甘味料・砂糖'],
            ['name' => '味噌'],
            ['name' => 'ソース'],
            ['name' => '醤油'],
            ['name' => 'お酢'],
            ['name' => 'みりん'],
            ['name' => 'たれ・つゆ'],
            ['name' => 'ケチャップ・マヨネーズ'],
            ['name' => '塩'],
            ['name' => '薬味'],
            ['name' => 'ハーブ'],
            ['name' => 'スパイス'],
            ['name' => 'オイル'],
            ['name' => '料理酒'],
            ['name' => 'ドレッシング'],
            ['name' => 'その他（調味料）'],

            ['name' => '乾物'],
            ['name' => 'ごま'],
            ['name' => '昆布'],
            ['name' => 'のり'],
            ['name' => 'ふりかけ'],
            ['name' => '乾燥わかめ・ひじき'],
            ['name' => '干しもの'],
            ['name' => 'お茶漬け'],
            ['name' => '乾燥野菜'],
            ['name' => 'その他（乾物）'],

            ['name' => '粉類'],
            ['name' => '小麦粉'],
            ['name' => 'パン粉'],
            ['name' => '片栗粉'],
            ['name' => 'てんぷら粉'],
            ['name' => '唐揚げ粉'],
            ['name' => 'お好み・たこ焼き粉'],
            ['name' => 'その他（コーンスターチ等）'],

            ['name' => '缶詰'],
            ['name' => '魚類'],
            ['name' => '肉類'],
            ['name' => '野菜類'],
            ['name' => '豆類'],
            ['name' => 'キノコ類'],
            ['name' => 'フルーツ'],
            ['name' => 'ソース'],
            ['name' => 'スープ'],

            ['name' => '麺類'],
            ['name' => 'うどん'],
            ['name' => 'そうめん'],
            ['name' => 'そば'],
            ['name' => 'パスタ'],
            ['name' => 'ラーメン'],
            ['name' => 'やきそば'],
            ['name' => 'その他（冷麺等）'],

            ['name' => 'インスタント麺'],
            ['name' => 'カップラーメン'],
            ['name' => 'カップ麺（その他）'],
            ['name' => 'スープパスタ'],
            ['name' => 'その他インスタント麺'],

            ['name' => 'お菓子・スイーツ'],
            ['name' => '洋菓子'],
            ['name' => '和菓子'],
            ['name' => 'スナック'],
            ['name' => '駄菓子'],
            ['name' => 'チョコレート'],
            ['name' => 'ビスケット・クッキー・クラッカー'],
            ['name' => 'おつまみ・珍味'],
            ['name' => 'せんべい'],
            ['name' => 'ガム・アメ・ミント'],  
            ['name' => 'プリン'],
            ['name' => 'ゼリー'],
            ['name' => 'ナッツ'],
            ['name' => 'その他（お菓子）'],

            ['name' => 'レトルト'],
            ['name' => 'カレー'],
            ['name' => 'ハヤシ'],
            ['name' => 'シチュー'],
            ['name' => 'イタリアン'],
            ['name' => '中華'],
            ['name' => 'スープ・味噌汁'],
            ['name' => '米（レトルト）'],
            ['name' => 'その他（レトルト）'],

            ['name' => '米'],
            ['name' => '穀類(パン・米・麺以外)'],

            ['name' => '汁物'],
            ['name' => '味噌汁'],
            ['name' => 'スープ'],

            ['name' => '漬物'],

            ['name' => '製菓材料'],
            ['name' => '凝固剤・添加物'],
            ['name' => '製菓用ナッツ'],
            ['name' => '製菓用フルーツ'],
            ['name' => '粉類'],
            ['name' => '製菓用チョコ'],
            ['name' => 'トッピング'],

            ['name' => 'アイスクリーム'],

            ['name' => '瓶詰'],
            ['name' => 'ジャム'],
            ['name' => 'コンポート'],
            ['name' => 'チョコレート'],
            ['name' => '魚介類'],
            ['name' => '肉類'],
            ['name' => '野菜類'],
            ['name' => 'キノコ類'],
            ['name' => '豆類'],
            ['name' => '調味料'],
            ['name' => 'その他（瓶詰）'],

            ['name' => '弁当'],

            ['name' => '大豆製品'],
            ['name' => '厚揚げ'],
            ['name' => '豆腐'],
            ['name' => '納豆'],
            ['name' => 'その他（大豆製品）'],

            ['name' => 'おつまみ'],
            ['name' => 'するめ・いか'],
            ['name' => 'その他魚介類'],
            ['name' => 'サラミ'],
            ['name' => 'チーズ'],
            ['name' => 'その他（おつまみ）'],

            ['name' => 'ソフトドリンク'],
            ['name' => '果実飲料'],
            ['name' => '乳酸飲料'],
            ['name' => '炭酸飲料'],
            ['name' => 'スポーツドリンク'],
            ['name' => '健康飲料'],
            ['name' => '豆乳類'],
            ['name' => '野菜ジュース'],
            ['name' => 'その他（ソフトドリンク）'],
            ['name' => 'コーヒー'],
            ['name' => '無糖'],
            ['name' => '微糖'],
            ['name' => '低糖'],
            ['name' => 'カフェラテ等'],
            ['name' => 'レギュラー'],
            ['name' => 'インスタント（コーヒー）'],
            ['name' => '紅茶'],
            ['name' => 'インスタント（紅茶）'],
            ['name' => 'ティーバック'],
            ['name' => 'ハーブティー'],
            ['name' => 'ペットボトル（紅茶）'],
            ['name' => 'お茶'],
            ['name' => '日本茶'],
            ['name' => '中国茶'],
            ['name' => 'ペットボトル（お茶）'],
            ['name' => '水'],

            ['name' => '日用品'],
            ['name' => 'トイレットペーパー'],
            ['name' => 'ティシュ'],
            ['name' => 'ウェットティッシュ'],
            ['name' => '医療品'],
            ['name' => '絆創膏'],
            ['name' => 'マスク'],
            ['name' => 'その他（医療品）'],
            ['name' => '洗濯用洗剤'],
            ['name' => '衣類用漂白剤'],
            ['name' => 'ホームクリーニング剤'],
            ['name' => '柔軟剤'],
            ['name' => '住宅用洗剤'],
            ['name' => 'タイル用'],
            ['name' => 'ガラス用'],
            ['name' => '床用'],
            ['name' => '台所用洗剤'],
            ['name' => 'クレンザー'],
            ['name' => '食器用漂白剤'],
            ['name' => '食器用'],
            ['name' => '風呂用洗剤'],
            ['name' => 'トイレ用洗剤'],
            ['name' => '台所用品'],
            ['name' => 'たわし'],
            ['name' => 'スポンジ'],
            ['name' => 'キッチンペーパー'],
            ['name' => 'ラップ・アルミホイル'],
            ['name' => '食器'],
            ['name' => '調理器具'],
            ['name' => 'その他（台所用品）'],
            ['name' => '風呂用品'],
            ['name' => 'ボディタオル'],
            ['name' => 'スポンジ'],
            ['name' => '風呂マット'],
            ['name' => 'その他（風呂用品）'],
            ['name' => 'トイレ用品'],
            ['name' => '洗濯用品'],
            ['name' => '掃除用品'],
            ['name' => 'オーラルケア用品'],
            ['name' => '歯ブラシ'],
            ['name' => '歯磨き粉'],
            ['name' => '洗口剤'],
            ['name' =>'歯間ブラシ'],
            ['name' => 'ボディケア用品'],
            ['name' => '石鹸'],
            ['name' =>'ハンドソープ'],
            ['name' => 'ボディソープ'],
            ['name' => 'スキンケア用品'],
            ['name' => 'ハンドクリーム'],
            ['name' => 'リップクリーム'],
            ['name' => '日焼け止め'],
            ['name' => 'ヘアケア用品'],
            ['name' => 'シャンプー'],
            ['name' => 'コンディショナー'],
            ['name' => 'トリートメント'],
            ['name' => 'ヘアカラー'],
            ['name' => 'ヘアワックス'],
            ['name' => 'ヘアスプレー'],
            ['name' => 'フェイスケア商品'],
            ['name' => '洗顔フォーム'],
            ['name' => 'クレンジング'],
            ['name' => 'メイク落とし'],
            ['name' => '入浴剤'],
            ['name' => 'トラベル用品'],
            ['name' => '化粧品'],
            ['name' => 'フェイスメイク'],
            ['name' => 'アイメイク'],
            ['name' => '口紅'],
            ['name' => '化粧水'],
            ['name' => '乳液'],
            ['name' => '美容液'],
            ['name' => 'パック'],
            ['name' => 'ネイル'],
            ['name' => '化粧小物'],
            ['name' => '生理用品'],
            ['name' => '乾電池'],
            ['name' => '医薬品'],
            ['name' => 'ベビー用品'],
            ['name' => 'ペット用品'],
            ['name' => '文房具'],
            ['name' => '家庭用品'],
            ['name' => '衣類'],
            ['name' => '工具'],
            ['name' => 'ケア用品'],
            ['name' => '健康食品'],
            ['name' => '家庭用化学製品'],
            ['name' => '殺虫剤'],
            ['name' => '防虫剤'],
            ['name' => '消臭剤'],
        ]);
    }

}

