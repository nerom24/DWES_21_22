<?php

namespace App\Http\Controllers;

use App\Cuenta;
use App\Cliente;
use Illuminate\Http\Request;

use App\Http\Requests\CreateCuentaRequest;

class CuentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $request->user()->autorizeRoles(['admin','user']);
        $cuentas = Cuenta::search($request->search)->paginate(5);
        return view('cuentas.indexcuentas', compact('cuentas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes = Cliente::all()->pluck('apellidos', 'id')->sort();
        return view('cuentas.createcuenta', compact('clientes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCuentaRequest $request)
    {
        $request->user()->autorizeRoles('admin');
        
        $cuenta = new cuenta($request->all());
        $cuenta->save();
        
        flash('Cuenta Creado Correctamente')->success();

        return redirect()->route('cuentas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cuenta  $cuenta
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Cuenta $cuenta)
    {
        $request->user()->autorizeRoles(['admin','user']);
        
        return view('cuentas.showcuenta',compact('cuenta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cuenta  $cuenta
     * @return \Illuminate\Http\Response
     */
    public function edit(Cuenta $cuenta)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cuenta  $cuenta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cuenta $cuenta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cuenta  $cuenta
     * @return \Illuminate\Http\Response
     */
    
    public function destroy(Request $request, $id)
    {
        $request->user()->autorizeRoles('admin');

        $cuenta = Cuenta::find($id);
        $movimientos = $cuenta->movimientos;

        if ($movimientos->count() > 0)  {

            flash('Cuenta con Movimientos. No se puede eliminar')->success();

        } else {

            $cuenta->delete();
            flash('Cuenta Eliminado Correctamente')->success();
        }


        return redirect()->route('cuentas.index'); 
    }
}
