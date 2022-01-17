<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name', 'desc', 'status', 'customer_id'];

    protected $hidden = ['created_at', 'updated_at'];

    public function orderDetails(){
        return $this->hasMany(\App\Models\OrderDetail::class, 'order_id');
    }

    public function customer(){
        return $this->belongsTo(\App\Models\Customer::class, 'customer_id');
    }

    //localscope
    public function scopeSearchdate($query) 
    {
        if(request()->txtdatefrom && request()->txtdateto){
            $from = request()->txtdatefrom;
            $to = request()->txtdateto;
            $query = $query->whereDate('created_at', '>=', $from)->whereDate('created_at', '<=', $to);
        }

        return $query;
    }
}
