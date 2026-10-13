<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SzobatipusokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('szobatipusok')->insert([
            ['id' => 1, 'tipus_nev' => 'egyéni tanulás', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'tipus_nev' => 'csoportmunka', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'tipus_nev' => 'számítógépes terem', 'created_at' => now(), 'updated_at' => now()],
        ]);

        DB::table('tanuloszobak')->insert([
            ['id' => 1, 'szobatipus_id' => 1, 'szoba_nev', 'Csendes' 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'szobatipus_id' => 2, 'szoba_nev', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'szobatipus_id' => 3, 'szoba_nev', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
