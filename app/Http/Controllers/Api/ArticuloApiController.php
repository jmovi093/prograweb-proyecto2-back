<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Articulo;
use Illuminate\Http\Request;

class ArticuloApiController extends Controller
{
    public function index(Request $request)
    {
        $articulos = Articulo::with(['categoria', 'marca', 'etiquetas'])
            ->paginate(8);

        return response()->json($articulos);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre'       => 'required|string|max:255',
            'descripcion'  => 'nullable|string',
            'categoria_id' => 'required|exists:categorias,id',
            'marca_id'     => 'required|exists:marcas,id',
            'imagen_url'   => 'nullable|string|max:500',
            'precio'       => 'required|numeric|min:0',
            'moneda'       => 'required|in:Colones,Dolares',
            'estado'       => 'required|in:Nuevo,Usado',
            'stock'        => 'required|integer|min:0',
            'etiquetas'    => 'nullable|array',
            'etiquetas.*'  => 'exists:etiquetas,id',
        ]);

        $articulo = Articulo::create($validated);

        if (!empty($validated['etiquetas'])) {
            $articulo->etiquetas()->sync($validated['etiquetas']);
        }

        $articulo->load(['categoria', 'marca', 'etiquetas']);

        return response()->json($articulo, 201);
    }

    public function show(Articulo $articulo)
    {
        $articulo->load(['categoria', 'marca', 'etiquetas']);
        return response()->json($articulo);
    }

    public function update(Request $request, Articulo $articulo)
    {
        $validated = $request->validate([
            'nombre'       => 'required|string|max:255',
            'descripcion'  => 'nullable|string',
            'categoria_id' => 'required|exists:categorias,id',
            'marca_id'     => 'required|exists:marcas,id',
            'imagen_url'   => 'nullable|string|max:500',
            'precio'       => 'required|numeric|min:0',
            'moneda'       => 'required|in:Colones,Dolares',
            'estado'       => 'required|in:Nuevo,Usado',
            'stock'        => 'required|integer|min:0',
            'etiquetas'    => 'nullable|array',
            'etiquetas.*'  => 'exists:etiquetas,id',
        ]);

        $articulo->update($validated);
        $articulo->etiquetas()->sync($validated['etiquetas'] ?? []);
        $articulo->load(['categoria', 'marca', 'etiquetas']);

        return response()->json($articulo);
    }

    public function destroy(Articulo $articulo)
    {
        $articulo->delete();
        return response()->json(['message' => 'Articulo eliminado exitosamente.']);
    }

    public function buscar(Request $request)
    {
        $query = $request->input('q', '');

        $articulos = Articulo::with(['categoria', 'marca', 'etiquetas'])
            ->where('nombre', 'LIKE', "%{$query}%")
            ->orWhere('descripcion', 'LIKE', "%{$query}%")
            ->paginate(8)
            ->appends(['q' => $query]);

        return response()->json($articulos);
    }
}
