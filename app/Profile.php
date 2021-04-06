<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
       'fname','lname','phone','email','cagecode','sams','city','zip','state','country','address','image'
    ];
}
