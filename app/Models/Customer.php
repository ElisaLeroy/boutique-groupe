<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['last_name', 'first_name', 'address', 'city', 'CP', 'category'];

public function order(){
    return $this->hasMany(Order::class);
}
}
