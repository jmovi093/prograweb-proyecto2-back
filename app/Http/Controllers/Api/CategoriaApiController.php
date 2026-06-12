<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Categoria;

class CategoriaApiController extends Controller
{
    public function index()
    {
        $categorias = Categoria::withCount('articulos')->get();
        return response()->json($categorias);
    }

    public function show(Categoria $categoria)
    {
        $articulos = $categoria->articulos()
            ->with(['categoria', 'marca', 'etiquetas'])
            ->paginate(8);

        return response()->json([
            'categoria' => $categoria,
            'articulos' => $articulos,
        ]);
    }
}
