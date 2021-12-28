<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function orderDetails(){
        return $this->hasMany(\App\Models\OrderDetail::class, 'order_id');
    }

    public function customer(){
        return $this->belongsTo(\App\Models\Customer::class, 'customer_id');
    }
}
