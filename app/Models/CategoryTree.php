<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryTree extends Model
{
    use HasFactory;

    protected $fillable = [
        'parent_id',
        'child_id',
        'depth',
    ];

    public function categories()
    {
        return $this->belongsTo(Category::class, 'child_id');
    }
}
