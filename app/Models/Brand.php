<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
<<<<<<< HEAD

    public function products(){
        return $this->hasMany(\App\Models\Product::class, 'brand_id');
    }
=======
>>>>>>> 667a3c5 (đẩy dl lên)
}
