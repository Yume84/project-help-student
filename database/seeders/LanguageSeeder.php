<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('languages')->insert(
            [
                [
                    "label" =>  "Français",
                    "iso"   =>  "fr"
                ],
                [
                    "label" =>  "English",
                    "iso"   =>  "en"
                ],
                [
                    "label" =>  "Español",
                    "iso"   =>  "es"
                ],
                [
                    "label" => "한국어",
                    "iso"   => "kr"
                ]
            ]
        );
    }
}
