<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Cliente;

use App\Http\Requests\ClienteRequest;
use App\Http\Requests\UpdateClienteRequest;

use App\Mail\Welcome;
use PDF;

/*php artisan make:controller ClienteController --resource*/

class ClienteController extends Controller
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
    public function index(Request $request)
    {
        $request->user()->autorizeRoles(['admin','user']);
        $clientes = Cliente::search($request->search)->paginate(5);
        return view('clientes.indexcliente', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
        $request->user()->autorizeRoles('admin');
        return view('clientes.createcliente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClienteRequest $request)
    {
        $request->user()->autorizeRoles('admin');

        # La validación del formulario se realiza mediante
        # ClienteRequest
        
        $cliente = new cliente ($request->all());
        $cliente->save();
        
        flash('Cliente Creado Correctamente')->success();

        //Enviar correo de confirmación de alta cliente
        Mail::to('nerom24@gmail.com', 'Juan Carlos')
        ->send(new Welcome($cliente)); 

        return redirect()->route('clientes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $request->user()->autorizeRoles(['admin','user']);
        $cliente = Cliente::find($id);
        return view('clientes.showcliente',compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $request->user()->autorizeRoles('admin');
        $cliente = Cliente::find($id);
        return view('clientes.editcliente',compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClienteRequest $request, $id)
    {
        $request->user()->autorizeRoles('admin');
        $cliente = Cliente::find($id);

        $cliente->nombre = $request->nombre;
        $cliente->apellidos = $request->apellidos;
        $cliente->telefono = $request->telefono;
        $cliente->ciudad = $request->ciudad;
        $cliente->dni = $request->dni;
        $cliente->email = $request->email;
        $cliente->fechaalt = $request->fechaalt;

        $cliente->save();

        flash('Cliente Actualizado Correctamente')->success();

        return redirect()->route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $request->user()->autorizeRoles('admin');
        $cliente = Cliente::find($id);

        $cuentas = $cliente->cuentas();

        if ($cuentas->count() > 0)  {

            flash('Cliente con Cuentas Asociadas. No se puede eliminar')->success();

        } else {

            $cliente->delete();
            flash('Cliente Eliminado Correctamente')->success();
        }


        return redirect()->route('clientes.index'); 
    }

    public function generarPdf(Request $request) {

        $request->user()->autorizeRoles(['admin']);
        
        $clientes = Cliente::all();
        $pdf = PDF::loadView('clientes.pdf.clientes-pdf', ['clientes' => $clientes]);
        
         return $pdf->download('clientes-GESBANK.pdf'); 
    }

}
