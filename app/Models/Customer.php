<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

<<<<<<< HEAD

class Customer extends Model
{
    use HasFactory;
    public function order(){
        return $this->hasMany(\App\Models\Order::class, 'customer_id');  
      }
=======
class Customer extends Model
{
    use HasFactory;
>>>>>>> 667a3c5 (đẩy dl lên)
}
