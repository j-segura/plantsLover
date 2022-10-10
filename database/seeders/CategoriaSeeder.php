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
        $categoria->slug = 'bonsai';
        $categoria->name_small = 'Bonsai';
        $categoria->foto = 'cat1.jpg';
        $categoria->banner = 'banner1.jpg';
        $categoria->save();

        $categoria = new Categoria();
        $categoria->name = 'Plantas de regalo';
        $categoria->slug = 'plantas-de-regalo';
        $categoria->name_small = 'Para Regalo';
        $categoria->foto = 'cat4.jpg';
        $categoria->banner = 'banner2.jpg';
        $categoria->save();

        $categoria = new Categoria();
        $categoria->name = 'Plantas de oficina';
        $categoria->slug = 'plantas-de-oficina';
        $categoria->name_small = 'Para Oficina';
        $categoria->foto = 'cat3.jpg';
        $categoria->banner = 'banner2.jpg';
        $categoria->save();

        $categoria = new Categoria();
        $categoria->name = 'Plantas de casa';
        $categoria->slug = 'plantas-de-casa';
        $categoria->name_small = 'Para Hogar';
        $categoria->foto = 'cat2.jpg';
        $categoria->banner = 'banner1.jpg';
        $categoria->save();
    }
}
