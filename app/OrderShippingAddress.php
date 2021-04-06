<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderShippingAddress extends Model
{
    protected $table = "order_shipping_address";
    protected $fillable = ["name", "last_name", "address", "address1", "city", "zip", "state", "country", "order_id"];
}
