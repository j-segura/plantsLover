<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Models\Plant;
use App\Models\Tamaño;

class PlantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plants = Plant::orderBy('id', 'desc')->get();
        return view('admin.plants.index', compact('plants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::pluck('name', 'id')->toArray();
        $tamaños = Tamaño::pluck('name', 'id')->toArray();
        return view('admin.plants.create', compact('categorias', 'tamaños'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'slug' => 'required|unique:plants',
                'description' => 'required',
                'extract' => 'required',
                'foto' => 'required|image|max:2048',
                'precio' => 'required',
                'categoria_id' => 'required',
                'tamaño_id' => 'required',
            ]
        );

        $plant = $request->all();

        if ($foto = $request->file('foto')) {
            $rutaGuardarImg = 'img/products/';
            $fotoPlant = "plant" . date('YmdHis') . "." . $foto->getClientOriginalExtension();
            $foto->move($rutaGuardarImg, $fotoPlant);
            $plant['foto'] = "$fotoPlant";
        }

        $plant = Plant::create($plant);

        return redirect()->route('admin.plants.index')->with('info', 'La planta se agrego con exito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Plant $plant)
    {
        return view('admin.plants.show', compact('plant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Plant $plant)
    {
        $categorias = Categoria::pluck('name', 'id')->toArray();
        $tamaños = Tamaño::pluck('name', 'id')->toArray();
        return view('admin.plants.edit', compact('plant', 'categorias', 'tamaños'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plant $plant)
    {
        $request->validate(
            [
                'name' => 'required',
                'slug' => "required|unique:plants,slug,$plant->id",
                'description' => 'required',
                'extract' => 'required',
                'foto' => 'required|image|max:2048',
                'precio' => 'required',
                'categoria_id' => 'required',
                'tamaño_id' => 'required',
            ]
        );

        $planta = $request->all();

        if ($foto = $request->file('foto')) {
            $rutaGuardarImg = 'img/products/';
            $fotoPlant = "plant" . date('YmdHis') . "." . $foto->getClientOriginalExtension();
            $foto->move($rutaGuardarImg, $fotoPlant);
            $planta['foto'] = "$fotoPlant";
        } else {
            unset($plant['foto']);
        }

        $plant->update($planta);
        return redirect()->route('admin.plants.edit', compact('plant'))->with('info', 'La planta se actualizo con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plant $plant)
    {
        $plant->delete();
        return redirect()->route('admin.plants.index')->with('info', 'la planta se elimino con exito!');
    }
}
