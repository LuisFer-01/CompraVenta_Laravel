<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menus = [
            [
                'name' => 'Menú Parrillero',
                'description' => 'Un plato completo con filete de res a la parrilla, acompañado de papas fritas, pimiento rojo asado y una bebida refrescante.'
            ],
            [
                'name' => 'Menú Clásico de Pollo',
                'description' => 'Pechuga de pollo a la plancha servida con ensalada de tomate y cebolla, acompañada de pan para hamburguesa y mayonesa casera.'
            ],
            [
                'name' => 'Menú Mar y Tierra',
                'description' => 'Un platillo especial con camarones jumbo salteados en mantequilla y ajo, servidos con una guarnición de arroz y vegetales frescos.'
            ],
            [
                'name' => 'Menú Del Chef',
                'description' => 'Una hamburguesa gourmet con queso cheddar, pechuga de pavo, tomate y lechuga, servida con papas fritas y una salsa de tomate casera.'
            ],
            [
                'name' => 'Menú Desayuno Energético',
                'description' => 'Tostadas de pan con queso cheddar derretido, acompañadas de café molido recién hecho y un vaso de leche entera.'
            ],
            [
                'name' => 'Menú Light',
                'description' => 'Ensalada fresca con pechuga de pollo, pimiento rojo, cebolla blanca y aderezo de mayonesa ligera, acompañada de una bebida natural.'
            ]
        ];

        foreach($menus as $menu){
            Menu::create([
                'name' => $menu['name'],
                'description' => $menu['description'],
                'status' => 'available'
            ]);
        }
    }
}
