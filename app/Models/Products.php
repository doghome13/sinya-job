<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'product';

    public function brand()
    {
        return $this->belongsTo(Brands::class);
    }
}
