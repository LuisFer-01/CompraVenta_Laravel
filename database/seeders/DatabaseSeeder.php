<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            /* RoleSeeder::class, */
            /* UserSeeder::class, */
            /* CategorySeeder::class, */
            /* MeasureUnitSeeder::class, */
            /* ProductSeeder::class, */
            /* MenuSeeder::class, */
            /* DishSeeder::class, */
            /* CustomerSeeder::class, */
            /* SupplierSeeder::class, */
            /* TipoDocumentoSeeder::class, */
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
