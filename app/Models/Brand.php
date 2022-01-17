<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model   
{
    use HasFactory;
   

    protected $fillable = ['name', 'desc'];

    protected $hidden = ['created_at', 'update_at'];

    public function products(){
        return $this->hasMany(\App\Models\Product::class, 'brand_id');
    }
}
