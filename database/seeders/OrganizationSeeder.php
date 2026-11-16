<?php

namespace Database\Seeders;

use App\Models\Organization;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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
