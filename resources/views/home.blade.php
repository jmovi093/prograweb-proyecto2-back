@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
<div class="hero-section text-center rounded-4 mb-5">
    <div class="container position-relative">
        <h1>Compu<span style="color: var(--cs-accent)">Store</span> CR</h1>
        <p class="lead mb-4">Los mejores componentes y equipos de computo en Costa Rica</p>
        <a href="{{ route('articulos.index') }}" class="btn btn-search btn-lg px-4">
            <i class="bi bi-grid me-2"></i>Ver todos los productos
        </a>
    </div>
</div>

<h2 class="section-title">Nuestras Categorias</h2>
<div class="row">
    @php
        $icons = [
            'Laptops' => ['bi-laptop', '#e3f2fd', '#1565c0'],
            'Computadoras de Escritorio' => ['bi-pc-display', '#fce4ec', '#c62828'],
            'Monitores' => ['bi-display', '#e8f5e9', '#2e7d32'],
            'Procesadores' => ['bi-cpu', '#fff3e0', '#e65100'],
            'Tarjetas de Video' => ['bi-gpu-card', '#f3e5f5', '#6a1b9a'],
            'Almacenamiento' => ['bi-device-hdd', '#e0f7fa', '#00838f'],
            'Memorias RAM' => ['bi-memory', '#fce4ec', '#ad1457'],
            'Perifericos' => ['bi-keyboard', '#f1f8e9', '#558b2f'],
        ];
    @endphp
    @foreach($categorias as $categoria)
        @php
            $icon = $icons[$categoria->nombre] ?? ['bi-folder', '#f5f5f5', '#424242'];
        @endphp
        <div class="col-md-6 col-lg-3 mb-4">
            <a href="{{ route('categorias.show', $categoria) }}" class="text-decoration-none">
                <div class="card category-card h-100 shadow-sm text-center p-4">
                    <div class="cat-icon" style="background: {{ $icon[1] }}; color: {{ $icon[2] }};">
                        <i class="bi {{ $icon[0] }}"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2">{{ $categoria->nombre }}</h5>
                    <p class="text-muted small mb-3">{{ $categoria->descripcion }}</p>
                    <span class="cat-count mx-auto">{{ $categoria->articulos_count }} productos</span>
                </div>
            </a>
        </div>
    @endforeach
</div>
@endsection
