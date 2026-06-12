<?php

namespace Database\Seeders;

use App\Models\Articulo;
use App\Models\Categoria;
use App\Models\Marca;
use App\Models\Etiqueta;
use Illuminate\Database\Seeder;

class ArticuloSeeder extends Seeder
{
    public function run(): void
    {
        $categorias = Categoria::pluck('id', 'nombre');
        $marcas = Marca::pluck('id', 'nombre');
        $etiquetas = Etiqueta::pluck('id', 'nombre');

        $productos = [
            // ── Laptops (5) ──
            [
                'nombre' => 'ASUS ROG Strix G16',
                'descripcion' => 'Laptop gaming con Intel Core i7-13650HX, RTX 4060, 16GB RAM DDR5, 512GB SSD NVMe, pantalla 16 pulgadas 165Hz. Teclado RGB per-key, WiFi 6E, sistema de refrigeracion avanzado con doble ventilador.',
                'categoria' => 'Laptops', 'marca' => 'ASUS', 'precio' => 899000, 'estado' => 'Nuevo', 'stock' => 8,
                'imagen_url' => 'https://extremetechcr.com/wp-content/uploads/2024/11/36687.jpg',
                'etiquetas' => ['Gamer', 'Alto Rendimiento'],
            ],
            [
                'nombre' => 'MSI Katana 15',
                'descripcion' => 'Laptop gaming con Intel Core i5-13420H, RTX 4050, 8GB RAM DDR5, 512GB SSD, pantalla 15.6 pulgadas 144Hz IPS. Diseno robusto con iluminacion LED roja en teclado.',
                'categoria' => 'Laptops', 'marca' => 'MSI', 'precio' => 650000, 'estado' => 'Nuevo', 'stock' => 12,
                'imagen_url' => 'https://img.pacifiko.com/PROD/resize/1/500x500/MTU2YjdjYm.jpg',
                'etiquetas' => ['Gamer', 'Estudiante'],
            ],
            [
                'nombre' => 'Acer Aspire 5',
                'descripcion' => 'Laptop de oficina con AMD Ryzen 5 7530U, 8GB RAM, 256GB SSD, pantalla 15.6 pulgadas Full HD IPS. Ideal para productividad, bateria de larga duracion hasta 8 horas.',
                'categoria' => 'Laptops', 'marca' => 'Acer', 'precio' => 375000, 'estado' => 'Nuevo', 'stock' => 15,
                'imagen_url' => 'https://m.media-amazon.com/images/I/71sesDsw95L._SY500_.jpg',
                'etiquetas' => ['Oficina', 'Estudiante', 'Economico'],
            ],
            [
                'nombre' => 'ASUS VivoBook 15',
                'descripcion' => 'Laptop ultradelgada con Intel Core i3-1215U, 8GB RAM, 512GB SSD, pantalla 15.6 pulgadas FHD. Cuerpo metalico, lector de huellas, carga rapida.',
                'categoria' => 'Laptops', 'marca' => 'ASUS', 'precio' => 320000, 'estado' => 'Nuevo', 'stock' => 20,
                'imagen_url' => 'https://extremetechcr.com/wp-content/uploads/2024/11/32034.jpg',
                'etiquetas' => ['Oficina', 'Economico'],
            ],
            [
                'nombre' => 'MSI Creator M16',
                'descripcion' => 'Laptop para creadores con Intel Core i7-13700H, RTX 4060, 16GB RAM, 1TB SSD, pantalla 16 pulgadas QHD+ 100% DCI-P3. Certificada CalMAN, ideal para diseno grafico y video.',
                'categoria' => 'Laptops', 'marca' => 'MSI', 'precio' => 1100000, 'estado' => 'Nuevo', 'stock' => 5,
                'imagen_url' => 'https://m.media-amazon.com/images/I/61Rx8JzS6sL._AC_UF894,1000_QL80_.jpg',
                'etiquetas' => ['Profesional', 'Alto Rendimiento'],
            ],

            // ── Computadoras de Escritorio (4) ──
            [
                'nombre' => 'PC Gamer Ryzen 7 + RTX 4070',
                'descripcion' => 'Computadora armada con AMD Ryzen 7 7800X3D, RTX 4070 12GB, 32GB RAM DDR5, 1TB NVMe, fuente 700W 80+ Bronze. Case con panel de vidrio templado y ventiladores ARGB.',
                'categoria' => 'Computadoras de Escritorio', 'marca' => 'AMD', 'precio' => 1250000, 'estado' => 'Nuevo', 'stock' => 4,
                'imagen_url' => 'https://cdn.shopify.com/s/files/1/0437/8358/5942/files/1fb8eeaf-6739-43a0-8cc2-80f7f967d1b0.png?v=1704387928',
                'etiquetas' => ['Gamer', 'Alto Rendimiento'],
            ],
            [
                'nombre' => 'PC Oficina Intel i5',
                'descripcion' => 'Computadora de escritorio Intel Core i5-13400, 16GB RAM DDR4, 512GB SSD, graficos integrados Intel UHD 730. Ideal para trabajo de oficina y multitarea.',
                'categoria' => 'Computadoras de Escritorio', 'marca' => 'Intel', 'precio' => 420000, 'estado' => 'Nuevo', 'stock' => 10,
                'imagen_url' => 'https://mercury.vtexassets.com/arquivos/ids/12794007/image-4ec18a509a5f405bace495322618fa06.jpg?v=638210898052200000',
                'etiquetas' => ['Oficina'],
            ],
            [
                'nombre' => 'PC Gamer Intel i7 + RTX 4060',
                'descripcion' => 'Computadora gaming con Intel Core i7-14700F, RTX 4060 8GB, 16GB DDR5, 512GB NVMe. Refrigeracion liquida AIO 240mm, case mid-tower con flujo de aire optimizado.',
                'categoria' => 'Computadoras de Escritorio', 'marca' => 'Intel', 'precio' => 950000, 'estado' => 'Nuevo', 'stock' => 6,
                'imagen_url' => 'https://www.xtremepc.com.mx/cdn/shop/files/48c55899-de7d-411b-8682-bcdf2f485152_800x.png?v=1732220308',
                'etiquetas' => ['Gamer'],
            ],
            [
                'nombre' => 'PC Basica AMD Ryzen 3',
                'descripcion' => 'Computadora economica AMD Ryzen 3 4100, 8GB RAM, 256GB SSD, ideal para tareas basicas de oficina, navegacion web y estudio.',
                'categoria' => 'Computadoras de Escritorio', 'marca' => 'AMD', 'precio' => 265000, 'estado' => 'Nuevo', 'stock' => 15,
                'imagen_url' => 'https://pcracing.pro/wp-content/uploads/2024/10/gti_negra_principal_disipador-1.jpg',
                'etiquetas' => ['Economico', 'Estudiante'],
            ],

            // ── Monitores (4) ──
            [
                'nombre' => 'ASUS TUF Gaming VG27AQ1A',
                'descripcion' => 'Monitor gaming 27 pulgadas WQHD 2560x1440, 170Hz, 1ms GTG, panel IPS, HDR10, compatible G-Sync, tecnologia ELMB Sync para mayor claridad en movimiento.',
                'categoria' => 'Monitores', 'marca' => 'ASUS', 'precio' => 285000, 'estado' => 'Nuevo', 'stock' => 9,
                'imagen_url' => 'https://extremetechcr.com/wp-content/uploads/2024/11/14421.jpg',
                'etiquetas' => ['Gamer'],
            ],
            [
                'nombre' => 'Samsung Odyssey G5 27',
                'descripcion' => 'Monitor curvo gaming 27 pulgadas QHD 2560x1440, 165Hz, 1ms MPRT, panel VA, HDR10, FreeSync Premium. Curvatura 1000R para mayor inmersion.',
                'categoria' => 'Monitores', 'marca' => 'Samsung', 'precio' => 235000, 'estado' => 'Nuevo', 'stock' => 7,
                'imagen_url' => 'https://img.pacifiko.com/PROD/resize/1/500x500/NDY3NjNhZj.jpg',
                'etiquetas' => ['Gamer'],
            ],
            [
                'nombre' => 'Acer Nitro XV240Y',
                'descripcion' => 'Monitor gaming 24 pulgadas Full HD 1920x1080, 165Hz, 0.5ms VRB, panel IPS, FreeSync Premium, 99% sRGB. Soporte ajustable en altura y pivotable.',
                'categoria' => 'Monitores', 'marca' => 'Acer', 'precio' => 145000, 'estado' => 'Nuevo', 'stock' => 14,
                'imagen_url' => 'https://m.media-amazon.com/images/I/71Yq1xrtnGL.jpg',
                'etiquetas' => ['Gamer', 'Economico'],
            ],
            [
                'nombre' => 'Samsung ViewFinity S6 27',
                'descripcion' => 'Monitor profesional 27 pulgadas QHD 2560x1440, 75Hz, panel IPS, 99% sRGB, USB-C con carga de 90W, ajuste ergonomico completo.',
                'categoria' => 'Monitores', 'marca' => 'Samsung', 'precio' => 210000, 'estado' => 'Nuevo', 'stock' => 8,
                'imagen_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQY_H4KiTIy0t79tGF4DNqcgxRyWiPeGPs2Kw&s',
                'etiquetas' => ['Profesional', 'Oficina'],
            ],

            // ── Procesadores (4) ──
            [
                'nombre' => 'AMD Ryzen 7 7800X3D',
                'descripcion' => 'Procesador gaming AM5, 8 nucleos, 16 hilos, 4.2GHz base / 5.0GHz boost, 96MB L3 3D V-Cache. El mejor procesador para gaming en su generacion, TDP 120W.',
                'categoria' => 'Procesadores', 'marca' => 'AMD', 'precio' => 310000, 'estado' => 'Nuevo', 'stock' => 10,
                'imagen_url' => 'https://m.media-amazon.com/images/I/51HqC0rU9HL._SY500_.jpg',
                'etiquetas' => ['Gamer', 'Alto Rendimiento'],
            ],
            [
                'nombre' => 'Intel Core i5-14600KF',
                'descripcion' => 'Procesador LGA1700, 14 nucleos (6P+8E), 20 hilos, 3.5GHz base / 5.3GHz boost, sin graficos integrados. Excelente relacion rendimiento-precio para gaming y productividad.',
                'categoria' => 'Procesadores', 'marca' => 'Intel', 'precio' => 225000, 'estado' => 'Nuevo', 'stock' => 12,
                'imagen_url' => 'https://extremetechcr.com/wp-content/uploads/2024/11/30771.jpg',
                'etiquetas' => ['Gamer'],
            ],
            [
                'nombre' => 'AMD Ryzen 5 5600',
                'descripcion' => 'Procesador AM4, 6 nucleos, 12 hilos, 3.5GHz base / 4.4GHz boost, 32MB L3 cache. Incluye cooler Wraith Stealth, excelente opcion economica para builds gaming.',
                'categoria' => 'Procesadores', 'marca' => 'AMD', 'precio' => 95000, 'estado' => 'Nuevo', 'stock' => 18,
                'imagen_url' => 'https://extremetechcr.com/wp-content/uploads/2024/11/20222.jpg',
                'etiquetas' => ['Economico', 'Estudiante'],
            ],
            [
                'nombre' => 'Intel Core i9-14900K',
                'descripcion' => 'Procesador tope de linea LGA1700, 24 nucleos (8P+16E), 32 hilos, 3.2GHz base / 6.0GHz boost, 36MB cache. Rendimiento extremo para creacion de contenido y gaming 4K.',
                'categoria' => 'Procesadores', 'marca' => 'Intel', 'precio' => 475000, 'estado' => 'Nuevo', 'stock' => 4,
                'imagen_url' => 'https://images-na.ssl-images-amazon.com/images/I/61My4F2-XUL._AC_UL495_SR435,495_.jpg',
                'etiquetas' => ['Alto Rendimiento', 'Profesional'],
            ],

            // ── Tarjetas de Video (4) ──
            [
                'nombre' => 'MSI GeForce RTX 4070 Ventus 3X',
                'descripcion' => 'Tarjeta grafica 12GB GDDR6X, DLSS 3, Ray Tracing, triple ventilador TORX 5.0, reloj boost 2475MHz. Ideal para gaming 1440p a maxima calidad.',
                'categoria' => 'Tarjetas de Video', 'marca' => 'MSI', 'precio' => 520000, 'estado' => 'Nuevo', 'stock' => 6,
                'imagen_url' => 'https://extremetechcr.com/wp-content/uploads/2024/11/30979.jpg',
                'etiquetas' => ['Gamer', 'Alto Rendimiento'],
            ],
            [
                'nombre' => 'ASUS Dual RTX 4060 OC',
                'descripcion' => 'Tarjeta grafica 8GB GDDR6, DLSS 3, Ray Tracing, doble ventilador Axial-tech, consumo 115W. Perfecta para gaming 1080p con bajo consumo energetico.',
                'categoria' => 'Tarjetas de Video', 'marca' => 'ASUS', 'precio' => 325000, 'estado' => 'Nuevo', 'stock' => 9,
                'imagen_url' => 'https://m.media-amazon.com/images/I/81dC199GL6L._SY500_.jpg',
                'etiquetas' => ['Gamer'],
            ],
            [
                'nombre' => 'MSI GeForce RTX 4060 Ti Gaming X',
                'descripcion' => 'Tarjeta grafica 8GB GDDR6, DLSS 3, doble ventilador TORX 5.0, RGB Mystic Light, backplate reforzada. Rendimiento superior en 1080p y 1440p.',
                'categoria' => 'Tarjetas de Video', 'marca' => 'MSI', 'precio' => 410000, 'estado' => 'Nuevo', 'stock' => 5,
                'imagen_url' => 'https://cyberteamcr.com/wp-content/uploads/2024/07/49_4000.webp',
                'etiquetas' => ['Gamer', 'Alto Rendimiento'],
            ],
            [
                'nombre' => 'ASUS TUF Gaming RTX 4080 Super',
                'descripcion' => 'Tarjeta grafica 16GB GDDR6X, triple ventilador Axial-tech, GPU Tweak III, TDP 320W. Rendimiento extremo para gaming 4K y creacion de contenido profesional.',
                'categoria' => 'Tarjetas de Video', 'marca' => 'ASUS', 'precio' => 950000, 'estado' => 'Nuevo', 'stock' => 3,
                'imagen_url' => 'https://extremetechcr.com/wp-content/uploads/2024/11/34569.jpg',
                'etiquetas' => ['Gamer', 'Alto Rendimiento', 'Profesional'],
            ],

            // ── Almacenamiento (4) ──
            [
                'nombre' => 'Kingston NV2 1TB NVMe',
                'descripcion' => 'SSD NVMe M.2 2280, 1TB, lectura hasta 3500MB/s, escritura 2100MB/s, interfaz PCIe 4.0 x4. Compacto y eficiente, sin necesidad de disipador.',
                'categoria' => 'Almacenamiento', 'marca' => 'Kingston', 'precio' => 52000, 'estado' => 'Nuevo', 'stock' => 25,
                'imagen_url' => 'https://extremetechcr.com/wp-content/uploads/2024/11/22143.jpg',
                'etiquetas' => ['Economico'],
            ],
            [
                'nombre' => 'Samsung 990 Pro 2TB',
                'descripcion' => 'SSD NVMe M.2 2280, 2TB, lectura 7450MB/s, escritura 6900MB/s, PCIe 4.0, con disipador incluido. Rendimiento profesional para edicion de video y gaming.',
                'categoria' => 'Almacenamiento', 'marca' => 'Samsung', 'precio' => 175000, 'estado' => 'Nuevo', 'stock' => 8,
                'imagen_url' => 'https://m.media-amazon.com/images/I/61D9foQdhDL._SY500_.jpg',
                'etiquetas' => ['Alto Rendimiento', 'Profesional'],
            ],
            [
                'nombre' => 'Kingston A400 480GB SATA',
                'descripcion' => 'SSD SATA 2.5 pulgadas, 480GB, lectura 500MB/s, escritura 450MB/s. Ideal para upgrade de laptop o PC antigua, mejora drastica respecto a HDD.',
                'categoria' => 'Almacenamiento', 'marca' => 'Kingston', 'precio' => 28000, 'estado' => 'Nuevo', 'stock' => 30,
                'imagen_url' => 'https://www.intelec.co.cr/wp-content/uploads/2020/12/SA400S37480-1000x1000.jpg.webp',
                'etiquetas' => ['Economico', 'Estudiante'],
            ],
            [
                'nombre' => 'Samsung 870 EVO 1TB',
                'descripcion' => 'SSD SATA 2.5 pulgadas, 1TB, lectura 560MB/s, escritura 530MB/s, tecnologia V-NAND. Fiabilidad excepcional con garantia de 5 anos.',
                'categoria' => 'Almacenamiento', 'marca' => 'Samsung', 'precio' => 72000, 'estado' => 'Nuevo', 'stock' => 12,
                'imagen_url' => 'https://www.tiendamia.cr/_next/image?url=https%3A%2F%2Fm.media-amazon.com%2Fimages%2FI%2F41auWtBRGgL._AC_UY218_.jpg&w=3840&q=50',
                'etiquetas' => ['Oficina'],
            ],

            // ── Memorias RAM (4) ──
            [
                'nombre' => 'Corsair Vengeance DDR5 32GB (2x16GB)',
                'descripcion' => 'Kit de memoria DDR5 5600MHz, 32GB (2x16GB), CL36, XMP 3.0, perfiles Intel y AMD EXPO. Disipador de aluminio de bajo perfil.',
                'categoria' => 'Memorias RAM', 'marca' => 'Corsair', 'precio' => 98000, 'estado' => 'Nuevo', 'stock' => 10,
                'imagen_url' => 'https://m.media-amazon.com/images/I/61D2DDpDITL._SY500_.jpg',
                'etiquetas' => ['Gamer', 'Alto Rendimiento'],
            ],
            [
                'nombre' => 'Kingston Fury Beast DDR4 16GB (2x8GB)',
                'descripcion' => 'Kit de memoria DDR4 3200MHz, 16GB (2x8GB), CL16, perfiles XMP, disipador de calor de aluminio negro. Plug N Play auto-overclocking.',
                'categoria' => 'Memorias RAM', 'marca' => 'Kingston', 'precio' => 38000, 'estado' => 'Nuevo', 'stock' => 20,
                'imagen_url' => 'https://www.intelec.co.cr/wp-content/uploads/2023/08/KF436C18BBA.jpg.webp',
                'etiquetas' => ['Gamer', 'Economico'],
            ],
            [
                'nombre' => 'Corsair Vengeance DDR4 8GB',
                'descripcion' => 'Modulo de memoria DDR4 3200MHz, 8GB, CL16, diseno de bajo perfil. Ideal para upgrade basico de sistema, compatible con la mayoria de placas madre.',
                'categoria' => 'Memorias RAM', 'marca' => 'Corsair', 'precio' => 19000, 'estado' => 'Nuevo', 'stock' => 25,
                'imagen_url' => 'https://extremetechcr.com/wp-content/uploads/2024/11/8865.jpg',
                'etiquetas' => ['Economico', 'Estudiante'],
            ],
            [
                'nombre' => 'HyperX Fury DDR5 16GB',
                'descripcion' => 'Modulo de memoria DDR5 4800MHz, 16GB, CL40, disipador de aluminio negro de perfil bajo. Rendimiento estable y fiable para builds DDR5.',
                'categoria' => 'Memorias RAM', 'marca' => 'HyperX', 'precio' => 55000, 'estado' => 'Nuevo', 'stock' => 14,
                'imagen_url' => 'https://extremetechcr.com/wp-content/uploads/2024/11/24613.jpg',
                'etiquetas' => ['Gamer'],
            ],

            // ── Perifericos (5) ──
            [
                'nombre' => 'Logitech G502 HERO',
                'descripcion' => 'Mouse gaming con sensor HERO 25K, 25600 DPI, 11 botones programables, iluminacion RGB LIGHTSYNC, sistema de pesas ajustables, cable trenzado.',
                'categoria' => 'Perifericos', 'marca' => 'Logitech', 'precio' => 42000, 'estado' => 'Nuevo', 'stock' => 15,
                'imagen_url' => 'https://www.intelec.co.cr/wp-content/uploads/2020/03/G502-LIGHTSPEED.jpg',
                'etiquetas' => ['Gamer'],
            ],
            [
                'nombre' => 'Corsair K70 RGB Pro',
                'descripcion' => 'Teclado mecanico gaming full-size, switches Cherry MX Red, retroiluminacion RGB por tecla, reposamuñecas magnetico acolchado, estructura de aluminio anodizado.',
                'categoria' => 'Perifericos', 'marca' => 'Corsair', 'precio' => 95000, 'estado' => 'Nuevo', 'stock' => 7,
                'imagen_url' => 'https://m.media-amazon.com/images/I/71Cy-uweiJL._AC_SL1500_.jpg',
                'etiquetas' => ['Gamer', 'Alto Rendimiento'],
            ],
            [
                'nombre' => 'HyperX Cloud III',
                'descripcion' => 'Audifonos gaming over-ear con microfono desmontable, sonido DTS Spatial Audio, almohadillas de espuma viscoelastica, cable con controles en linea, driver 53mm.',
                'categoria' => 'Perifericos', 'marca' => 'HyperX', 'precio' => 65000, 'estado' => 'Nuevo', 'stock' => 11,
                'imagen_url' => 'https://extremetechcr.com/wp-content/uploads/2024/11/34905.jpg',
                'etiquetas' => ['Gamer'],
            ],
            [
                'nombre' => 'Logitech MX Keys S',
                'descripcion' => 'Teclado inalambrico premium con retroiluminacion inteligente, Bluetooth y receptor USB Logi Bolt, multi-dispositivo hasta 3 equipos, teclas esfericas de perfil bajo.',
                'categoria' => 'Perifericos', 'marca' => 'Logitech', 'precio' => 78000, 'estado' => 'Nuevo', 'stock' => 9,
                'imagen_url' => 'https://www.intelec.co.cr/wp-content/uploads/2024/06/920-011561.jpg.webp',
                'etiquetas' => ['Oficina', 'Profesional'],
            ],
            [
                'nombre' => 'Logitech G305 Lightspeed',
                'descripcion' => 'Mouse inalambrico gaming, sensor HERO 12K, 12000 DPI, 6 botones, tecnologia LIGHTSPEED 1ms, bateria AA con hasta 250 horas de duracion. Ultraligero 99g.',
                'categoria' => 'Perifericos', 'marca' => 'Logitech', 'precio' => 35000, 'estado' => 'Nuevo', 'stock' => 18,
                'imagen_url' => 'https://www.intelec.co.cr/wp-content/uploads/2025/01/910-006012-1000x1000.jpg.webp',
                'etiquetas' => ['Gamer', 'Economico'],
            ],
        ];

        foreach ($productos as $prod) {
            $articulo = Articulo::create([
                'categoria_id' => $categorias[$prod['categoria']],
                'marca_id' => $marcas[$prod['marca']],
                'nombre' => $prod['nombre'],
                'descripcion' => $prod['descripcion'],
                'imagen_url' => $prod['imagen_url'],
                'precio' => $prod['precio'],
                'moneda' => 'Colones',
                'estado' => $prod['estado'],
                'stock' => $prod['stock'],
            ]);

            $tagIds = collect($prod['etiquetas'])->map(fn($t) => $etiquetas[$t])->toArray();
            $articulo->etiquetas()->attach($tagIds);
        }
    }
}
