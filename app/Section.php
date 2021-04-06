<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = [
        "title", "subtitle", "description", "image_upload",
    ];

    public function pages() {
        return $this->belongsToMany('App\Page', 'page_section', 'page_id', 'section_id');
    }
}
