<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleAgent extends Model
{
    use HasFactory;
    
    protected $guarded = [];
    protected $table = 'sale_agents';
}
