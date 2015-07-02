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

<div class="form-group">
    <label>Tipo</label>
    {!! Form::select('profile_id', array('1' => 'Admin', '2' => 'Super admin', '3' => 'User' ), 'User' ,['class'=>'form-control']) !!}
</div>



