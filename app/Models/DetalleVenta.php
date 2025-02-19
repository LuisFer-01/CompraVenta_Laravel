<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleVenta extends Model
{
    use HasFactory;

    protected $fillable = [
        'venta_id',
        'dish_id',
        'quantity',
        'unit_price',
        'subtotal'
    ];

    public function venta(){
        return $this->belongsTo(Venta::class,'venta_id');
    }

    public function dish(){
        return $this->belongsTo(Dish::class,'dish_id');
    }
}
