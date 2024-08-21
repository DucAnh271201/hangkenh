<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostProduct extends Model
{
    protected $fillable = [
        'post_id',
        'sku',
        'status',
        'regular_price',
        'sale_price',
        'stock_quantity',
    ];

    public const STATUS_AVAILABLE = 'available';
    public const STATUS_OUT_OF_STOCK = 'out_of_stock';
    public const STATUS_WAITING = 'waiting';

    public const STATUSES = [
      self::STATUS_AVAILABLE => 'Còn hàng',
      self::STATUS_OUT_OF_STOCK => 'Hết hàng',
      self::STATUS_WAITING => 'Chờ hàng',
    ];


    public function attribute()
    {
        return $this->belongsToMany(Attribute::class, 'product_attributes', 'product_id', 'attribute_id');
    }


    public function variants()
    {
        return $this->hasMany(ProductVariant::class, 'product_id');
    }

    public static function buildStatuses()
    {
        $statuses = [];

        foreach (self::STATUSES as $key => $label){
            $statuses[] = [
                'label' => $label,
                'value' => $key
            ];
        }
        return $statuses;
    }
}
