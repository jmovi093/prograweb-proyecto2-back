<div class="col-md-6 col-lg-3 mb-4">
    <div class="card product-card h-100 shadow-sm">
        <img src="{{ $articulo->imagen_url ?: 'https://placehold.co/400x300/f0f2f5/999?text=Sin+Imagen' }}"
             class="card-img-top" alt="{{ $articulo->nombre }}">
        <div class="card-body d-flex flex-column">
            <span class="product-brand mb-1">{{ $articulo->marca->nombre ?? '' }}</span>
            <h6 class="product-name">{{ $articulo->nombre }}</h6>
            <small class="text-muted mb-2"><i class="bi bi-folder2 me-1"></i>{{ $articulo->categoria->nombre ?? '' }}</small>
            <div class="mt-auto">
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <span class="product-price">
                        {{ $articulo->moneda === 'Colones' ? '₡' : '$' }}{{ number_format($articulo->precio, 0, ',', '.') }}
                    </span>
                    @if($articulo->stock > 5)
                        <small class="stock-available"><i class="bi bi-check-circle-fill"></i> En stock</small>
                    @elseif($articulo->stock > 0)
                        <small class="stock-low"><i class="bi bi-exclamation-circle-fill"></i> Quedan {{ $articulo->stock }}</small>
                    @else
                        <small class="stock-out"><i class="bi bi-x-circle-fill"></i> Agotado</small>
                    @endif
                </div>
                <div class="mb-2">
                    @foreach($articulo->etiquetas->take(3) as $etiqueta)
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
                        <span class="badge {{ $badgeClass }}">{{ $etiqueta->nombre }}</span>
                    @endforeach
                </div>
                <a href="{{ route('articulos.show', $articulo) }}" class="btn btn-detail">
                    <i class="bi bi-eye me-1"></i>Ver detalle
                </a>
            </div>
        </div>
    </div>
</div>
