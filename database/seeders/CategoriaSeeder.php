<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    public function run(): void
    {
        $categorias = [
            ['nombre' => 'Laptops', 'descripcion' => 'Computadoras portatiles para todo tipo de uso'],
            ['nombre' => 'Computadoras de Escritorio', 'descripcion' => 'Equipos de escritorio armados y pre-armados'],
            ['nombre' => 'Monitores', 'descripcion' => 'Pantallas y monitores de distintas resoluciones'],
            ['nombre' => 'Procesadores', 'descripcion' => 'CPUs AMD e Intel para todo tipo de build'],
            ['nombre' => 'Tarjetas de Video', 'descripcion' => 'GPUs NVIDIA y AMD para gaming y trabajo profesional'],
            ['nombre' => 'Almacenamiento', 'descripcion' => 'Discos duros HDD, SSD y NVMe'],
            ['nombre' => 'Memorias RAM', 'descripcion' => 'Modulos de memoria RAM DDR4 y DDR5'],
            ['nombre' => 'Perifericos', 'descripcion' => 'Teclados, mouse, audifonos y accesorios'],
        ];

        foreach ($categorias as $cat) {
            Categoria::create($cat);
        }
    }
}
