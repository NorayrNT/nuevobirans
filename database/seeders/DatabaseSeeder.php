<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\MenuSeeder;
use Database\Seeders\ServiceSeeder;
use Database\Seeders\SocialSeeder;
use Database\Seeders\OpportunitySeeder;

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
        $this->call([
            MenuSeeder::class,
            ServiceSeeder::class,
            SocialSeeder::class,
            OpportunitySeeder::class
        ]);
    }
}
