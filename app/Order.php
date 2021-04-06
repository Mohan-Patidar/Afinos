<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "orders";
    protected $fillable = ['package_id', 'additional_qty', 'recurrance_id', 'frequency', 'user_id', 'currency_code', 'package_name', 'transaction_id', 'sub_total', 'total', 'status', 'order_total', 'fscs', 'discount_price'];

    public function package() {
        return $this->hasOne('App\Package', 'id', "package_id");
    }

    public function recurrance() {
        return $this->hasOne('App\Recurrance', 'id', "recurrance_id");
    }

    public function user() {
        return $this->hasOne('App\User', 'id', "user_id");
    }
}
