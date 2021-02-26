<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            ['parent_id' => '0','order' => '1', 'title' => 'services','url' => '/#services'],
            ['parent_id' => '0','order' => '2', 'title' => 'about','url' => '/about'],
            ['parent_id' => '0','order' => '3', 'title' => 'education','url' => '/education'],
            ['parent_id' => '0','order' => '4', 'title' => 'contact','url' => '/contact'],
        ]);
    }
}
