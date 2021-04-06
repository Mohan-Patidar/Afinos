<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderBillingAddress extends Model
{
    protected $table = "order_billing_address";
    protected $fillable = ["name", "last_name", "address", "address1", "city", "zip", "state", "country", "order_id", "is_same_billing_address"];
}
