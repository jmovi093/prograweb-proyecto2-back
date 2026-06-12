<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use App\Models\Categoria;
use App\Models\Marca;
use App\Models\Etiqueta;
use Illuminate\Http\Request;

class ArticuloController extends Controller
{
    public function index()
    {
        $articulos = Articulo::with(['categoria', 'marca', 'etiquetas'])
            ->paginate(8);
        return view('articulos.index', compact('articulos'));
    }

    public function create()
    {
        $categorias = Categoria::all();
        $marcas = Marca::all();
        $etiquetas = Etiqueta::all();
        return view('articulos.create', compact('categorias', 'marcas', 'etiquetas'));
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
        ]);

        $articulo = Articulo::create($validated);

        if ($request->has('etiquetas')) {
            $articulo->etiquetas()->sync($request->etiquetas);
        }

        return redirect()->route('articulos.show', $articulo)
            ->with('success', 'Articulo creado exitosamente.');
    }

    public function show(Articulo $articulo)
    {
        $articulo->load(['categoria', 'marca', 'etiquetas']);
        return view('articulos.show', compact('articulo'));
    }

    public function edit(Articulo $articulo)
    {
        $categorias = Categoria::all();
        $marcas = Marca::all();
        $etiquetas = Etiqueta::all();
        return view('articulos.edit', compact('articulo', 'categorias', 'marcas', 'etiquetas'));
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
        ]);

        $articulo->update($validated);
        $articulo->etiquetas()->sync($request->etiquetas ?? []);

        return redirect()->route('articulos.show', $articulo)
            ->with('success', 'Articulo actualizado exitosamente.');
    }

    public function destroy(Articulo $articulo)
    {
        $articulo->delete();
        return redirect()->route('articulos.index')
            ->with('success', 'Articulo eliminado exitosamente.');
    }

    public function buscar(Request $request)
    {
        $query = $request->input('q', '');
        $articulos = Articulo::with(['categoria', 'marca', 'etiquetas'])
            ->where('nombre', 'LIKE', "%{$query}%")
            ->orWhere('descripcion', 'LIKE', "%{$query}%")
            ->paginate(8)
            ->appends(['q' => $query]);
        return view('articulos.index', compact('articulos', 'query'));
    }
}
