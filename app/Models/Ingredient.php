<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'product_id',
        'status'
    ];

    public function product(){
        return $this->belongsTo(Product::class,'product_id');
    }

    public function Recipes(){
        return $this->hasMany(Recipe::class);
    }
}
