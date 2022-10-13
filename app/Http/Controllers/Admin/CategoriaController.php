<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categoria::orderBy('id', 'desc')->get();
        return view('admin.categorias.index', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:categorias',
            'name_small' => 'required',
            'foto' => 'required|image|max:2048',
            'banner' => 'required|image|max:2048',
        ]);

        $categoria = $request->all();

        if ($banner = $request->file('banner')) {
            $rutaGuardarImg = 'img/';
            $bannerCategoria = "banner" . date('YmdHis') . "." . $banner->getClientOriginalExtension();
            $banner->move($rutaGuardarImg, $bannerCategoria);
            $categoria['banner'] = "$bannerCategoria";
        }

        if ($foto = $request->file('foto')) {
            $rutaGuardarImg = 'img/';
            $fotoCategoria = "foto" . date('YmdHis') . "." . $foto->getClientOriginalExtension();
            $foto->move($rutaGuardarImg, $fotoCategoria);
            $categoria['foto'] = "$fotoCategoria";
        }

        $categoria = Categoria::create($categoria);

        return redirect()->route('admin.categorias.edit', compact('categoria'))->with('info', 'La categoria se creo con exito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Categoria $categoria)
    {
        return view('admin.categorias.show', compact('categoria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Categoria $categoria)
    {
        return view('admin.categorias.edit', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categoria $categoria)
    {
        $request->validate([
            'name' => 'required',
            'slug' => "required|unique:categorias,slug,$categoria->id",
            'name_small' => 'required',
            'foto' => 'image|max:2048',
            'banner' => 'image|max:2048',
        ]);

        $cat = $request->all();

        if ($banner = $request->file('banner')) {
            $rutaGuardarImg = 'img/';
            $bannerCategoria = "banner" . date('YmdHis') . "." . $banner->getClientOriginalExtension();
            $banner->move($rutaGuardarImg, $bannerCategoria);
            $cat['banner'] = "$bannerCategoria";
        }else{
            unset($cat['banner']);
        }

        if ($foto = $request->file('foto')) {
            $rutaGuardarImg = 'img/';
            $fotoCategoria = "foto" . date('YmdHis') . "." . $foto->getClientOriginalExtension();
            $foto->move($rutaGuardarImg, $fotoCategoria);
            $cat['foto'] = "$fotoCategoria";
        }else{
            unset($cat['foto']);
        }

        $categoria->update($cat);

        return redirect()->route('admin.categorias.edit', compact('categoria'))->with('info', 'La categoria se actualizo con exito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categoria $categoria)
    {
        $categoria->delete();
        return redirect()->route('admin.categorias.index')->with('info', 'la categoria se elimino con exito!');
    }
}
