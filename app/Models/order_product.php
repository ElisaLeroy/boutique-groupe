<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_product extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'orders_products';
    protected $guarded = [];

}
