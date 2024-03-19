<?php

namespace App\Http\Controllers;

use App\Models\producto;
use Illuminate\Http\Request;


class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos['productos'] = producto::paginate(5);
        return view('producto.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('producto/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $campos = [
            'nombre' => 'required|string|max:10',
            'descripcion' => 'required|string',
            'precio' => 'required|numeric',
            'referencia' => 'required|string|max:10'
        ];

        $mensaje = [
            'required' => ':attribute es obligatorio'
        ];
        $request->validate($campos, $mensaje);

        $datos = request()->except("_token");
        $datos['uid'] = uniqid();
        producto::insert($datos);
        return redirect('producto');
    }

    /**
     * Display the specified resource.
     */
    public function show(producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($producto)
    {
        $datos['producto'] = producto::find($producto);
        return view('producto.edit', $datos);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $campos = [
            'nombre' => 'required|string|max:10',
            'descripcion' => 'required|string',
            'precio' => 'required|numeric',
            'referencia' => 'required|string|max:10'
        ];

        $mensaje = [
            'required' => ':attribute es obligatorio'
        ];
        $request->validate($campos, $mensaje);
        
        $datos = request()->except('_token', '_method');
        producto::where('id', $id)->update($datos);
        return redirect('producto');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($producto)
    {
        producto::where('id', $producto)->delete();
        return redirect('producto');
    }
}
