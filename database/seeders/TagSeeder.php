<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now()->toDateTimeString();
        DB::table('tags')->insert(
            [
                [
                    "label"         => "Santé",
                    "created_at"    => $now,
                    "updated_at"    => $now,
                ],
                [
                    "label"         => "Social",
                    "created_at"    => $now,
                    "updated_at"    => $now,
                ],
                [
                    "label"         => "Universitaire",
                    "created_at"    => $now,
                    "updated_at"    => $now,
                ],
                [
                    "label"         => "Logement",
                    "created_at"    => $now,
                    "updated_at"    => $now,
                ],
                [
                    "label"         => "Finance",
                    "created_at"    => $now,
                    "updated_at"    => $now,
                ],
                [
                    "label"         => "Papiers",
                    "created_at"    => $now,
                    "updated_at"    => $now,
                ],
            ]
        );
    }
}
