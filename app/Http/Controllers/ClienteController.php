<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Muestra la lista de clientes.
     */
    public function index(Request $request)
    {
        $perPage = $request->input('per_page', 50); // Valor por defecto: 50 registros
        $clientes = Cliente::paginate($perPage); // Usamos paginate en vez de all()
    
        return view('clientes.index', compact('clientes','perPage'));
    }




    /**
     * Muestra el formulario para crear un nuevo cliente.
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Guarda un nuevo cliente en la base de datos.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_client' => 'required|string|max:255',
            'Adress' => 'required|string',
            'phone_number' => 'required|string|max:15',
            'E-mail' => 'required|email|unique:clientes,E-mail',
            'last_purchase' => 'nullable|string',
        ]);

        Cliente::create($request->all());

        return redirect()->route('clientes.index')->with('success', 'Cliente creado correctamente.');
    }

    /**
     * Muestra los detalles de un cliente específico.
     */
    public function show(Cliente $cliente)
    {
        return view('clientes.show', compact('cliente'));
    }

    /**
     * Muestra el formulario para editar un cliente.
     */
    public function edit(Cliente $cliente)
    {
        return view('clientes.edit', compact('cliente'));
    }

    /**
     * Actualiza un cliente en la base de datos.
     */
    public function update(Request $request, Cliente $cliente)
    {
        $request->validate([
            'name_client' => 'required|string|max:255',
            'Adress' => 'required|string',
            'phone_number' => 'required|string|max:15',
            'E-mail' => 'required|email|unique:clientes,E-mail,' . $cliente->No_Cliente . ',No_Cliente',
            'last_purchase' => 'nullable|string',
        ]);

        $cliente->update($request->all());

        return redirect()->route('clientes.index')->with('success', 'Cliente actualizado correctamente.');
    }

    /**
     * Elimina un cliente de la base de datos.
     */
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route('clientes.index')->with('success', 'Cliente eliminado correctamente.');
    }
}
