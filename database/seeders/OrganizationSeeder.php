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
            'description' => 'Garden like nobody is watching.',
            'status' => 'public',
            'placard' => 'Next meeting is on Saturday at 10am. Bring your own trowel!',
            'website' => 'https://www.gardenclub.com',
            'email' => 'info@gardenclub.com',
            'user_id' => 1

        ]);

        Organization::factory()->create([
            'name' => 'Resilient Town',
            'description' => 'We focus on strong, resilient towns.',
            'status' => 'public',
            'placard' => 'Next meeting is on Thursday the 10th at 5pm!',
            'email' => 'info@town.org',
            'user_id' => 1
        ]);


        Organization::factory()->create([
            'name' => 'Farm Club',
            'description' => 'Grow food, eat food. Rinse, lather, repeat.',
            'status' => 'private',
            'placard' => 'Next meeting we will harvest the carrots.',
            'email' => 'info@1234.org',
            'user_id' => 1
        ]);
    }
}
