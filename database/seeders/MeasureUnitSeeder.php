<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MeasureUnit;

class MeasureUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $measure_units = [
            [
                'name' => 'Kilogramo',
                'description' => 'Unidad de peso utilizada para carnes, verduras, frutas y otros productos sólidos.'
            ],
            [
                'name' => 'Gramo',
                'description' => 'Unidad de peso utilizada para especias, condimentos y porciones pequeñas de ingredientes.'
            ],
            [
                'name' => 'Litro',
                'description' => 'Unidad de volumen utilizada para líquidos como aceites, leche y jugos.'
            ],
            [
                'name' => 'Mililitro',
                'description' => 'Unidad de volumen utilizada para pequeñas cantidades de líquidos en recetas y bebidas.'
            ],
            [
                'name' => 'Unidad',
                'description' => 'Medida utilizada para productos individuales como huevos, pan o botellas de bebidas.'
            ],
            [
                'name' => 'Docena',
                'description' => 'Medida utilizada para compras en conjunto de 12 unidades, como huevos o panecillos.'
            ],
            [
                'name' => 'Cucharada',
                'description' => 'Unidad de medida utilizada para ingredientes como azúcar, sal o aceite en recetas.'
            ],
            [
                'name' => 'Cucharadita',
                'description' => 'Unidad de medida más pequeña utilizada para especias y condimentos.'
            ],
            [
                'name' => 'Taza',
                'description' => 'Medida de volumen utilizada en recetas para líquidos o ingredientes secos como harina y azúcar.'
            ],
            [
                'name' => 'Pieza',
                'description' => 'Unidad utilizada para ingredientes grandes como quesos, panes o frutas específicas.'
            ],
            [
                'name' => 'Paquete',
                'description' => 'Unidad utilizada para productos empacados como fideos, arroz o especias.'
            ],
            [
                'name' => 'Caja',
                'description' => 'Medida utilizada para compras en gran cantidad como bebidas, productos enlatados o insumos de cocina.'
            ],
            [
                'name' => 'Botella',
                'description' => 'Unidad utilizada para líquidos en envases cerrados como aceite, vinagre o licores.'
            ],
            [
                'name' => 'Lata',
                'description' => 'Unidad de medida utilizada para productos enlatados como maíz, atún o salsas.'
            ]
        ];

        foreach($measure_units as $measure_unit){
            MeasureUnit::create([
                'name' => $measure_unit['name'],
                'description' => $measure_unit['description'],
                'status' => 'available'
            ]);
        }
    }
}
