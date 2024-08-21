<?php

namespace App\Models\Traits;

trait ProductAttributeTrait
{

    public function getProductStatusAttribute()
    {
        return $this->product?->status;
    }

    public function getSkuAttribute()
    {
        return $this->product?->sku;
    }

    public function getRegularPriceAttribute()
    {
        return $this->product?->regular_price;
    }

    public function getSalePriceAttribute()
    {
        return $this->product?->sale_price;
    }

    public function getStockQuantityAttribute()
    {
        return $this->product?->stock_quantity;
    }

    public function getAttributeAttribute()
    {
        return $this->product?->attribute;
    }

    public function getAttributeIdsAttribute()
    {
        return $this?->product?->attribute?->pluck('id')->toArray();
    }
}
