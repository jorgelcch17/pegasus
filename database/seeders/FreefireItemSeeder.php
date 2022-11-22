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
            'name' => 'Diamantes: 100',
            'slug' => Str::slug('Diamond × 100'),
            'bonus' => '+ Bonus 10',
            'image' => 'free-fire-diamantes.jpg',
            'price' => '6,99',
            'is_active' => true,
        ]);
        DB::table('freefire_items')->insert([
            'name' => 'Diamantes: 310',
            'slug' => Str::slug('Diamond × 310'),
            'bonus' => '+ Bonus 31',
            'image' => 'free-fire-diamantes.jpg',
            'price' => '20,5',
            'is_active' => true,
        ]);
        DB::table('freefire_items')->insert([
            'name' => 'Diamantes: 520',
            'slug' => Str::slug('Diamond × 520'),
            'bonus' => '+ Bonus 52',
            'image' => 'free-fire-diamantes.jpg',
            'price' => '33,99',
            'is_active' => true,
        ]);
        DB::table('freefire_items')->insert([
            'name' => 'Diamantes: 1050',
            'slug' => Str::slug('Diamond × 1050'),
            'bonus' => '+ Bonus 105',
            'image' => 'free-fire-diamantes.jpg',
            'price' => '68,5',
            'is_active' => true,
        ]);
        DB::table('freefire_items')->insert([
            'name' => 'Diamantes: 2160',
            'slug' => Str::slug('Diamond × 2160'),
            'bonus' => '+ Bonus 216',
            'image' => 'free-fire-diamantes.jpg',
            'price' => '136,99',
            'is_active' => true,
        ]);
        DB::table('freefire_items')->insert([
            'name' => 'Diamantes: 5580',
            'slug' => Str::slug('Diamond × 5580'),
            'bonus' => '+ Bonus 558',
            'image' => 'free-fire-diamantes.jpg',
            'price' => '342,5',
            'is_active' => true,
        ]);
        DB::table('freefire_items')->insert([
            'name' => 'Tarjeta Semanal',
            'slug' => 'tarjeta-semanal',
            'bonus' => '',
            'image' => 'free-fire-tarjeta-semanal.png',
            'price' => '13,5',
            'is_active' => true,
        ]);
        DB::table('freefire_items')->insert([
            'name' => 'Tarjeta Mensual',
            'slug' => 'tarjeta-mensual',
            'bonus' => '',
            'image' => 'free-fire-tarjeta-mensual.png',
            'price' => '68,99',
            'is_active' => true,
        ]);
    }
}
