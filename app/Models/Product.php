<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillabe = [
        'user_id',
        'name',
        'description',
        'price',
        'quantity',
        'category_id',
        'measure_unit_id',
        'status'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function measureunit(){
        return $this->belongsTo(MeasureUnit::class);
    }

    public function images(){
        return $this->hasMany(ProductImage::class);
    }

    public function detallecompras(){
        return $this->hasMany(DetalleCompra::class);
    }

    public function inventories(){
        return $this->hasMany(Inventory::class);
    }

    public function ingredients(){
        return $this->hasMany(Ingredient::class);
    }
}
