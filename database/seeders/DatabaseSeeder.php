<?php

namespace Database\Seeders;

use App\Models\Organization;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // seed the org types data
        $this->call([
            OrganizationTypeSeeder::class,
        ]);

        // seed the plants data
        $this->call([
            PlantSeeder::class,
        ]);

        Organization::factory()->create([
            'name' => 'Garden Club',
            'description' => 'Garden like nobody is watching.'
        ]);


        Organization::factory()->create([
            'name' => 'Resilient Town',
            'description' => 'We focus on strong, resilient towns.'
        ]);


        Organization::factory()->create([
            'name' => 'Farm Club',
            'description' => 'Grow food, eat food. Rinse, lather, repeat.',
            'status' => 'private'
        ]);
    }
}
