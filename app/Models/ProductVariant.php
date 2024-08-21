<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{
    protected $fillable = [
      'attribute_id',
      'product_id',
      'image',
      'sku',
      'status',
      'regular_price',
      'sale_price',
      'stock_quantity',
      'description',
    ];
}
