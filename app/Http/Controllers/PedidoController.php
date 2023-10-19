<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pedidos = Pedido::all();
        return view('pedido.indexPedido', compact('pedidos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes = Cliente::all();
        return view('pedido.createPedido', compact('clientes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pedido = new Pedido();
        $pedido->cliente_id = $request->cliente_id;
        $pedido->identificador = $request->identificador;
        $pedido->total = $request->total;
        $pedido->envio = $request->envio;
        $pedido->terminos = $request->terminos;
        $pedido->save();


        /*FORMA 2 DE GUARDAR, NO JALO
        
        $pedido = new Pedido();
        $pedido->identificador = $request->identificador;
        $pedido->total = $request->total;
        $pedido->envio = $request->envio;
        $pedido->terminos = $request->terminos;


        $cliente = Cliente::find($request->cliente_id);
        $cliente->pedidos()->save($pedido); */

        return redirect()->route('cliente.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Pedido $pedido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pedido $pedido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pedido $pedido)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pedido $pedido)
    {
        //
    }
}
