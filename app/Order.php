<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public static function create()
    {
    }

    public static function find($orderId)
    {
    }

    public function product()
    {
        return $this->belongsToMany(Product::class);
    }
}
