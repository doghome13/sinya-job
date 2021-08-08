<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    protected $table = 'brand';

    public function products()
    {
        return $this->hasMany(Products::class, 'brand_id');
    }
}
