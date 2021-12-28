<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
<<<<<<< HEAD

{
    use HasFactory;
    public function products(){
        return $this->belongsTo(\App\Models\Product::class, 'product_id');  
    }
    public function order(){
        return $this->belongsTo(\App\Models\Order::class, 'order_id');  
    }
=======
{
    use HasFactory;
>>>>>>> 667a3c5 (đẩy dl lên)
}
