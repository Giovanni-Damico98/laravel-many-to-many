<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Technology;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // chiamo il ProjectSeeder per il popolamento della tabella
        $this->call([
            TypeSeeder::class,
            ProjectSeeder::class,
            TechnologySeeder::class,
            ProjectTechnologySeeder::class,
        ]);
    }
}