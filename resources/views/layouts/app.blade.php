<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'CompuStore CR') - Tienda de Computadoras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        :root {
            --cs-primary: #0d6efd;
            --cs-dark: #0a0f1a;
            --cs-darker: #060a12;
            --cs-accent: #00d4ff;
            --cs-surface: #f0f2f5;
        }

        body {
            background-color: var(--cs-surface);
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Top bar */
        .top-bar {
            background-color: var(--cs-darker);
            color: #8a8f98;
            font-size: 0.8rem;
            padding: 6px 0;
        }
        .top-bar a { color: var(--cs-accent); text-decoration: none; }

        /* Navbar */
        .navbar {
            background: var(--cs-dark);
            padding: 0.8rem 0;
            box-shadow: 0 2px 20px rgba(0,0,0,0.3);
        }
        .navbar-brand {
            font-size: 1.5rem;
            font-weight: 800;
            letter-spacing: -0.5px;
            color: #fff !important;
        }
        .navbar-brand span { color: var(--cs-accent); }
        .nav-link {
            color: rgba(255,255,255,0.8) !important;
            font-weight: 500;
            padding: 0.5rem 1rem !important;
            border-radius: 6px;
            transition: all 0.2s;
        }
        .nav-link:hover, .nav-link.active {
            color: #fff !important;
            background: rgba(255,255,255,0.1);
        }
        .search-box {
            background: rgba(255,255,255,0.1);
            border: 1px solid rgba(255,255,255,0.15);
            border-radius: 8px;
            color: #fff;
            padding: 0.5rem 1rem;
            width: 280px;
            transition: all 0.3s;
        }
        .search-box:focus {
            background: rgba(255,255,255,0.15);
            border-color: var(--cs-accent);
            color: #fff;
            box-shadow: 0 0 0 3px rgba(0,212,255,0.15);
        }
        .search-box::placeholder { color: rgba(255,255,255,0.4); }
        .btn-search {
            background: var(--cs-accent);
            color: var(--cs-dark);
            border: none;
            font-weight: 600;
            border-radius: 8px;
            padding: 0.5rem 1.2rem;
        }
        .btn-search:hover { background: #00bde0; color: var(--cs-dark); }

        /* Hero */
        .hero-section {
            background: linear-gradient(135deg, var(--cs-dark) 0%, #0f1b33 50%, #0d2847 100%);
            color: white;
            padding: 4rem 0;
            position: relative;
            overflow: hidden;
        }
        .hero-section::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -20%;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(0,212,255,0.08) 0%, transparent 70%);
            border-radius: 50%;
        }
        .hero-section h1 { font-size: 2.8rem; font-weight: 800; letter-spacing: -1px; }
        .hero-section .lead { color: rgba(255,255,255,0.7); font-size: 1.15rem; }

        /* Cards */
        .product-card {
            border: none;
            border-radius: 12px;
            overflow: hidden;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            background: #fff;
        }
        .product-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 40px rgba(0,0,0,0.12);
        }
        .product-card .card-img-top {
            height: 220px;
            object-fit: contain;
            padding: 1rem;
            background: #fafbfc;
        }
        .product-card .card-body { padding: 1.2rem; }
        .product-card .product-name {
            font-weight: 700;
            font-size: 0.95rem;
            color: #1a1a2e;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            min-height: 2.8em;
        }
        .product-card .product-brand {
            font-size: 0.78rem;
            color: #6c757d;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-weight: 600;
        }
        .product-card .product-price {
            font-size: 1.2rem;
            font-weight: 800;
            color: #0d6efd;
        }
        .product-card .btn-detail {
            background: var(--cs-dark);
            color: #fff;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            font-size: 0.85rem;
            padding: 0.5rem 1rem;
            width: 100%;
            transition: all 0.2s;
        }
        .product-card .btn-detail:hover {
            background: var(--cs-accent);
            color: var(--cs-dark);
        }

        /* Category cards */
        .category-card {
            border: none;
            border-radius: 12px;
            overflow: hidden;
            transition: all 0.3s;
            background: #fff;
            position: relative;
        }
        .category-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        .category-card .cat-icon {
            width: 60px;
            height: 60px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.6rem;
            margin: 0 auto 1rem;
        }
        .category-card .cat-count {
            background: var(--cs-surface);
            color: var(--cs-dark);
            font-weight: 700;
            font-size: 0.8rem;
            padding: 0.3rem 0.8rem;
            border-radius: 20px;
        }

        /* Badges */
        .badge { font-weight: 600; font-size: 0.7rem; letter-spacing: 0.3px; }
        .badge-gamer { background: linear-gradient(135deg, #e74c3c, #c0392b); }
        .badge-oficina { background: linear-gradient(135deg, #3498db, #2980b9); }
        .badge-profesional { background: linear-gradient(135deg, #9b59b6, #8e44ad); }
        .badge-estudiante { background: linear-gradient(135deg, #2ecc71, #27ae60); }
        .badge-alto { background: linear-gradient(135deg, #f39c12, #e67e22); }
        .badge-economico { background: linear-gradient(135deg, #1abc9c, #16a085); }

        /* Detail page */
        .detail-image-container {
            background: #fff;
            border-radius: 16px;
            padding: 2rem;
            text-align: center;
        }
        .detail-image-container img {
            max-height: 400px;
            object-fit: contain;
        }
        .detail-info { padding: 0 1rem; }
        .detail-info h2 { font-weight: 800; color: var(--cs-dark); }
        .detail-price {
            font-size: 2rem;
            font-weight: 800;
            color: #0d6efd;
        }
        .spec-item {
            display: flex;
            align-items: center;
            padding: 0.6rem 0;
            border-bottom: 1px solid #eee;
        }
        .spec-item i { color: var(--cs-accent); margin-right: 0.8rem; font-size: 1.1rem; }
        .spec-label { color: #6c757d; font-size: 0.85rem; min-width: 100px; }
        .spec-value { font-weight: 600; color: var(--cs-dark); }

        /* Breadcrumb */
        .breadcrumb { background: transparent; padding: 0; font-size: 0.85rem; }
        .breadcrumb-item a { color: var(--cs-primary); text-decoration: none; }

        /* Footer */
        footer {
            background: var(--cs-dark);
            color: rgba(255,255,255,0.5);
            padding: 2rem 0;
            margin-top: auto;
        }
        footer a { color: var(--cs-accent); text-decoration: none; }

        /* Form */
        .form-control:focus, .form-select:focus {
            border-color: var(--cs-accent);
            box-shadow: 0 0 0 3px rgba(0,212,255,0.15);
        }

        /* Section titles */
        .section-title {
            font-weight: 800;
            color: var(--cs-dark);
            position: relative;
            padding-bottom: 0.8rem;
            margin-bottom: 1.5rem;
        }
        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 4px;
            background: var(--cs-accent);
            border-radius: 2px;
        }

        /* Stock badge */
        .stock-available { color: #27ae60; }
        .stock-low { color: #e67e22; }
        .stock-out { color: #e74c3c; }
    </style>
</head>
<body>
    <div class="top-bar d-none d-lg-block">
        <div class="container d-flex justify-content-between">
            <span><i class="bi bi-geo-alt me-1"></i> Costa Rica | Tienda de Computadoras</span>
            <span><i class="bi bi-telephone me-1"></i> (506) 2222-3333 | <a href="#">soporte@compustore.cr</a></span>
        </div>
    </div>

    @include('partials._navbar')

    <main class="flex-grow-1">
        <div class="container py-4">
            @include('partials._flash-messages')
            @yield('content')
        </div>
    </main>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3 mb-md-0">
                    <h6 class="text-white fw-bold">Compu<span style="color: var(--cs-accent)">Store</span> CR</h6>
                    <p class="small mb-0">Tu tienda de confianza en tecnologia y computadoras en Costa Rica.</p>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <h6 class="text-white fw-bold">Enlaces</h6>
                    <ul class="list-unstyled small mb-0">
                        <li><a href="{{ route('home') }}">Inicio</a></li>
                        <li><a href="{{ route('articulos.index') }}">Productos</a></li>
                        <li><a href="{{ route('articulos.create') }}">Nuevo Producto</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h6 class="text-white fw-bold">Proyecto</h6>
                    <p class="small mb-0">Proyecto 1 - Programacion Web<br>Universidad Nacional de Costa Rica<br>&copy; {{ date('Y') }}</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
