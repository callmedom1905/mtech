<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function orderDetail(){
        return $this->hasMany(OrderDetail::class);
    }
}
