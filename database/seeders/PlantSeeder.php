<?php

namespace Database\Seeders;

use App\Models\Plant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Plant::factory()->create([
            'family' => 'Lamiaceae',
            'name' => 'Catnip',
            'latin_name' => 'Nepeta cataria',
            'description' => 'From the mint family, cats love this herb.',
            'propagation' => 'From seed or divisions.',
            'comment' => ''
        ]);
    }
}
