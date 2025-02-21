<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'description',
        'price',
        'quantity',
        'menu_id',
        'status'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function menu(){
        return $this->belongsTo(Menu::class);
    }

    public function images(){
        return $this->hasMany(DishImage::class);
    }

    public function detalleventas(){
        return $this->hasMany(DetalleVenta::class);
    }

    public function Recipes(){
        return $this->hasMany(Recipe::class);
    }
}
