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
        
        return view('Cliente/indexCliente', ['clientes' => $clientes]);
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
            'nombre' => ['required', 'min:2'],
            'correo' => 'required|email', 
            'telefono' => ['required', 'min:10', 'max:12'],
            'direccion' => ['required', 'min:10', 'max:50'],
        ]);

        Cliente::create($request->all());

            return redirect()->route('cliente.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        return view('Cliente/showCliente', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        return view('Cliente/editCliente', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        $validated = $request->validate([
            'nombre' => ['required', 'min:2'],
            'correo' => 'required|email', 
            'telefono' => ['required', 'min:10', 'max:12'],
            'direccion' => ['required', 'min:10', 'max:50'],
        ]);

        Cliente::where('id', $cliente->id)->update($request->except('_token', '_method'));

            return redirect()->route('cliente.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route('cliente.index');
    }
}
