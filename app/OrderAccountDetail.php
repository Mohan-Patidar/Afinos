<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderAccountDetail extends Model
{
    protected $table = "order_account_details";
    protected $fillable = ["order_id", "name", "last_name", "company", "phone", "email", "company_type", "company_size", "revenue", "reason", "user_id"];
}
