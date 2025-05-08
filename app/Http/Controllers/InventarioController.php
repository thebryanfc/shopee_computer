<?php

namespace App\Http\Controllers;

use App\Models\Inventario;
use Illuminate\Http\Request;

class InventarioController extends Controller
{
    public function index(Request $request)
    {
        $perPage = $request->input('per_page', 50); // Valor por defecto: 50 registros
        $inventarios = Inventario::paginate($perPage); // Usamos paginate en vez de all()
    
        return view('inventarios.index', compact('inventarios','perPage'));
    }

    public function create()
    {
        return view('inventarios.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_product' => 'required',
            'existencias' => 'required|integer',
            'precio' => 'required|numeric',
        ]);

        Inventario::create($request->all());
        return redirect()->route('inventarios.index')->with('success', 'Producto creado correctamente.');
    }

    public function show(Inventario $inventario)
    {
        return view('inventarios.show', compact('inventario'));
    }

    public function edit(Inventario $inventario)
    {
        return view('inventarios.edit', compact('inventario'));
    }

    public function update(Request $request, Inventario $inventario)
    {
        $request->validate([
            'name_product' => 'required',
            'existencias' => 'required|integer',
            'precio' => 'required|numeric',
        ]);

        $inventario->update($request->all());
        return redirect()->route('inventarios.index')->with('success', 'Producto actualizado correctamente.');
    }

    public function destroy(Inventario $inventario)
    {
        $inventario->delete();
        return redirect()->route('inventarios.index')->with('success', 'Producto eliminado correctamente.');
    }
}
