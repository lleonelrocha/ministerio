<div class="form-group">
    <label>Nombre</label>
    {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    <label>Apellido</label>
    {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    <label>Email</label>
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    <label>Contraseña</label>
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    <label>Numero de Teléfono</label>
    {!! Form::text('phone_number', null, ['class' => 'form-control']) !!}
</div>

<select multiple="multiple" class="form-control" name="sexo_id">
    @foreach($sexo as $s)
        <option value="{{ $s->id }}" >{{ $s->nombre }}</option>
    @endforeach()
</select>




