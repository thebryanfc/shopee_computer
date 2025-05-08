<?php

namespace App\Http\Controllers;

use App\Models\Inventario;
use App\Models\Cliente;
use Illuminate\Http\Request;

class EstadisticasController extends Controller
{
    /**
     * Muestra las estadísticas.
     */
    public function index()
    {
        // Filtrar productos con 0 y 2 existencias
        $productosSinExistencias = Inventario::where('existencias', 0)->get();
        $productosConDosExistencias = Inventario::where('existencias', 2)->get();

        // Filtrar clientes con última compra mayor a $10,000
        $clientesConCompraMayor = Cliente::where('last_purchase', '>', 10000)->get();

        return view('estadisticas.index', compact('productosSinExistencias', 'productosConDosExistencias', 'clientesConCompraMayor'));
    }
}
