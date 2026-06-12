<?php

namespace App\Http\Controllers;

use App\Models\Categoria;

class HomeController extends Controller
{
    public function index()
    {
        $categorias = Categoria::withCount('articulos')->get();
        return view('home', compact('categorias'));
    }

    public function categoria(Categoria $categoria)
    {
        $articulos = $categoria->articulos()
            ->with(['marca', 'etiquetas'])
            ->paginate(8);
        return view('categorias.show', compact('categoria', 'articulos'));
    }
}
