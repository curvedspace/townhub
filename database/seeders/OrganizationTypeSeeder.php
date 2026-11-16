<?php

namespace Database\Seeders;

use App\Models\OrganizationType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrganizationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orgTypes = [
            'Business',
            'Non-Profit',
            'Club',
            'Other'
        ];

        foreach($orgTypes as $orgType) {
            OrganizationType::create(['name' => $orgType,]);
        };
    }
}
