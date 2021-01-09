<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  use HasFactory;

  protected $fillable = [
    'name',
  ];

  public function children()
  {
    return $this->hasMany(CategoryTree::class, 'parent_id');
  }

  //カテゴリー検索
  public function scopeCategory($query, $search)
  {
    return $query->where('name', 'like', "%$search%");
  }
}
