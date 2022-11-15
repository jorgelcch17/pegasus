<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
            'name' => 'Diamond × 100',
            'slug' => Str::slug('Diamond × 100'),
            'bonus' => '+ Bonus 10',
            'image' => 'freefire.webp',
            'price' => '1',
            'is_active' => true,
        ]);
        DB::table('freefire_items')->insert([
            'name' => 'Diamond × 310',
            'slug' => Str::slug('Diamond × 310'),
            'bonus' => '+ Bonus 31',
            'image' => 'freefire.webp',
            'price' => '3',
            'is_active' => true,
        ]);
        DB::table('freefire_items')->insert([
            'name' => 'Diamond × 520',
            'slug' => Str::slug('Diamond × 520'),
            'bonus' => '+ Bonus 52',
            'image' => 'freefire.webp',
            'price' => '5',
            'is_active' => true,
        ]);
        DB::table('freefire_items')->insert([
            'name' => 'Diamond × 1050',
            'slug' => Str::slug('Diamond × 1050'),
            'bonus' => '+ Bonus 105',
            'image' => 'freefire.webp',
            'price' => '10',
            'is_active' => true,
        ]);
        DB::table('freefire_items')->insert([
            'name' => 'Diamond × 2160',
            'slug' => Str::slug('Diamond × 2160'),
            'bonus' => '+ Bonus 216',
            'image' => 'freefire.webp',
            'price' => '20',
            'is_active' => true,
        ]);
        DB::table('freefire_items')->insert([
            'name' => 'Diamond × 5580',
            'slug' => Str::slug('Diamond × 5580'),
            'bonus' => '+ Bonus 558',
            'image' => 'freefire.webp',
            'price' => '50',
            'is_active' => true,
        ]);
        DB::table('freefire_items')->insert([
            'name' => 'Tarjeta Semanal',
            'slug' => 'tarjeta-semanal',
            'bonus' => '',
            'image' => 'tarjeta-semanal.jpg',
            'price' => '2',
            'is_active' => true,
        ]);
        DB::table('freefire_items')->insert([
            'name' => 'Tarjeta Mensual',
            'slug' => 'tarjeta-mensual',
            'bonus' => '',
            'image' => 'tarjeta-mensual.jpg',
            'price' => '10',
            'is_active' => true,
        ]);
    }
}
