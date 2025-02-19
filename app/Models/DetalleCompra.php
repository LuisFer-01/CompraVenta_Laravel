<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleCompra extends Model
{
    use HasFactory;

    protected $fillable = [
        'compra_id',
        'product_id',
        'quantity',
        'unit_cost',
        'subtotal'
    ];

    public function compra(){
        return $this->belongsTo(Compra::class,'compra_id');
    }

    public function product(){
        return $this->belongsTo(Product::class,'product_id');
    }
}
