<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $fillable = [
        'categoria_id', 'marca_id', 'nombre', 'descripcion',
        'imagen_url', 'precio', 'moneda', 'estado', 'stock',
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function marca()
    {
        return $this->belongsTo(Marca::class);
    }

    public function etiquetas()
    {
        return $this->belongsToMany(Etiqueta::class, 'articulo_etiqueta');
    }
}
