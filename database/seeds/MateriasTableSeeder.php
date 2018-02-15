<?php

use Illuminate\Database\Seeder;

class MateriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('materias')->insert([
        ['name' => 'Ingles'],
        ['name' => 'Matematicas'],
        ['name' => 'Artes'],
        ['name' => 'Biologia'],
        ['name' => 'Quimica'],
     
      ]);
    }
}
