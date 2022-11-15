<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MobileLegendItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mobile_legend_items')->insert([
            'name' => 'Diamantes x78',
            'slug' => Str::slug('Diamantes x78'),
            'bonus' => '+ 8',
            'description' => '',
            'image' => 'mobile_legend.png',
            'price' => '1.59',
            'is_active' => true,
        ]);
        DB::table('mobile_legend_items')->insert([
            'name' => 'Diamantes x156',
            'slug' => Str::slug('Diamantes x156'),
            'bonus' => '+ 16',
            'description' => '',
            'image' => 'mobile_legend.png',
            'price' => '3',
            'is_active' => true,
        ]);
        DB::table('mobile_legend_items')->insert([
            'name' => 'Diamantes x234',
            'slug' => Str::slug('Diamantes x234'),
            'bonus' => '+ 23',
            'description' => '',
            'image' => 'mobile_legend.png',
            'price' => '4.49',
            'is_active' => true,
        ]);
        DB::table('mobile_legend_items')->insert([
            'name' => 'Diamantes x625',
            'slug' => Str::slug('Diamantes x625'),
            'bonus' => '+ 81',
            'description' => '',
            'image' => 'mobile_legend.png',
            'price' => '11.29',
            'is_active' => true,
        ]);
        DB::table('mobile_legend_items')->insert([
            'name' => 'Diamantes x1860',
            'slug' => Str::slug('Diamantes x1860'),
            'bonus' => '+ 335',
            'description' => '',
            'image' => 'mobile_legend.png',
            'price' => '32.59',
            'is_active' => true,
        ]);
        DB::table('mobile_legend_items')->insert([
            'name' => 'Diamantes x3099',
            'slug' => Str::slug('Diamantes x3099'),
            'bonus' => '+ 589',
            'description' => '',
            'image' => 'mobile_legend.png',
            'price' => '54.99',
            'is_active' => true,
        ]);
        DB::table('mobile_legend_items')->insert([
            'name' => 'Diamantes x4649',
            'slug' => Str::slug('Diamantes 4649'),
            'bonus' => '+ 883',
            'description' => '',
            'image' => 'mobile_legend.png',
            'price' => '81.79',
            'is_active' => true,
        ]);
        DB::table('mobile_legend_items')->insert([
            'name' => 'Diamantes x7740',
            'slug' => Str::slug('Diamantes x7740'),
            'bonus' => '+ 1548',
            'description' => '',
            'image' => 'mobile_legend.png',
            'price' => '112.99',
            'is_active' => true,
        ]);
    }
}
