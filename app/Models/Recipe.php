<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'dish_id',
        'ingredient_id',
        'quantity',
        'measure_unit_id',
        'status'
    ];

    public function dish(){
        return $this->belongsTo(Dish::class,'dish_id');
    }

    public function ingredient(){
        return $this->belongsTo(Ingredient::class,'ingredient_id');
    }

    public function measureunit(){
        return $this->belongsTo(MeasureUnit::class);
    }
}
