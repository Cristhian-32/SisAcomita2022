<?php

namespace Database\Seeders;

use App\Models\partner;
use App\Models\son;
use App\Models\spouse;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);
        partner::factory(50)->create();
        son::factory(50)->create();
        spouse::factory(50)->create();
    }
}
