@extends('layouts.app')

@section('title', 'Editar: ' . $articulo->nombre)

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="bi bi-house-door"></i> Inicio</a></li>
        <li class="breadcrumb-item"><a href="{{ route('articulos.index') }}">Productos</a></li>
        <li class="breadcrumb-item"><a href="{{ route('articulos.show', $articulo) }}">{{ $articulo->nombre }}</a></li>
        <li class="breadcrumb-item active">Editar</li>
    </ol>
</nav>

<div class="bg-white rounded-4 shadow-sm p-4">
    <h2 class="section-title"><i class="bi bi-pencil me-2"></i>Editar Producto</h2>

    <form action="{{ route('articulos.update', $articulo) }}" method="POST">
        @csrf
        @method('PUT')
        @include('articulos._form')
        <hr>
        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-warning px-4"><i class="bi bi-check-lg me-1"></i>Actualizar</button>
            <a href="{{ route('articulos.show', $articulo) }}" class="btn btn-outline-secondary px-4">Cancelar</a>
        </div>
    </form>
</div>
@endsection
