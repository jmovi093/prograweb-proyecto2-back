@extends('layouts.app')

@section('title', $categoria->nombre)

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="bi bi-house-door"></i> Inicio</a></li>
        <li class="breadcrumb-item active">{{ $categoria->nombre }}</li>
    </ol>
</nav>

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="section-title mb-1">{{ $categoria->nombre }}</h2>
        <p class="text-muted">{{ $categoria->descripcion }}</p>
    </div>
    <span class="badge bg-dark rounded-pill fs-6 px-3 py-2">{{ $articulos->total() }} productos</span>
</div>

@if($articulos->isEmpty())
    <div class="alert alert-info"><i class="bi bi-info-circle me-2"></i>No hay productos en esta categoria.</div>
@else
    <div class="row">
        @foreach($articulos as $articulo)
            @include('partials._producto-card', ['articulo' => $articulo])
        @endforeach
    </div>
    <div class="d-flex justify-content-center mt-3">
        {{ $articulos->links() }}
    </div>
@endif
@endsection
