<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OpportunitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('opportunities')->insert([
            ['title' => 'professional web development','content' =>'content on the web development goes here','img' => 'images/web'],
            ['title' => 'seo optimization','content' => 'content on the seo optimization goes here','img' => 'images/web'],
            ['title' => 'education','content' => 'content on the education goes here','img' => 'images/web'],
        ]);
    }
}
