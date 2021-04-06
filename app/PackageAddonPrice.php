<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PackageAddonPrice extends Model
{
    protected $table = 'package_addon_price';
    protected $fillable = ['package_id', 'addon_id', 'price'];

    public function addon()
    {
        return $this->hasOne('App\Addon', 'id', "addon_id");
    }

}
