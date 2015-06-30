<div class="form-group">
    <label>Nombre</label>
    {!! Form::text('firstName', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    <label>Apellido</label>
    {!! Form::text('lastName', null, ['class' => 'form-control']) !!}
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
    <label>País</label>
    {!! Form::text('country', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    <label>Estado</label>
    {!! Form::text('state', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    <label>Numero de Teléfono</label>
    {!! Form::text('phoneNumber', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    <label>Tipo</label>
    {!! Form::select('id_profile', array('1' => 'User', '2' => 'Admin'), 'User' ,['class'=>'form-control']) !!}
</div>



