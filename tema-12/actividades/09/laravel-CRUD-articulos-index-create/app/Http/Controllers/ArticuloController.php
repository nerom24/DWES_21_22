<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulo;
use App\Models\Categoria;

class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $articulos = Articulo::all();

        return view('articulos.home',['articulos'=>$articulos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::pluck('descripcion', 'id');
        return view('articulos.create', ['categorias'=>$categorias]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validación del formulario
        $validatedData = $request->validate
        ([
            'descripcion' => ['required', 'string', 'max:10'],
            'modelo' => ['required', 'string', 'max:30'],
            'codigo' => ['required', 'string', 'max:10', 'unique:articulos'],
            'categoria_id' => ['required', 'exists:categorias,id'],
            'precio' => ['required']
        ]);

        $articulo = Articulo::create([

            'descripcion' => $request['descripcion'],
            'modelo' => $request['modelo'],
            'categoria_id' => $request['categoria_id'],
            'unidades' => $request['unidades'],
            'codigo' => $request['codigo'],
            'precio' => $request['precio'],

        ]);

        $articulo->save();

        return redirect()->route('articulos')->with('success','Artículo creado correctamente!');; 


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return ('mostrar');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return('edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        return ('eliminar');
    }
}
