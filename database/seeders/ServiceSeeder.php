<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            ['title' => 'web & app development','description' => 'web & development','icon' => 'uploads/images/services'],
            ['title' => 'web design','description' => 'web design','icon' => 'uploads/images/services'],
            ['title' => 'seo','description' => 'seo services','icon' => 'uploads/images/services'],
            ['title' => 'education','description' => 'education','icon' => 'uploads/images/services'],
        ]);
    }
}
