<?php

namespace Database\Seeders;

use App\Models\Marca;
use Illuminate\Database\Seeder;

class MarcaSeeder extends Seeder
{
    public function run(): void
    {
        $marcas = [
            ['nombre' => 'ASUS', 'sitio_web' => 'https://www.asus.com'],
            ['nombre' => 'MSI', 'sitio_web' => 'https://www.msi.com'],
            ['nombre' => 'Logitech', 'sitio_web' => 'https://www.logitech.com'],
            ['nombre' => 'Kingston', 'sitio_web' => 'https://www.kingston.com'],
            ['nombre' => 'Samsung', 'sitio_web' => 'https://www.samsung.com'],
            ['nombre' => 'AMD', 'sitio_web' => 'https://www.amd.com'],
            ['nombre' => 'Intel', 'sitio_web' => 'https://www.intel.com'],
            ['nombre' => 'Corsair', 'sitio_web' => 'https://www.corsair.com'],
            ['nombre' => 'HyperX', 'sitio_web' => 'https://www.hyperx.com'],
            ['nombre' => 'Acer', 'sitio_web' => 'https://www.acer.com'],
        ];

        foreach ($marcas as $marca) {
            Marca::create($marca);
        }
    }
}
