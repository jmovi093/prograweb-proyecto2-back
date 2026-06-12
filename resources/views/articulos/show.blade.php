@extends('layouts.app')

@section('title', $articulo->nombre)

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="bi bi-house-door"></i> Inicio</a></li>
        <li class="breadcrumb-item"><a href="{{ route('categorias.show', $articulo->categoria) }}">{{ $articulo->categoria->nombre }}</a></li>
        <li class="breadcrumb-item active">{{ $articulo->nombre }}</li>
    </ol>
</nav>

<div class="row g-4">
    <div class="col-lg-5">
        <div class="detail-image-container shadow-sm">
            <img src="{{ $articulo->imagen_url ?: 'https://placehold.co/500x400/f0f2f5/999?text=Sin+Imagen' }}"
                 class="img-fluid" alt="{{ $articulo->nombre }}">
        </div>
    </div>
    <div class="col-lg-7">
        <div class="detail-info">
            <span class="product-brand d-block mb-1" style="font-size:0.85rem;">{{ $articulo->marca->nombre }}</span>
            <h2 class="mb-3">{{ $articulo->nombre }}</h2>

            <div class="detail-price mb-3">
                {{ $articulo->moneda === 'Colones' ? '₡' : '$' }}{{ number_format($articulo->precio, 0, ',', '.') }}
                <small class="text-muted fs-6 fw-normal">{{ $articulo->moneda }}</small>
            </div>

            <div class="mb-4">
                <span class="badge {{ $articulo->estado === 'Nuevo' ? 'bg-primary' : 'bg-secondary' }} me-1 px-3 py-2">
                    {{ $articulo->estado }}
                </span>
                @if($articulo->stock > 5)
                    <span class="badge bg-success px-3 py-2"><i class="bi bi-check-circle me-1"></i>En stock ({{ $articulo->stock }})</span>
                @elseif($articulo->stock > 0)
                    <span class="badge bg-warning text-dark px-3 py-2"><i class="bi bi-exclamation-circle me-1"></i>Quedan {{ $articulo->stock }}</span>
                @else
                    <span class="badge bg-danger px-3 py-2"><i class="bi bi-x-circle me-1"></i>Agotado</span>
                @endif
            </div>

            @if($articulo->etiquetas->isNotEmpty())
                <div class="mb-4">
                    @foreach($articulo->etiquetas as $etiqueta)
                        @php
                            $badgeClass = match($etiqueta->nombre) {
                                'Gamer' => 'badge-gamer',
                                'Oficina' => 'badge-oficina',
                                'Profesional' => 'badge-profesional',
                                'Estudiante' => 'badge-estudiante',
                                'Alto Rendimiento' => 'badge-alto',
                                'Economico' => 'badge-economico',
                                default => 'bg-dark',
                            };
                        @endphp
                        <span class="badge {{ $badgeClass }} px-3 py-2">{{ $etiqueta->nombre }}</span>
                    @endforeach
                </div>
            @endif

            <div class="bg-white rounded-3 p-3 shadow-sm mb-4">
                <div class="spec-item">
                    <i class="bi bi-folder2"></i>
                    <span class="spec-label">Categoria</span>
                    <a href="{{ route('categorias.show', $articulo->categoria) }}" class="spec-value text-decoration-none">{{ $articulo->categoria->nombre }}</a>
                </div>
                <div class="spec-item">
                    <i class="bi bi-building"></i>
                    <span class="spec-label">Marca</span>
                    <span class="spec-value">
                        {{ $articulo->marca->nombre }}
                        @if($articulo->marca->sitio_web)
                            <a href="{{ $articulo->marca->sitio_web }}" target="_blank" class="ms-1 text-muted"><i class="bi bi-box-arrow-up-right"></i></a>
                        @endif
                    </span>
                </div>
                <div class="spec-item">
                    <i class="bi bi-cash-stack"></i>
                    <span class="spec-label">Moneda</span>
                    <span class="spec-value">{{ $articulo->moneda }}</span>
                </div>
                <div class="spec-item border-0">
                    <i class="bi bi-stars"></i>
                    <span class="spec-label">Estado</span>
                    <span class="spec-value">{{ $articulo->estado }}</span>
                </div>
            </div>

            <div class="mb-4">
                <h5 class="fw-bold"><i class="bi bi-card-text me-2"></i>Descripcion</h5>
                <p class="text-muted">{{ $articulo->descripcion ?: 'Sin descripcion disponible.' }}</p>
            </div>

            <div class="d-flex gap-2 flex-wrap">
                <a href="{{ route('articulos.edit', $articulo) }}" class="btn btn-warning px-4">
                    <i class="bi bi-pencil me-1"></i>Editar
                </a>
                <form action="{{ route('articulos.destroy', $articulo) }}" method="POST"
                      onsubmit="return confirm('¿Esta seguro de eliminar este producto?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger px-4">
                        <i class="bi bi-trash me-1"></i>Eliminar
                    </button>
                </form>
                <a href="{{ route('articulos.index') }}" class="btn btn-outline-secondary px-4">
                    <i class="bi bi-arrow-left me-1"></i>Volver
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
