<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoria = new Categoria();
        $categoria->name = 'Bonsai';
        $categoria->name_small = 'Bonsai';
        $categoria->save();

        $categoria = new Categoria();
        $categoria->name = 'Plantas de
        regalo';
        $categoria->name_small = 'Para Regalo';
        $categoria->save();

        $categoria = new Categoria();
        $categoria->name = 'Plantas de
        oficina';
        $categoria->name_small = 'Para Oficina';
        $categoria->save();

        $categoria = new Categoria();
        $categoria->name = 'Plantas de
        casa';
        $categoria->name_small = 'Para Hogar';
        $categoria->save();
    }
}
