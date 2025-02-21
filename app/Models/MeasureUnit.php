<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MeasureUnit extends Model
{
    use HasFactory;

    protected $table = 'measure_unit';

    protected $fillable = [
        'name',
        'description'
    ];

    public function products(){
        return $this->hasMany(Product::class);
    }

    public function Recipes(){
        return $this->hasMany(Recipe::class);
    }
}
