<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
<<<<<<< HEAD

    public function products(){
        return $this->hasMany(\App\Models\Product::class, 'category_id');
    }
=======
>>>>>>> 667a3c5 (đẩy dl lên)
}
