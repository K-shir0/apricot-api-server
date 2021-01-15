<?php

namespace App\Models;

use Grimzy\LaravelMysqlSpatial\Eloquent\SpatialTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;
    use SpatialTrait;

    public $incrementing = false;

    protected $spatialFields = [
        'positions',
    ];

    public function purchase_details()
    {
        return $this->hasMany(PurchaseDetail::class);
    }
}
