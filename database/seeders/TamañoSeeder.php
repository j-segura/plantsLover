<?php

namespace Database\Seeders;

use App\Models\Tamaño;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TamañoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tamaño = new Tamaño();
        $tamaño->name = 'Pequeña';
        $tamaño->slug = 'pequeña';
        $tamaño->save();

        $tamaño = new Tamaño();
        $tamaño->name = 'Mediana';
        $tamaño->slug = 'mediana';
        $tamaño->save();

        $tamaño = new Tamaño();
        $tamaño->name = 'Grande';
        $tamaño->slug = 'grande';
        $tamaño->save();
    }
}
