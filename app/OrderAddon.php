<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderAddon extends Model
{
    protected $table = "order_addons";
    protected $fillable = ["order_id", "addon_id", "addon_price_id", "frequency", "sub_total", "total"];

    public function addonPrice() {
        return $this->hasOne('App\PackageAddonPrice', 'id', "addon_price_id");
    }
}
