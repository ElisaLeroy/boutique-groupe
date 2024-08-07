<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['payment', 'customer_id', 'number', 'date'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function products()
    {
        return $this->belongstomany(Product::class, 'order_product')
            ->withPivot('quantity')
            ->withTimestamps();
    }
}
