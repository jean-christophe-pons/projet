<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'password' => Hash::make('admin'),
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'street' => '1, place du capitole',
            'zip' => '31000',
            'city' => 'Toulouse',
            'country' => 'France',
            'phone' => '0123456789',
            'admin' => true,
        ]);

        DB::table('users')->insert([
            'password' => Hash::make('test'),
            'name' => 'toto',
            'email' => 'toto@machin.truc',
            'street' => '1, place de la comédie',
            'zip' => '34000',
            'city' => 'Montpellier',
            'country' => 'France',
            'phone' => '9876543210',
        ]);

        DB::table('products')->insert([
            'title' => 'Domaine Léon Barral',
            'description' => 'Vin de caractère, à conserver',
            'profile_photo_path' => 'bouteille1.jpeg',
            'location' => 'Occitanie',
            'price' => 15,
            'category' => 'Faugères',
            'color' => 'rouge',
        ]);

        DB::table('products')->insert([
            'title' => 'Puech',
            'description' => 'Grand vin du Languedoc',
            'profile_photo_path' => 'bouteille2.jpeg',
            'location' => 'Occitanie',
            'price' => 25,
            'category' => 'Pic Saint-Loup',
            'color' => 'rosé',
        ]);
    }
}
