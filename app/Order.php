<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function order_detail()
    {
        return $this->hasMany(OrderDetail::class, 'order_id');
    }

     public function payment()
    {
        return $this->belongsTo(Payment::class, 'payment_id');
    }

}
