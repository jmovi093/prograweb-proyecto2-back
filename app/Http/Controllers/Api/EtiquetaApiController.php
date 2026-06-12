<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Etiqueta;

class EtiquetaApiController extends Controller
{
    public function index()
    {
        return response()->json(Etiqueta::all());
    }
}
