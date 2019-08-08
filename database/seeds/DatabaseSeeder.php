<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategoris')->insert([
            'kategoriNama'=>'Romance'
        ]);
        DB::table('kategoris')->insert([
            'kategoriNama'=>'Fiksi'
        ]);
        DB::table('kategoris')->insert([
            'kategoriNama'=>'Edukasi'
        ]);
        DB::table('kategoris')->insert([
            'kategoriNama'=>'Sejarah'
        ]);
    }
}
