<?php

namespace Database\Seeders;

use App\Models\activity;
use App\Models\assistence;
use App\Models\Fine;
use App\Models\partner;
use App\Models\son;
use App\Models\spouse;
use App\Models\stand;
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

        partner::factory(20)->create();
        son::factory(20)->create();
        spouse::factory(20)->create();
        activity::factory(20)->create();
        assistence::factory(20)->create();
        Fine::factory(20)->create();
        stand::factory(30)->create();
        $this->call(PostSeeder::class);
    }
}
