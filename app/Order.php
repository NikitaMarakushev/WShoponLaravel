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

    public static function changeFullSum(int $param)
    {
    }

    public static function findOrFail(\Illuminate\Session\SessionManager $orderId)
    {
    }

    public static function eraseOrderSum()
    {
    }

    public function product()
    {
        return $this->belongsToMany(Product::class);
    }
}
