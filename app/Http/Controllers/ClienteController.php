<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::all();
        
        return view('Cliente/indexCliente', ['users' => $clientes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Cliente/createCliente');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)//:RedirectResponse
    {
        $request->validate([
            'nombre' => 'required',
            'correo' => 'required|email', 
            'telefono' => ['required', 'min:10', 'max:12'],
            'direccion' => ['required', 'min:10', 'max:50'],
        ]);

        $cliente = new Cliente();
        $cliente -> nombre = $request->nombre;
        $cliente -> correo = $request->correo;
        $cliente -> telefono= $request->telefono;
        $cliente -> direccion = $request->direccion;
        $cliente->save();

        return redirect('/cliente');

    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        //
    }
}
