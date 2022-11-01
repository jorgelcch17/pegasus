<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class FreefireItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('freefire_items')->insert([
            'name' => 'Diamond × 100 + Bonus 10',
            'slug' => 'item-1',
            'image' => 'freefire.webp',
            'price' => '1',
            'is_active' => true,
        ]);
        DB::table('freefire_items')->insert([
            'name' => 'Diamond × 310 + Bonus 31',
            'slug' => 'item-2',
            'image' => 'freefire.webp',
            'price' => '3',
            'is_active' => true,
        ]);
        DB::table('freefire_items')->insert([
            'name' => 'Diamond × 520 + Bonus 52',
            'slug' => 'item-3',
            'image' => 'freefire.webp',
            'price' => '5',
            'is_active' => true,
        ]);
        DB::table('freefire_items')->insert([
            'name' => 'Diamond × 1050 + Bonus 105',
            'slug' => 'item-4',
            'image' => 'freefire.webp',
            'price' => '10',
            'is_active' => true,
        ]);
        DB::table('freefire_items')->insert([
            'name' => 'Diamond × 2160 + Bonus 216',
            'slug' => 'item-5',
            'image' => 'freefire.webp',
            'price' => '20',
            'is_active' => true,
        ]);
        DB::table('freefire_items')->insert([
            'name' => 'Diamond × 5580 + Bonus 580',
            'slug' => 'item-6',
            'image' => 'freefire.webp',
            'price' => '50',
            'is_active' => true,
        ]);
        DB::table('freefire_items')->insert([
            'name' => 'Tarjeta Semanal',
            'slug' => 'tarjeta-semanal',
            'image' => 'tarjeta-semanal.jpg',
            'price' => '2',
            'is_active' => true,
        ]);
        DB::table('freefire_items')->insert([
            'name' => 'Tarjeta Mensual',
            'slug' => 'tarjeta-mensual',
            'image' => 'tarjeta-mensual.jpg',
            'price' => '10',
            'is_active' => true,
        ]);
    }
}
