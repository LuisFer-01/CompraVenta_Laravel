<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Carnes y Aves',
                'description' => 'Carnes de res, cerdo, pollo y otras aves utilizadas en la preparación de platillos.'
            ],
            [
                'name' => 'Pescados y Mariscos',
                'description' => 'Productos del mar como pescados, camarones, calamares y otros mariscos frescos o congelados.'
            ],
            [
                'name' => 'Frutas y Verduras',
                'description' => 'Frutas y verduras frescas utilizadas para ensaladas, guarniciones y jugos naturales.'
            ],
            [
                'name' => 'Lácteos y Derivados',
                'description' => 'Productos como leche, queso, mantequilla y yogur utilizados en diversas recetas.'
            ],
            [
                'name' => 'Cereales y Harinas',
                'description' => 'Harinas, arroz, avena y otros cereales utilizados para la preparación de masas y acompañamientos.'
            ],
            [
                'name' => 'Condimentos y Especias',
                'description' => 'Especias, hierbas y condimentos que realzan el sabor de los platillos.'
            ],
            [
                'name' => 'Bebidas',
                'description' => 'Refrescos, jugos, café, té y otras bebidas consumidas en el restaurante.'
            ],
            [
                'name' => 'Embutidos y Fiambres',
                'description' => 'Productos como jamón, chorizo, salchichas y mortadela usados en distintos platillos.'
            ],
            [
                'name' => 'Aceites y Grasas',
                'description' => 'Aceites vegetales, manteca y otros productos grasos utilizados en la cocina.'
            ],
            [
                'name' => 'Enlatados y Conservas',
                'description' => 'Alimentos enlatados y conservas como atún, maíz, salsas y mermeladas.'
            ],
            [
                'name' => 'Productos Congelados',
                'description' => 'Alimentos congelados como papas fritas, vegetales y carnes listas para su uso.'
            ],
            [
                'name' => 'Limpieza e Higiene',
                'description' => 'Productos de limpieza e higiene utilizados en la cocina y áreas comunes del restaurante.'
            ],
            [
                'name' => 'Desechables y Envases',
                'description' => 'Servilletas, envases, cubiertos y otros artículos desechables utilizados en el servicio.'
            ]
        ];

        foreach($categories as $category){
            Category::create($category);
        }
    }
}
