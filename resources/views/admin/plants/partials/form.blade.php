<div class="form-group">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, [
        'class' => 'form-control',
        'placeholder' => 'Igrese el nombre de la nueva planta ...',
    ]) !!}

    @error('name')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, [
        'class' => 'form-control',
        'placeholder' => 'Igrese el slug de la nueva planta ...',
        'readonly',
    ]) !!}

    @error('slug')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('description', 'Descripcion:') !!}
    {!! Form::textarea('description', null, [
        'class' => 'form-control',
        'placeholder' => 'Igrese una descripcion de la nueva planta ...',
    ]) !!}

    @error('description')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('extract', 'Extract:') !!}
    {!! Form::text('extract', null, [
        'class' => 'form-control',
        'placeholder' => 'Igrese una descripcion mas corta de la nueva planta ...',
    ]) !!}

    @error('extract')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('foto', 'Foto:') !!}
    {!! Form::file('foto', [
        'class' => 'form-control',
    ]) !!}

    @error('foto')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('precio', 'Precio:') !!}
    {!! Form::number('precio', null, [
        'class' => 'form-control',
        'placeholder' => 'Igrese el precio de la nueva planta ...',
    ]) !!}

    @error('precio')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('categoria_id', 'Categoria:') !!}
    {!! Form::select('categoria_id', $categorias, null, [
        'class' => 'form-control',
    ]) !!}

    @error('categoria_id')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>


<div class="form-group">
    {!! Form::label('tamaño_id', 'Tamaño:') !!}
    {!! Form::select('tamaño_id', $tamaños, null, [
        'class' => 'form-control',
    ]) !!}

    @error('tamaño_id')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

