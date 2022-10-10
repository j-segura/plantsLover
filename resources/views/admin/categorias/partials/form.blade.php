<div class="form-group">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, [
        'class' => 'form-control',
        'placeholder' => 'Igrese el nombre de la nueva categoria ...',
    ]) !!}

    @error('name')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, [
        'class' => 'form-control',
        'placeholder' => 'Igrese el slug de la nueva categoria ...',
        'readonly',
    ]) !!}

    @error('slug')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('name_small', 'Nombre corto:') !!}
    {!! Form::text('name_small', null, [
        'class' => 'form-control',
        'placeholder' => 'Igrese un nombre mas corto de la nueva categoria ...',
    ]) !!}

    @error('name_small')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('banner', 'Banner:') !!}
    {!! Form::file('banner', [
        'class' => 'form-control',
    ]) !!}

    @error('banner')
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
