<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Producto;
use App\Models\Tag;
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
        $tags = Tag::all();
        return view('Producto/createProducto', compact('tags'));
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


        //Producto::create($request->all());
        $producto = Producto::create($request->all());
        $producto->tags()->attach($request->tag_id);
        return redirect()->route('productos.index');
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

        Producto::where('id', $producto->id)->update($request->except('_token', '_method'));
        return redirect()->route('productos.index'); 
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
