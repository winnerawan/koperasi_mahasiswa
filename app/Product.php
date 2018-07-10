<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function merchant()
    {
        return $this->belongsTo(Merchant::class, 'merchant_id');
    }

    public function promo()
    {
        return $this->hasMany(Promo::class, 'product_id');
    }

    public function order()
    {
        return $this->hasMany(OrderDetail::class, 'product_id');
    }
}
