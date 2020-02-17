<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tinh extends Model
{
    public function quans()
    {
        return $this->hasMany(Quan::class, 'tinh_id');
    }
}
