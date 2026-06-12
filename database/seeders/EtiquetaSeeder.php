<?php

namespace Database\Seeders;

use App\Models\Etiqueta;
use Illuminate\Database\Seeder;

class EtiquetaSeeder extends Seeder
{
    public function run(): void
    {
        $etiquetas = [
            'Gamer', 'Oficina', 'Profesional',
            'Estudiante', 'Alto Rendimiento', 'Economico',
        ];

        foreach ($etiquetas as $nombre) {
            Etiqueta::create(['nombre' => $nombre]);
        }
    }
}
