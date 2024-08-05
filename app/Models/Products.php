<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Products extends Model
{
    public $timestamps = false; /* ! If not set to false, creates SQL error - timestamps not in the DB */
    use HasFactory; /* ? Model factories are a way to create fake data for your models, which is useful for testing and database seeding. */
    protected $table = 'products'; /* * This is our table 'products' in the DB */
    protected $fillable = [
//        'id',
        'name',
        'description',
        'price',
        'image',
        'weight',
        'quantity',
        'availability',
        'category',
        'taste'
    ];
}
