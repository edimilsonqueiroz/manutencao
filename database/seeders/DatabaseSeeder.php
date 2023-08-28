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
        // \App\Models\User::factory(10)->create();

       
        \App\Models\User::factory()->create([
                'name' => 'EDIMILSON FRANCISCO DE QUEIROZ',
                'email' => 'edimilsonqueiroz681@gmail.com',
                'profile' => 'Administrador',
                'status' => 1,
                'password' => bcrypt('efq170880')
            ]);
        
    }
}
