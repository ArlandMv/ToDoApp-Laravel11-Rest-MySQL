<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Todo::factory(20)->create();
        //Todo::factory()->count(10)->create();

        DB::table('todos')->insert([
            ['description' => 'Learn Laravel', 'completed' => false],
            ['description' => 'Build an API', 'completed' => true],
        ]);
    }
}
