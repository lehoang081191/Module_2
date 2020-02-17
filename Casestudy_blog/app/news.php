<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    protected $table = 'news';

    public function category()
    {
        return $this->belongsTo(cate::class);
    }
}
