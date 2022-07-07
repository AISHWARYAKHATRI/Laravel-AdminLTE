<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Brand;

class Product extends Model
{
    use HasFactory;
    protected $table = "product";
    protected $primaryKey = "id";

    protected $fillable = [
        'id',
        'productName',
        'brandID',
        'brand',
        'image',
        'sku',
        'price',
        'qty',
        'wt',
        'longDesc',
        'shortDesc'
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brandID', 'id');
    }
}
