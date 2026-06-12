@extends('layouts.app')

@section('title', isset($query) ? 'Busqueda: ' . $query : 'Productos')

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="bi bi-house-door"></i> Inicio</a></li>
        <li class="breadcrumb-item active">{{ isset($query) ? 'Busqueda' : 'Productos' }}</li>
    </ol>
</nav>

<div class="d-flex justify-content-between align-items-center mb-4">
    @if(isset($query) && $query)
        <div>
            <h2 class="section-title mb-1">Resultados de busqueda</h2>
            <p class="text-muted">Mostrando resultados para: <strong>"{{ $query }}"</strong></p>
        </div>
    @else
        <h2 class="section-title">Todos los Productos</h2>
    @endif
    <span class="badge bg-dark rounded-pill fs-6 px-3 py-2">{{ $articulos->total() }} productos</span>
</div>

@if($articulos->isEmpty())
    <div class="text-center py-5">
        <i class="bi bi-search display-1 text-muted"></i>
        <h4 class="text-muted mt-3">No se encontraron productos</h4>
        <p class="text-muted">Intenta con otros terminos de busqueda</p>
        <a href="{{ route('articulos.index') }}" class="btn btn-search">Ver todos los productos</a>
    </div>
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
