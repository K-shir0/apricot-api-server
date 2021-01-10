<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'category_id',
    ];

    //商品検索
    public function scopeProduct($query, $search)
    {
        return $query->where('product_name', 'like', "%$search%");
    }

    public function product_name_all(){

    }
}
