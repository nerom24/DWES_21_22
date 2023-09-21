<?php

namespace App\Http\Controllers;

use App\Movimiento;
use App\Cuenta;
use App\Cliente;

use Illuminate\Http\Request;

use App\Http\Requests\CreateMovimientoRequest;

class MovimientoController extends Controller
{
    

    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $id)
    {
        $request->user()->autorizeRoles(['admin','user']);
       
        # Obtengo los movimientos de esta cuenta
        $cuenta = Cuenta::find($id);
        $movimientos = Movimiento::search($request->search)->where('cuenta_id', '=', $id)->orderBy('numMovimiento')->paginate(5);
        $cliente = $cuenta->cliente;
        return view('movimientos.indexmovimientos', compact('movimientos', 'cuenta', 'cliente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $id)
    {
       $request->user()->autorizeRoles(['admin']);

       # Obtengo los movimientos de esta cuenta
        $cuenta = Cuenta::find($id);
        $cliente = $cuenta->cliente;
        return view('movimientos.createmovimiento', compact('cuenta', 'cliente'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateMovimientoRequest $request)
    {
      
        $request->user()->autorizeRoles('admin');
        
        $cuenta = Cuenta::find($request->cuenta_id);
        $movimientos = $cuenta->movimientos;
        $ultimoMovimiento = $movimientos->last();
        
        $movimiento = new movimiento($request->all());
        
        $movimiento->numMovimiento = $ultimoMovimiento->numMovimiento +1;
        if ($request->tipo == 'I') 
            $movimiento->saldo = $request->cantidad + $ultimoMovimiento->saldo;
        else
            $movimiento->saldo = $ultimoMovimiento->saldo - $request->cantidad;
        
        $cuenta->saldo = $movimiento->saldo;
        $cuenta->save();
        $movimiento->save();
        
        flash('Movimiento Añadido Correctamente')->success();

        return redirect()->route('movimientos.index', $cuenta->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movimiento  $movimiento
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Movimiento $movimiento)
    {
        $request->user()->autorizeRoles(['admin','user']);

        $cuenta = $movimiento->cuenta;
        $cliente = $cuenta->cliente;

        return view('movimientos.showmovimiento', compact('movimiento', 'cuenta', 'cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Movimiento  $movimiento
     * @return \Illuminate\Http\Response
     */
    public function edit(Movimiento $movimiento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Movimiento  $movimiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movimiento $movimiento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movimiento  $movimiento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movimiento $movimiento)
    {
        //
    }
}
