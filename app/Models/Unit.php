<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $guarded = [];
    protected $table = 'units';

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
