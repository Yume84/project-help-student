<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\College;

class CollegeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        College::create([
            'name' => 'Université Gustave Eiffel',
            'city' => 'Champs-sur-Marne',
            'code_postal' => '77454',
        ]);
        College::create([
            'name' => 'Université Sorbonne Paris Nord',
            'city' => 'Villetaneuse',
            'code_postal' => '93430',
        ]);
        College::create([
            'name' => 'Université Paris Nanterre',
            'city' => 'Nanterre',
            'code_postal' => '92000',
        ]);
        College::create([
            'name' => 'Université Paris 8',
            'city' => 'Saint-Denis',
            'code_postal' => '93200',
        ]);
        College::create([
            'name' => 'Sorbonne Université',
            'city' => 'Paris',
            'code_postal' => '75005',
        ]);
        College::create([
            'name' => 'Université Panthéon-Sorbonne',
            'city' => 'Paris',
            'code_postal' => '75005',
        ]);
    }
}
