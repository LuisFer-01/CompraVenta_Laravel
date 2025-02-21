<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dish;
use App\Models\User;

class DishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $users = User::whereHas('role', function($query){
            $query->where('name','Administrador')->orWhere('name','Mantenedor');
        })->get();

        $dishes = [
            // Menú Parrillero
            [
                'name' => 'Filete de Res a la Parrilla',
                'description' => 'Corte de res sazonado y cocinado a la parrilla, acompañado de papas fritas y pimiento rojo asado.',
                'price' => 55.90,
                'quantity' => 10,
                'menu_id' => 1
            ],
            [
                'name' => 'Papas Fritas Clásicas',
                'description' => 'Papas cortadas en bastones, fritas hasta obtener una textura crujiente.',
                'price' => 18.50,
                'quantity' => 15,
                'menu_id' => 1
            ],
            [
                'name' => 'Refresco Cola',
                'description' => 'Bebida gaseosa fría en botella de 500ml, ideal para acompañar comidas.',
                'price' => 7.50,
                'quantity' => 20,
                'menu_id' => 1
            ],
        
            // Menú Clásico de Pollo
            [
                'name' => 'Pechuga de Pollo a la Plancha',
                'description' => 'Pechuga de pollo cocinada a la plancha con una ligera sazón de especias.',
                'price' => 32.99,
                'quantity' => 12,
                'menu_id' => 2
            ],
            [
                'name' => 'Ensalada de Tomate y Cebolla',
                'description' => 'Ensalada fresca con tomate en rodajas y cebolla blanca aliñada con aceite de oliva.',
                'price' => 14.75,
                'quantity' => 15,
                'menu_id' => 2
            ],
            [
                'name' => 'Pan para Hamburguesa con Mayonesa',
                'description' => 'Pan de hamburguesa con una capa de mayonesa ligera, ideal para acompañar.',
                'price' => 10.25,
                'quantity' => 18,
                'menu_id' => 2
            ],
        
            // Menú Mar y Tierra
            [
                'name' => 'Camarones Jumbo al Ajo',
                'description' => 'Camarones grandes salteados con mantequilla y ajo, servidos con arroz blanco.',
                'price' => 48.90,
                'quantity' => 10,
                'menu_id' => 3
            ],
            [
                'name' => 'Arroz con Vegetales',
                'description' => 'Arroz blanco cocinado con vegetales frescos como pimientos y cebolla.',
                'price' => 16.40,
                'quantity' => 20,
                'menu_id' => 3
            ],
            [
                'name' => 'Jugo Natural',
                'description' => 'Jugo de frutas naturales recién exprimido, sin conservantes.',
                'price' => 9.99,
                'quantity' => 25,
                'menu_id' => 3
            ],
        
            // Menú Del Chef
            [
                'name' => 'Hamburguesa Gourmet',
                'description' => 'Hamburguesa con pechuga de pavo, queso cheddar, tomate y lechuga, servida en pan especial.',
                'price' => 39.50,
                'quantity' => 15,
                'menu_id' => 4
            ],
            [
                'name' => 'Papas Fritas con Salsa de Tomate',
                'description' => 'Porción de papas fritas crujientes con salsa de tomate casera.',
                'price' => 19.20,
                'quantity' => 18,
                'menu_id' => 4
            ],
            [
                'name' => 'Refresco de Cola',
                'description' => 'Bebida gaseosa refrescante en lata de 350ml.',
                'price' => 8.25,
                'quantity' => 22,
                'menu_id' => 4
            ],
        
            // Menú Desayuno Energético
            [
                'name' => 'Tostadas con Queso Cheddar',
                'description' => 'Pan tostado con una capa de queso cheddar derretido.',
                'price' => 12.80,
                'quantity' => 20,
                'menu_id' => 5
            ],
            [
                'name' => 'Café Filtrado',
                'description' => 'Café molido filtrado, servido caliente en taza.',
                'price' => 10.50,
                'quantity' => 30,
                'menu_id' => 5
            ],
            [
                'name' => 'Vaso de Leche Entera',
                'description' => 'Vaso de leche entera pasteurizada, ideal para acompañar el desayuno.',
                'price' => 7.20,
                'quantity' => 25,
                'menu_id' => 5
            ],
        
            // Menú Light
            [
                'name' => 'Ensalada de Pollo',
                'description' => 'Ensalada fresca con pechuga de pollo, pimiento rojo y cebolla, acompañada de mayonesa ligera.',
                'price' => 28.75,
                'quantity' => 15,
                'menu_id' => 6
            ],
            [
                'name' => 'Batido Natural',
                'description' => 'Batido de frutas naturales sin azúcar añadida.',
                'price' => 12.60,
                'quantity' => 20,
                'menu_id' => 6
            ],
            [
                'name' => 'Tostadas Integrales',
                'description' => 'Rebanadas de pan integral tostado, ideales para acompañar comidas ligeras.',
                'price' => 8.90,
                'quantity' => 18,
                'menu_id' => 6
            ]
        ];
        
        foreach($dishes as $dish){
            Dish::create([
                'name' => $dish['name'],
                'description' => $dish['description'],
                'price' => $dish['price'],
                'quantity' => $dish['quantity'],
                'menu_id' => $dish['menu_id'],
                'user_id' => $users->random()->id
            ]);
        }
    }
}
