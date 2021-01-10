<?php

namespace Database\Seeders;

use App\Category;
use App\Models\Product;
use App\Models\PurchaseDetail;
use App\Models\Shop;
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
        $nodes = [
            new Category(['id' => 1, 'name' => 'TOP']),
            new Category(['id' => 2, 'name' => '食料品', 'parent_id' => 1]),
            new Category(['id' => 3, 'name' => '日用品', 'parent_id' => 1]),
            new Category(['id' => 4, 'name' => 'アイスクリーム', 'parent_id' => 2]),
            new Category(['id' => 5, 'name' => 'インスタント麺', 'parent_id' => 2]),
            new Category(['id' => 6, 'name' => 'オーラルケア用品', 'parent_id' => 3]),
            new Category(['id' => 7, 'name' => 'おつまみ', 'parent_id' => 2]),
            new Category(['id' => 8, 'name' => 'お菓子・スイーツ', 'parent_id' => 2]),
            new Category(['id' => 9, 'name' => 'お茶', 'parent_id' => 2]),
            new Category(['id' => 10, 'name' => 'ケア用品', 'parent_id' => 3]),
            new Category(['id' => 11, 'name' => 'コーヒー', 'parent_id' => 2]),
            new Category(['id' => 12, 'name' => 'スキンケア用品', 'parent_id' => 3]),
            new Category(['id' => 13, 'name' => 'ソフトドリンク', 'parent_id' => 2]),
            new Category(['id' => 14, 'name' => 'トイレ用洗剤', 'parent_id' => 3]),
            new Category(['id' => 15, 'name' => 'トイレ用品', 'parent_id' => 3]),
            new Category(['id' => 16, 'name' => 'トラベル用品', 'parent_id' => 3]),
            new Category(['id' => 17, 'name' => 'パン・シリアル', 'parent_id' => 2]),
            new Category(['id' => 18, 'name' => 'フェイスケア商品', 'parent_id' => 3]),
            new Category(['id' => 19, 'name' => 'ヘアケア用品', 'parent_id' => 3]),
            new Category(['id' => 20, 'name' => 'ペット用品', 'parent_id' => 3]),
            new Category(['id' => 21, 'name' => 'ベビー用品', 'parent_id' => 3]),
            new Category(['id' => 22, 'name' => 'ボディケア用品', 'parent_id' => 3]),
            new Category(['id' => 23, 'name' => 'レトルト', 'parent_id' => 2]),
            new Category(['id' => 24, 'name' => '衣類', 'parent_id' => 3]),
            new Category(['id' => 25, 'name' => '医薬品', 'parent_id' => 3]),
            new Category(['id' => 26, 'name' => '医療品', 'parent_id' => 3]),
            new Category(['id' => 27, 'name' => '化粧小物', 'parent_id' => 3]),
            new Category(['id' => 28, 'name' => '化粧品', 'parent_id' => 3]),
            new Category(['id' => 29, 'name' => '家庭用化学製品', 'parent_id' => 3]),
            new Category(['id' => 30, 'name' => '家庭用品', 'parent_id' => 3]),
            new Category(['id' => 31, 'name' => '果物', 'parent_id' => 2]),
            new Category(['id' => 32, 'name' => '乾電池', 'parent_id' => 3]),
            new Category(['id' => 33, 'name' => '乾物', 'parent_id' => 2]),
            new Category(['id' => 34, 'name' => '缶詰', 'parent_id' => 2]),
            new Category(['id' => 35, 'name' => '魚', 'parent_id' => 2]),
            new Category(['id' => 36, 'name' => '健康食品', 'parent_id' => 3]),
            new Category(['id' => 37, 'name' => '工具', 'parent_id' => 3]),
            new Category(['id' => 38, 'name' => '紅茶', 'parent_id' => 2]),
            new Category(['id' => 39, 'name' => '穀類(パン・米・麺以外)', 'parent_id' => 2]),
            new Category(['id' => 40, 'name' => '紙製品', 'parent_id' => 3]),
            new Category(['id' => 41, 'name' => '住宅用洗剤', 'parent_id' => 3]),
            new Category(['id' => 42, 'name' => '汁物', 'parent_id' => 2]),
            new Category(['id' => 43, 'name' => '水', 'parent_id' => 2]),
            new Category(['id' => 44, 'name' => '生理用品', 'parent_id' => 3]),
            new Category(['id' => 45, 'name' => '製菓材料', 'parent_id' => 2]),
            new Category(['id' => 46, 'name' => '洗濯用洗剤', 'parent_id' => 3]),
            new Category(['id' => 47, 'name' => '洗濯用品', 'parent_id' => 3]),
            new Category(['id' => 48, 'name' => '惣菜', 'parent_id' => 2]),
            new Category(['id' => 49, 'name' => '掃除用品', 'parent_id' => 3]),
            new Category(['id' => 50, 'name' => '台所用洗剤', 'parent_id' => 3]),
            new Category(['id' => 51, 'name' => '台所用品', 'parent_id' => 3]),
            new Category(['id' => 52, 'name' => '大豆製品', 'parent_id' => 2]),
            new Category(['id' => 53, 'name' => '調味料', 'parent_id' => 2]),
            new Category(['id' => 54, 'name' => '漬物', 'parent_id' => 2]),
            new Category(['id' => 55, 'name' => '肉', 'parent_id' => 2]),
            new Category(['id' => 56, 'name' => '肉加工品', 'parent_id' => 2]),
            new Category(['id' => 57, 'name' => '乳製品', 'parent_id' => 2]),
            new Category(['id' => 58, 'name' => '入浴剤', 'parent_id' => 3]),
            new Category(['id' => 59, 'name' => '瓶詰', 'parent_id' => 2]),
            new Category(['id' => 60, 'name' => '風呂用洗剤', 'parent_id' => 3]),
            new Category(['id' => 61, 'name' => '風呂用品', 'parent_id' => 3]),
            new Category(['id' => 62, 'name' => '粉類', 'parent_id' => 2]),
            new Category(['id' => 63, 'name' => '文房具', 'parent_id' => 3]),
            new Category(['id' => 64, 'name' => '米', 'parent_id' => 2]),
            new Category(['id' => 65, 'name' => '弁当', 'parent_id' => 2]),
            new Category(['id' => 66, 'name' => '麺類', 'parent_id' => 2]),
            new Category(['id' => 67, 'name' => '野菜', 'parent_id' => 2]),
            new Category(['id' => 68, 'name' => '卵', 'parent_id' => 2]),
            new Category(['id' => 69, 'name' => '冷凍食品', 'parent_id' => 2]),
            new Category(['id' => 71, 'name' => 'カップラーメン', 'parent_id' => 5]),
            new Category(['id' => 72, 'name' => 'カップ麺（その他）', 'parent_id' => 5]),
            new Category(['id' => 73, 'name' => 'スープパスタ', 'parent_id' => 5]),
            new Category(['id' => 74, 'name' => 'その他インスタント麺', 'parent_id' => 5]),
            new Category(['id' => 75, 'name' => '歯ブラシ', 'parent_id' => 6]),
            new Category(['id' => 76, 'name' => '歯磨き粉', 'parent_id' => 6]),
            new Category(['id' => 77, 'name' => '洗口剤', 'parent_id' => 6]),
            new Category(['id' => 78, 'name' => '歯間ブラシ', 'parent_id' => 6]),
            new Category(['id' => 79, 'name' => 'するめ・いか', 'parent_id' => 7]),
            new Category(['id' => 80, 'name' => 'その他魚介類', 'parent_id' => 7]),
            new Category(['id' => 81, 'name' => 'サラミ', 'parent_id' => 7]),
            new Category(['id' => 82, 'name' => 'チーズ（おつまみ）', 'parent_id' => 7]),
            new Category(['id' => 83, 'name' => 'その他（おつまみ）', 'parent_id' => 7]),
            new Category(['id' => 84, 'name' => '洋菓子', 'parent_id' => 8]),
            new Category(['id' => 85, 'name' => '和菓子', 'parent_id' => 8]),
            new Category(['id' => 86, 'name' => 'スナック', 'parent_id' => 8]),
            new Category(['id' => 87, 'name' => '駄菓子', 'parent_id' => 8]),
            new Category(['id' => 88, 'name' => 'チョコレート', 'parent_id' => 8]),
            new Category(['id' => 89, 'name' => 'ビスケット・クッキー・クラッカー', 'parent_id' => 8]),
            new Category(['id' => 90, 'name' => 'おつまみ（お菓子）', 'parent_id' => 8]),
            new Category(['id' => 91, 'name' => 'せんべい', 'parent_id' => 8]),
            new Category(['id' => 92, 'name' => 'ガム・アメ・ミント', 'parent_id' => 8]),
            new Category(['id' => 93, 'name' => 'マシュマロ', 'parent_id' => 8]),
            new Category(['id' => 94, 'name' => 'プリン', 'parent_id' => 8]),
            new Category(['id' => 95, 'name' => 'ゼリー', 'parent_id' => 8]),
            new Category(['id' => 96, 'name' => 'ナッツ', 'parent_id' => 8]),
            new Category(['id' => 97, 'name' => 'その他（お菓子）', 'parent_id' => 8]),
            new Category(['id' => 98, 'name' => '日本茶', 'parent_id' => 9]),
            new Category(['id' => 99, 'name' => '中国茶', 'parent_id' => 9]),
            new Category(['id' => 100, 'name' => 'ペットボトル（お茶）', 'parent_id' => 9]),
            new Category(['id' => 101, 'name' => '無糖', 'parent_id' => 11]),
            new Category(['id' => 102, 'name' => '微糖', 'parent_id' => 11]),
            new Category(['id' => 103, 'name' => '低糖', 'parent_id' => 11]),
            new Category(['id' => 104, 'name' => 'カフェラテ等', 'parent_id' => 11]),
            new Category(['id' => 105, 'name' => 'レギュラー', 'parent_id' => 11]),
            new Category(['id' => 106, 'name' => 'インスタント（コーヒー）', 'parent_id' => 11]),
            new Category(['id' => 107, 'name' => 'ハンドクリーム', 'parent_id' => 12]),
            new Category(['id' => 108, 'name' => 'リップクリーム', 'parent_id' => 12]),
            new Category(['id' => 109, 'name' => '日焼け止め', 'parent_id' => 12]),
            new Category(['id' => 110, 'name' => '果実飲料', 'parent_id' => 13]),
            new Category(['id' => 111, 'name' => '乳酸飲料', 'parent_id' => 13]),
            new Category(['id' => 112, 'name' => '炭酸飲料', 'parent_id' => 13]),
            new Category(['id' => 113, 'name' => 'スポーツドリンク', 'parent_id' => 13]),
            new Category(['id' => 114, 'name' => '健康飲料', 'parent_id' => 13]),
            new Category(['id' => 115, 'name' => '豆乳類', 'parent_id' => 13]),
            new Category(['id' => 116, 'name' => '野菜ジュース', 'parent_id' => 13]),
            new Category(['id' => 117, 'name' => 'その他（ソフトドリンク）', 'parent_id' => 13]),
            new Category(['id' => 118, 'name' => '菓子パン', 'parent_id' => 17]),
            new Category(['id' => 119, 'name' => '食パン', 'parent_id' => 17]),
            new Category(['id' => 120, 'name' => 'シリアル', 'parent_id' => 17]),
            new Category(['id' => 121, 'name' => '洗顔フォーム', 'parent_id' => 18]),
            new Category(['id' => 122, 'name' => 'クレンジング', 'parent_id' => 18]),
            new Category(['id' => 123, 'name' => 'メイク落とし', 'parent_id' => 18]),
            new Category(['id' => 124, 'name' => 'シャンプー', 'parent_id' => 19]),
            new Category(['id' => 125, 'name' => 'コンディショナー', 'parent_id' => 19]),
            new Category(['id' => 126, 'name' => 'トリートメント', 'parent_id' => 19]),
            new Category(['id' => 127, 'name' => 'ヘアカラー', 'parent_id' => 19]),
            new Category(['id' => 128, 'name' => 'ヘアワックス', 'parent_id' => 19]),
            new Category(['id' => 129, 'name' => 'ヘアスプレー', 'parent_id' => 19]),
            new Category(['id' => 130, 'name' => '石鹸', 'parent_id' => 22]),
            new Category(['id' => 131, 'name' => 'ハンドソープ', 'parent_id' => 22]),
            new Category(['id' => 132, 'name' => 'ボディソープ', 'parent_id' => 22]),
            new Category(['id' => 133, 'name' => 'カレー', 'parent_id' => 23]),
            new Category(['id' => 134, 'name' => 'ハヤシ', 'parent_id' => 23]),
            new Category(['id' => 135, 'name' => 'シチュー', 'parent_id' => 23]),
            new Category(['id' => 136, 'name' => 'イタリアン', 'parent_id' => 23]),
            new Category(['id' => 137, 'name' => '中華', 'parent_id' => 23]),
            new Category(['id' => 138, 'name' => 'スープ・味噌汁', 'parent_id' => 23]),
            new Category(['id' => 139, 'name' => '米（レトルト）', 'parent_id' => 23]),
            new Category(['id' => 140, 'name' => 'その他（レトルト）', 'parent_id' => 23]),
            new Category(['id' => 141, 'name' => '絆創膏', 'parent_id' => 26]),
            new Category(['id' => 142, 'name' => 'マスク', 'parent_id' => 26]),
            new Category(['id' => 143, 'name' => 'その他（医療品）', 'parent_id' => 26]),
            new Category(['id' => 144, 'name' => 'フェイスメイク', 'parent_id' => 28]),
            new Category(['id' => 145, 'name' => 'アイメイク', 'parent_id' => 28]),
            new Category(['id' => 146, 'name' => '口紅', 'parent_id' => 28]),
            new Category(['id' => 147, 'name' => '化粧水', 'parent_id' => 28]),
            new Category(['id' => 148, 'name' => '乳液', 'parent_id' => 28]),
            new Category(['id' => 149, 'name' => '美容液', 'parent_id' => 28]),
            new Category(['id' => 150, 'name' => 'パック', 'parent_id' => 28]),
            new Category(['id' => 151, 'name' => 'ネイル', 'parent_id' => 28]),
            new Category(['id' => 152, 'name' => '殺虫剤', 'parent_id' => 29]),
            new Category(['id' => 153, 'name' => '防虫剤', 'parent_id' => 29]),
            new Category(['id' => 154, 'name' => '消臭剤', 'parent_id' => 29]),
            new Category(['id' => 155, 'name' => 'いちご', 'parent_id' => 31]),
            new Category(['id' => 156, 'name' => 'りんご', 'parent_id' => 31]),
            new Category(['id' => 157, 'name' => 'オレンジ', 'parent_id' => 31]),
            new Category(['id' => 158, 'name' => 'グレープフルーツ', 'parent_id' => 31]),
            new Category(['id' => 159, 'name' => 'みかん・柑橘類', 'parent_id' => 31]),
            new Category(['id' => 160, 'name' => 'バナナ', 'parent_id' => 31]),
            new Category(['id' => 161, 'name' => 'キウイフルーツ', 'parent_id' => 31]),
            new Category(['id' => 162, 'name' => 'ぶどう', 'parent_id' => 31]),
            new Category(['id' => 163, 'name' => 'メロン', 'parent_id' => 31]),
            new Category(['id' => 164, 'name' => 'パイナップル', 'parent_id' => 31]),
            new Category(['id' => 165, 'name' => 'もも', 'parent_id' => 31]),
            new Category(['id' => 166, 'name' => 'さくらんぼ', 'parent_id' => 31]),
            new Category(['id' => 167, 'name' => 'すいか', 'parent_id' => 31]),
            new Category(['id' => 168, 'name' => 'なし', 'parent_id' => 31]),
            new Category(['id' => 169, 'name' => 'ベリー類', 'parent_id' => 31]),
            new Category(['id' => 170, 'name' => 'レモン', 'parent_id' => 31]),
            new Category(['id' => 171, 'name' => 'カットフルーツ', 'parent_id' => 31]),
            new Category(['id' => 172, 'name' => 'その他（果物）', 'parent_id' => 31]),
            new Category(['id' => 173, 'name' => 'ごま', 'parent_id' => 33]),
            new Category(['id' => 174, 'name' => '昆布', 'parent_id' => 33]),
            new Category(['id' => 175, 'name' => 'のり', 'parent_id' => 33]),
            new Category(['id' => 176, 'name' => 'ふりかけ', 'parent_id' => 33]),
            new Category(['id' => 177, 'name' => '乾燥わかめ・ひじき', 'parent_id' => 33]),
            new Category(['id' => 178, 'name' => '干しもの', 'parent_id' => 33]),
            new Category(['id' => 179, 'name' => 'お茶漬け', 'parent_id' => 33]),
            new Category(['id' => 180, 'name' => '乾燥野菜', 'parent_id' => 33]),
            new Category(['id' => 181, 'name' => 'その他（乾物）', 'parent_id' => 33]),
            new Category(['id' => 182, 'name' => '魚類（缶詰）', 'parent_id' => 34]),
            new Category(['id' => 183, 'name' => '肉類（缶詰）', 'parent_id' => 34]),
            new Category(['id' => 184, 'name' => '野菜類（缶詰）', 'parent_id' => 34]),
            new Category(['id' => 185, 'name' => '豆類（缶詰）', 'parent_id' => 34]),
            new Category(['id' => 186, 'name' => 'キノコ類（缶詰）', 'parent_id' => 34]),
            new Category(['id' => 187, 'name' => 'フルーツ（缶詰）', 'parent_id' => 34]),
            new Category(['id' => 188, 'name' => 'ソース（缶詰）', 'parent_id' => 34]),
            new Category(['id' => 189, 'name' => 'スープ（缶詰）', 'parent_id' => 34]),
            new Category(['id' => 190, 'name' => '鮮魚', 'parent_id' => 35]),
            new Category(['id' => 191, 'name' => 'その他（魚）', 'parent_id' => 35]),
            new Category(['id' => 192, 'name' => 'インスタント（紅茶）', 'parent_id' => 38]),
            new Category(['id' => 193, 'name' => 'ティーバック', 'parent_id' => 38]),
            new Category(['id' => 194, 'name' => 'ハーブティー', 'parent_id' => 38]),
            new Category(['id' => 195, 'name' => 'ペットボトル（紅茶）', 'parent_id' => 38]),
            new Category(['id' => 196, 'name' => 'トイレットペーパー', 'parent_id' => 40]),
            new Category(['id' => 197, 'name' => 'ティシュ', 'parent_id' => 40]),
            new Category(['id' => 198, 'name' => 'ウェットティッシュ', 'parent_id' => 40]),
            new Category(['id' => 199, 'name' => 'タイル用', 'parent_id' => 41]),
            new Category(['id' => 200, 'name' => 'ガラス用', 'parent_id' => 41]),
            new Category(['id' => 201, 'name' => '床用', 'parent_id' => 41]),
            new Category(['id' => 202, 'name' => '味噌汁', 'parent_id' => 42]),
            new Category(['id' => 203, 'name' => 'スープ', 'parent_id' => 42]),
            new Category(['id' => 204, 'name' => '凝固剤・添加物', 'parent_id' => 45]),
            new Category(['id' => 205, 'name' => '製菓用ナッツ', 'parent_id' => 45]),
            new Category(['id' => 206, 'name' => '製菓用フルーツ', 'parent_id' => 45]),
            new Category(['id' => 207, 'name' => '粉類（お菓子）', 'parent_id' => 45]),
            new Category(['id' => 208, 'name' => '製菓用チョコ', 'parent_id' => 45]),
            new Category(['id' => 209, 'name' => 'トッピング', 'parent_id' => 45]),
            new Category(['id' => 210, 'name' => '衣類用漂白剤', 'parent_id' => 46]),
            new Category(['id' => 211, 'name' => 'ホームクリーニング剤', 'parent_id' => 46]),
            new Category(['id' => 212, 'name' => '柔軟剤', 'parent_id' => 46]),
            new Category(['id' => 213, 'name' => 'お弁当', 'parent_id' => 48]),
            new Category(['id' => 214, 'name' => '焼き鳥', 'parent_id' => 48]),
            new Category(['id' => 215, 'name' => '揚げ物', 'parent_id' => 48]),
            new Category(['id' => 216, 'name' => 'サラダ等', 'parent_id' => 48]),
            new Category(['id' => 217, 'name' => '寿司', 'parent_id' => 48]),
            new Category(['id' => 218, 'name' => 'その他（惣菜）', 'parent_id' => 48]),
            new Category(['id' => 219, 'name' => 'クレンザー', 'parent_id' => 50]),
            new Category(['id' => 220, 'name' => '食器用漂白剤', 'parent_id' => 50]),
            new Category(['id' => 221, 'name' => '食器用', 'parent_id' => 50]),
            new Category(['id' => 222, 'name' => 'たわし', 'parent_id' => 51]),
            new Category(['id' => 223, 'name' => 'スポンジ（台所用品）', 'parent_id' => 51]),
            new Category(['id' => 224, 'name' => 'キッチンペーパー', 'parent_id' => 51]),
            new Category(['id' => 225, 'name' => 'ラップ・アルミホイル', 'parent_id' => 51]),
            new Category(['id' => 226, 'name' => '食器', 'parent_id' => 51]),
            new Category(['id' => 227, 'name' => '調理器具', 'parent_id' => 51]),
            new Category(['id' => 228, 'name' => 'その他（台所用品）', 'parent_id' => 51]),
            new Category(['id' => 229, 'name' => '厚揚げ', 'parent_id' => 52]),
            new Category(['id' => 230, 'name' => '豆腐', 'parent_id' => 52]),
            new Category(['id' => 231, 'name' => '納豆', 'parent_id' => 52]),
            new Category(['id' => 232, 'name' => 'その他（大豆製品）', 'parent_id' => 52]),
            new Category(['id' => 233, 'name' => '甘味料・砂糖', 'parent_id' => 53]),
            new Category(['id' => 234, 'name' => '味噌', 'parent_id' => 53]),
            new Category(['id' => 235, 'name' => 'ソース（調味料）', 'parent_id' => 53]),
            new Category(['id' => 236, 'name' => '醤油', 'parent_id' => 53]),
            new Category(['id' => 237, 'name' => 'お酢', 'parent_id' => 53]),
            new Category(['id' => 238, 'name' => 'みりん', 'parent_id' => 53]),
            new Category(['id' => 239, 'name' => 'たれ・つゆ', 'parent_id' => 53]),
            new Category(['id' => 240, 'name' => 'ケチャップ・マヨネーズ', 'parent_id' => 53]),
            new Category(['id' => 241, 'name' => '塩', 'parent_id' => 53]),
            new Category(['id' => 242, 'name' => 'ポン酢', 'parent_id' => 53]),
            new Category(['id' => 243, 'name' => '薬味', 'parent_id' => 53]),
            new Category(['id' => 244, 'name' => 'ハーブ', 'parent_id' => 53]),
            new Category(['id' => 245, 'name' => 'スパイス', 'parent_id' => 53]),
            new Category(['id' => 246, 'name' => 'オイル', 'parent_id' => 53]),
            new Category(['id' => 247, 'name' => '料理酒', 'parent_id' => 53]),
            new Category(['id' => 248, 'name' => 'ドレッシング', 'parent_id' => 53]),
            new Category(['id' => 249, 'name' => 'その他（調味料）', 'parent_id' => 53]),
            new Category(['id' => 250, 'name' => '鶏肉', 'parent_id' => 55]),
            new Category(['id' => 251, 'name' => '牛肉', 'parent_id' => 55]),
            new Category(['id' => 252, 'name' => '豚肉', 'parent_id' => 55]),
            new Category(['id' => 253, 'name' => '合いびき肉', 'parent_id' => 55]),
            new Category(['id' => 254, 'name' => 'その他（肉）', 'parent_id' => 55]),
            new Category(['id' => 255, 'name' => 'ハム・ベーコン', 'parent_id' => 56]),
            new Category(['id' => 256, 'name' => 'ソーセージ', 'parent_id' => 56]),
            new Category(['id' => 257, 'name' => 'ローストビーフ', 'parent_id' => 56]),
            new Category(['id' => 258, 'name' => '生ハム', 'parent_id' => 56]),
            new Category(['id' => 259, 'name' => '牛乳', 'parent_id' => 57]),
            new Category(['id' => 260, 'name' => '豆乳', 'parent_id' => 57]),
            new Category(['id' => 261, 'name' => 'ヨーグルト', 'parent_id' => 57]),
            new Category(['id' => 262, 'name' => '生クリーム', 'parent_id' => 57]),
            new Category(['id' => 263, 'name' => 'バター・マーガリン', 'parent_id' => 57]),
            new Category(['id' => 264, 'name' => 'チーズ', 'parent_id' => 57]),
            new Category(['id' => 265, 'name' => 'ホイップクリーム', 'parent_id' => 57]),
            new Category(['id' => 266, 'name' => 'ジャム（瓶詰め）', 'parent_id' => 59]),
            new Category(['id' => 267, 'name' => 'コンポート（瓶詰め）', 'parent_id' => 59]),
            new Category(['id' => 268, 'name' => 'チョコレート（瓶詰め）　', 'parent_id' => 59]),
            new Category(['id' => 269, 'name' => '魚介類（瓶詰め）', 'parent_id' => 59]),
            new Category(['id' => 270, 'name' => '肉類（瓶詰）', 'parent_id' => 59]),
            new Category(['id' => 271, 'name' => '野菜類（瓶詰め）', 'parent_id' => 59]),
            new Category(['id' => 272, 'name' => 'キノコ類（瓶詰め）', 'parent_id' => 59]),
            new Category(['id' => 273, 'name' => '豆類（瓶詰め）', 'parent_id' => 59]),
            new Category(['id' => 274, 'name' => '調味料（瓶詰め）', 'parent_id' => 59]),
            new Category(['id' => 275, 'name' => 'その他（瓶詰）', 'parent_id' => 59]),
            new Category(['id' => 276, 'name' => 'ボディタオル', 'parent_id' => 61]),
            new Category(['id' => 277, 'name' => 'スポンジ（風呂用品）', 'parent_id' => 61]),
            new Category(['id' => 278, 'name' => '風呂マット', 'parent_id' => 61]),
            new Category(['id' => 279, 'name' => 'その他（風呂用品）', 'parent_id' => 61]),
            new Category(['id' => 280, 'name' => '小麦粉', 'parent_id' => 62]),
            new Category(['id' => 281, 'name' => 'パン粉', 'parent_id' => 62]),
            new Category(['id' => 282, 'name' => '片栗粉', 'parent_id' => 62]),
            new Category(['id' => 283, 'name' => 'てんぷら粉', 'parent_id' => 62]),
            new Category(['id' => 284, 'name' => '唐揚げ粉', 'parent_id' => 62]),
            new Category(['id' => 285, 'name' => 'お好み・たこ焼き粉', 'parent_id' => 62]),
            new Category(['id' => 286, 'name' => 'その他（コーンスターチ等）', 'parent_id' => 62]),
            new Category(['id' => 287, 'name' => 'うどん', 'parent_id' => 66]),
            new Category(['id' => 288, 'name' => 'そうめん', 'parent_id' => 66]),
            new Category(['id' => 289, 'name' => 'そば', 'parent_id' => 66]),
            new Category(['id' => 290, 'name' => 'パスタ', 'parent_id' => 66]),
            new Category(['id' => 291, 'name' => 'ラーメン', 'parent_id' => 66]),
            new Category(['id' => 292, 'name' => 'やきそば', 'parent_id' => 66]),
            new Category(['id' => 293, 'name' => 'その他（冷麺等）', 'parent_id' => 66]),
            new Category(['id' => 294, 'name' => 'たまねぎ', 'parent_id' => 67]),
            new Category(['id' => 295, 'name' => '大根', 'parent_id' => 67]),
            new Category(['id' => 296, 'name' => 'きゅうり', 'parent_id' => 67]),
            new Category(['id' => 297, 'name' => 'にんじん', 'parent_id' => 67]),
            new Category(['id' => 298, 'name' => 'トマト', 'parent_id' => 67]),
            new Category(['id' => 299, 'name' => 'キャベツ', 'parent_id' => 67]),
            new Category(['id' => 300, 'name' => 'ピーマン', 'parent_id' => 67]),
            new Category(['id' => 301, 'name' => 'アスパラガス', 'parent_id' => 67]),
            new Category(['id' => 302, 'name' => 'ブロッコリー', 'parent_id' => 67]),
            new Category(['id' => 303, 'name' => 'もやし', 'parent_id' => 67]),
            new Category(['id' => 304, 'name' => 'ねぎ', 'parent_id' => 67]),
            new Category(['id' => 305, 'name' => 'なす', 'parent_id' => 67]),
            new Category(['id' => 306, 'name' => 'いも類', 'parent_id' => 67]),
            new Category(['id' => 307, 'name' => '根菜', 'parent_id' => 67]),
            new Category(['id' => 308, 'name' => 'きのこ', 'parent_id' => 67]),
            new Category(['id' => 309, 'name' => 'かぼちゃ', 'parent_id' => 67]),
            new Category(['id' => 310, 'name' => 'とうもろこし', 'parent_id' => 67]),
            new Category(['id' => 311, 'name' => '葉もの野菜', 'parent_id' => 67]),
            new Category(['id' => 312, 'name' => '豆類（野菜）', 'parent_id' => 67]),
            new Category(['id' => 313, 'name' => 'パプリカ', 'parent_id' => 67]),
            new Category(['id' => 314, 'name' => 'カットサラダ', 'parent_id' => 67]),
            new Category(['id' => 315, 'name' => 'カット野菜', 'parent_id' => 67]),
            new Category(['id' => 316, 'name' => 'その他（野菜）', 'parent_id' => 67]),
            new Category(['id' => 317, 'name' => '冷凍麺・パスタ', 'parent_id' => 69]),
            new Category(['id' => 318, 'name' => '冷凍弁当おかず', 'parent_id' => 69]),
            new Category(['id' => 319, 'name' => '冷凍惣菜', 'parent_id' => 69]),
            new Category(['id' => 320, 'name' => 'その他（冷凍食品）', 'parent_id' => 69]),
        ];

        foreach ($nodes as $node) {
            $node->save();
        }

        Product::factory(5000)->create();
        Shop::factory(50)->create();
        PurchaseDetail::factory(50)->create();
    }
}
