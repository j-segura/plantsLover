<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tamaño;

class TamañoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tamaños = Tamaño::orderBy('id', 'desc')->get();
        return view('admin.tamaños.index', compact('tamaños'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tamaños.create');
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
            'slug' => 'required|unique:tamaños'
        ]);

        $tamaño = Tamaño::create($request->all());

        return redirect()->route('admin.tamaños.edit', compact('tamaño'))->with('info', 'El tamaño se creo con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tamaño $tamaño)
    {
        return view('admin.tamaños.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tamaño $tamaño)
    {
        return view('admin.tamaños.edit', compact('tamaño'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tamaño $tamaño)
    {
        $request->validate([
            'name' => 'required',
            'slug' => "required|unique:tamaños,slug,$tamaño->id"
        ]);

        $tamaño->update($request->all());

        return redirect()->route('admin.tamaños.edit', compact('tamaño'))->with('info', 'El tamaño se actualizo con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tamaño $tamaño)
    {
        $tamaño->delete();
        return redirect()->route('admin.tamaños.index')->with('info', 'El tamaño se elimino con exito');
    }
}
