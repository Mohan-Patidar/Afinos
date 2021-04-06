<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Package;

class Recurrance extends Model
{
    protected $fillable = ['name', 'frequency'];
    
    public function packages(){
        return $this->hasMany(Package::class);
    }
}
