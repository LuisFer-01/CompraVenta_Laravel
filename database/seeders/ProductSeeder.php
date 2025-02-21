<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use App\Models\MeasureUnit;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::all();
        
        $users = User::whereHas('role', function($query){
            $query->where('name','Administrador')->orWhere('name','Mantenedor');
        })->get();

        $measure_units = MeasureUnit::all();

        $products = [
            [
                'name' => 'Filete de Res',
                'description' => 'Corte de carne de res de alta calidad para parrillas y platillos gourmet.',
                'price' => 45.50,
                'quantity' => 10
            ],
            [
                'name' => 'Pechuga de Pollo',
                'description' => 'Pechuga de pollo sin hueso ni piel, ideal para preparaciones saludables.',
                'price' => 25.75,
                'quantity' => 15
            ],
            [
                'name' => 'Camarones Jumbo',
                'description' => 'Camarones grandes y frescos ideales para ceviches y platos marinos.',
                'price' => 60.99,
                'quantity' => 8
            ],
            [
                'name' => 'Leche Entera',
                'description' => 'Leche pasteurizada de vaca, utilizada en diversas recetas y bebidas.',
                'price' => 8.50,
                'quantity' => 20
            ],
            [
                'name' => 'Queso Cheddar',
                'description' => 'Queso amarillo de sabor fuerte, ideal para hamburguesas y gratinados.',
                'price' => 32.80,
                'quantity' => 12
            ],
            [
                'name' => 'Harina de Trigo',
                'description' => 'Harina refinada utilizada en panadería y repostería.',
                'price' => 5.99,
                'quantity' => 25
            ],
            [
                'name' => 'Aceite Vegetal',
                'description' => 'Aceite comestible multiusos para freír y cocinar.',
                'price' => 18.40,
                'quantity' => 30
            ],
            [
                'name' => 'Sal de Mesa',
                'description' => 'Sal refinada utilizada en la preparación de diversos platillos.',
                'price' => 2.75,
                'quantity' => 50
            ],
            [
                'name' => 'Papas Congeladas',
                'description' => 'Papas listas para freír, cortadas en bastones.',
                'price' => 22.99,
                'quantity' => 10
            ],
            [
                'name' => 'Tomates Frescos',
                'description' => 'Tomates rojos y frescos utilizados en ensaladas y salsas.',
                'price' => 12.30,
                'quantity' => 18
            ],
            [
                'name' => 'Pimiento Rojo',
                'description' => 'Pimiento de color rojo, utilizado para dar sabor y color a los platillos.',
                'price' => 9.25,
                'quantity' => 10
            ],
            [
                'name' => 'Pan para Hamburguesa',
                'description' => 'Pan suave con ajonjolí, ideal para preparar hamburguesas.',
                'price' => 15.60,
                'quantity' => 25
            ],
            [
                'name' => 'Refresco Cola',
                'description' => 'Bebida gaseosa en botella de 2L, ideal para acompañar comidas.',
                'price' => 10.90,
                'quantity' => 20
            ],
            [
                'name' => 'Salsa de Tomate',
                'description' => 'Salsa de tomate en botella, ideal para pastas y guarniciones.',
                'price' => 7.80,
                'quantity' => 15
            ],
            [
                'name' => 'Cebolla Blanca',
                'description' => 'Cebolla fresca utilizada en la preparación de múltiples platillos.',
                'price' => 6.50,
                'quantity' => 20
            ],
            [
                'name' => 'Azúcar Refinada',
                'description' => 'Azúcar blanca utilizada en repostería y bebidas.',
                'price' => 9.99,
                'quantity' => 30
            ],
            [
                'name' => 'Café Molido',
                'description' => 'Café 100% arábica molido, ideal para espresso y filtrado.',
                'price' => 25.30,
                'quantity' => 10
            ],
            [
                'name' => 'Pechuga de Pavo',
                'description' => 'Carne de pavo sin piel, ideal para comidas saludables.',
                'price' => 38.70,
                'quantity' => 10
            ],
            [
                'name' => 'Mayonesa',
                'description' => 'Salsa cremosa utilizada como aderezo en diversos platillos.',
                'price' => 12.45,
                'quantity' => 15
            ],
            [
                'name' => 'Chocolate en Barra',
                'description' => 'Chocolate semiamargo ideal para postres y repostería.',
                'price' => 14.20,
                'quantity' => 12
            ]
        ];

        foreach($products as $product){
            Product::create([
                'name' => $product['name'],
                'description' => $product['description'],
                'price' => $product['price'],
                'quantity' => $product['quantity'],
                'category_id' => $categories->random()->id,
                'measure_unit_id' => $measure_units->random()->id,
                'user_id' => $users->random()->id,
                'status' => 'available'
            ]);
        }
    }
}
