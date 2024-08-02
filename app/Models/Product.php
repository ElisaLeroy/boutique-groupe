<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model //classe,model au singulier
{
    use HasFactory;

    public function formatPrice(float $centsPrice){
        return $centsPrice/100;
    }

    public function formatWeight(float $gramsWeight){
        return $gramsWeight/1000;
    }



}
