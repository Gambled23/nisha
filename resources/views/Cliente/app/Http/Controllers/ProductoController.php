<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $producto = Producto::all();

        return view('Producto/indexProducto', ['productos' => $producto]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Producto/createProducto');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => ['required', 'min:2', 'max:50'],
            'informacion' => ['required', 'min:5', 'max:50'], 
            'precio' => 'required|numeric', 
            'disponible' => 'required|boolean'
        ]);

        try{
        $producto = new Producto();
        $producto -> nombre = $request->nombre;
        $producto -> informacion = $request->informacion;
        $producto -> precio= $request->precio;
        $producto -> disponible = $request->disponible;
        $producto->save();

        return redirect('/productos');
        }
        catch (\Exception $e){
            return redirect()->route('productos.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        return view('Producto/showProducto', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        return view('Producto/editProducto', compact('producto'));  
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        
        $validated = $request->validate([
            'nombre' => ['required', 'min:2', 'max:50'],
            'informacion' => ['required', 'min:5', 'max:50'], 
            'precio' => 'required|numeric', 
            'disponible' => 'required|boolean'
        ]);

        try{
        $producto -> nombre = $request->nombre;
        $producto -> informacion = $request->informacion;
        $producto -> precio= $request->precio;
        $producto -> disponible = $request->disponible;
        $producto->save();

        return redirect()->route('productos.index');
        }
        catch (\Exception $e) {
            return redirect()->route('productos.index'); 
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('productos.index');
    }
}
