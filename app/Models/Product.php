<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model //classe,model au singulier
{
    use HasFactory;
    public $timestamps = false; //laavel attend, par défaut, que des colonnes created_at et updated_at soient créées dans la base de donnée. Si ce n'est pas le cas et qu'on ne veut pas en créer alors on met cette ligne dans le model

    protected $guarded=[];

    public function formatPrice(float $centsPrice){
        return $centsPrice/100;
    }

    public function formatWeight(float $gramsWeight){
        return $gramsWeight/1000;
    }



}
