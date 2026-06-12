<div class="row">
    <div class="col-md-8">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control @error('nombre') is-invalid @enderror"
                   id="nombre" name="nombre" value="{{ old('nombre', $articulo->nombre ?? '') }}" required>
            @error('nombre')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripcion</label>
            <textarea class="form-control @error('descripcion') is-invalid @enderror"
                      id="descripcion" name="descripcion" rows="4">{{ old('descripcion', $articulo->descripcion ?? '') }}</textarea>
            @error('descripcion')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="categoria_id" class="form-label">Categoria</label>
                <select class="form-select @error('categoria_id') is-invalid @enderror" id="categoria_id" name="categoria_id" required>
                    <option value="">Seleccionar...</option>
                    @foreach($categorias as $cat)
                        <option value="{{ $cat->id }}" {{ old('categoria_id', $articulo->categoria_id ?? '') == $cat->id ? 'selected' : '' }}>
                            {{ $cat->nombre }}
                        </option>
                    @endforeach
                </select>
                @error('categoria_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="marca_id" class="form-label">Marca</label>
                <select class="form-select @error('marca_id') is-invalid @enderror" id="marca_id" name="marca_id" required>
                    <option value="">Seleccionar...</option>
                    @foreach($marcas as $marca)
                        <option value="{{ $marca->id }}" {{ old('marca_id', $articulo->marca_id ?? '') == $marca->id ? 'selected' : '' }}>
                            {{ $marca->nombre }}
                        </option>
                    @endforeach
                </select>
                @error('marca_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="imagen_url" class="form-label">URL de Imagen</label>
            <input type="text" class="form-control @error('imagen_url') is-invalid @enderror"
                   id="imagen_url" name="imagen_url" value="{{ old('imagen_url', $articulo->imagen_url ?? '') }}"
                   placeholder="https://ejemplo.com/imagen.jpg">
            @error('imagen_url')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        <div class="row">
            <div class="col-md-4 mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="number" step="0.01" class="form-control @error('precio') is-invalid @enderror"
                       id="precio" name="precio" value="{{ old('precio', $articulo->precio ?? '') }}" required>
                @error('precio')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="col-md-4 mb-3">
                <label for="moneda" class="form-label">Moneda</label>
                <select class="form-select @error('moneda') is-invalid @enderror" id="moneda" name="moneda" required>
                    <option value="Colones" {{ old('moneda', $articulo->moneda ?? 'Colones') === 'Colones' ? 'selected' : '' }}>Colones</option>
                    <option value="Dolares" {{ old('moneda', $articulo->moneda ?? '') === 'Dolares' ? 'selected' : '' }}>Dolares</option>
                </select>
                @error('moneda')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="col-md-4 mb-3">
                <label for="estado" class="form-label">Estado</label>
                <select class="form-select @error('estado') is-invalid @enderror" id="estado" name="estado" required>
                    <option value="Nuevo" {{ old('estado', $articulo->estado ?? 'Nuevo') === 'Nuevo' ? 'selected' : '' }}>Nuevo</option>
                    <option value="Usado" {{ old('estado', $articulo->estado ?? '') === 'Usado' ? 'selected' : '' }}>Usado</option>
                </select>
                @error('estado')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="stock" class="form-label">Stock</label>
            <input type="number" class="form-control @error('stock') is-invalid @enderror"
                   id="stock" name="stock" value="{{ old('stock', $articulo->stock ?? 0) }}" min="0" required>
            @error('stock')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
    </div>

    <div class="col-md-4">
        <div class="mb-3">
            <label class="form-label">Etiquetas</label>
            @foreach($etiquetas as $etiqueta)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="etiquetas[]"
                           value="{{ $etiqueta->id }}" id="etiqueta_{{ $etiqueta->id }}"
                           {{ in_array($etiqueta->id, old('etiquetas', isset($articulo) ? $articulo->etiquetas->pluck('id')->toArray() : [])) ? 'checked' : '' }}>
                    <label class="form-check-label" for="etiqueta_{{ $etiqueta->id }}">
                        {{ $etiqueta->nombre }}
                    </label>
                </div>
            @endforeach
        </div>
    </div>
</div>
