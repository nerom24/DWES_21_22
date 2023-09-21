<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulo;
use App\Models\Categoria;
use Illuminate\Validation\Rule;

class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        //$articulos = Articulo::search(trim($request->search));
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
        return view('articulos.create', ['categorias' => $categorias]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // validación del formulario
        $validatedData = $request->validate
        ([
            'descripcion' => ['required', 'string', 'max:100'],
            'modelo' => ['required', 'string', 'max:100'],
            'codigo' => ['required', 'string', 'max:10', 'unique:articulos'],
            'categoria_id' => ['required', 'exists:categorias,id'],
            'precio' => ['required']
        ]);

        $articulo = Articulo::create([

            'descripcion' => $request['descripcion'],
            'modelo' => $request['modelo'],
            'categoria_id' => $request['categoria_id'],
            'codigo' => $request['codigo'],
            'unidades' => $request['unidades'],
            'precio' => $request['precio']

        ]);

        $articulo->save();

        return redirect()->route('articulos')
                         ->with('success', 'Articulo creado correctamente' ); 


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $articulo = Articulo::find($id);
        $categorias = Categoria::pluck('descripcion', 'id');
        return view('articulos.show', [
                                        'articulo' => $articulo,
                                        'categorias' => $categorias
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $articulo = Articulo::find($id);
        $categorias = Categoria::pluck('descripcion', 'id');
        return view('articulos.edit', [
                                        'articulo' => $articulo,
                                        'categorias' => $categorias
        ]);
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
        $validatedData = $request->validate
        ([
            'descripcion' => ['required', 'string', 'max:100'],
            'modelo' => ['required', 'string', 'max:100'],
            'codigo' => ['required', 'string', 'max:10', Rule::unique('articulos')->ignore($id)],
            'categoria_id' => ['required', 'exists:categorias,id'],
            'precio' => ['required']
        ]
    );
        
        $articulo = Articulo::find($id);

        $articulo->descripcion = $request['descripcion'];
        $articulo->modelo = $request['modelo'];
        $articulo->codigo = $request['codigo'];
        $articulo->categoria_id = $request['categoria_id'];
        $articulo->unidades = $request['unidades'];
        $articulo->precio = $request['precio'];

        $articulo->save();

        return redirect()->route('articulos')
                         ->with('success', 'Articulo actualizado correctamente' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Articulo $articulo)
    {
        //
        $articulo->delete();
        return redirect()->route('articulos')
                         ->with('success', 'Articulo eliminado correctamente' );
    }
}
