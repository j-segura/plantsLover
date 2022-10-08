<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Plant;
use App\Models\Tamaño;
use Illuminate\Http\Request;

class PrincipalContorller extends Controller
{
    public function index(){
        $plants = Plant::orderBy('id', 'desc')->paginate(6);
        $categorias = Categoria::all();
        $nuevas_categorias = Categoria::orderBy('id', 'desc')->paginate(2);

        return view('plants.index', compact('plants', 'categorias', 'nuevas_categorias'));
    }

    public function tienda(){
        $plants = Plant::orderBy('id', 'desc')->paginate(12);
        return view('plants.tienda', compact('plants'));
    }

    public function show(Plant $producto){
        return view('plants.show', compact('producto'));
    }

    public function categoria(Categoria $categoria){
        $plants = Plant::where('categoria_id', $categoria->id)->latest('id')->paginate(9);
        return view('plants.categoria', compact('plants', 'categoria'));
    }

    public function tamaño(Tamaño $tamaño){
        $plants = Plant::where('tamaño_id', $tamaño->id)->latest('id')->paginate(9);
        return view('plants.tamaño', compact('plants', 'tamaño'));
    }
}
