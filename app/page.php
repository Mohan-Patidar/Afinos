<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class page extends Model
{
    protected $fillable = [
        "id", "title", "url", "select_section"
    ];

    public function sections() {
        return $this->belongsToMany('App\Section', 'page_section', 'section_id', 'page_id');
    }
}
