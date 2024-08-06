<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'ref',
        'availability',
        'name',
        'image_url',
        'weight',
        'quantity',
        'category_id',
        'price',
        'origine',
        'description',
    ];

//    protected $guarded = ['id', 'created_at', 'updated_at'];

public function categories(){
    return $this->belongsTo(Category::class);
}
public function order_product(){
    return $this->belongstomany(Order::class)->withPivot('quantity');
}

}
