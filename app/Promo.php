<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    public $timestamps = false;

    protected $table = 'promos';

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

}
