<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('socials')->insert([
            ['title' => 'facebook', 'url' => 'https://facebook.com','icon' => '<i class="fab fa-facebook fa-lg"></i>'], 
            ['title' => 'linkedin', 'url' => 'https://linkedin.com','icon' => '<i class="fab fa-linkedin fa-lg"></i>'], 
            ['title' => 'instagram', 'url' => 'https://instagram.com','icon' => '<i class="fab fa-instagram fa-lg"></i>'],
        ]);
    }
}
