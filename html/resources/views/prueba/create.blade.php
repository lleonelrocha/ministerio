{!! Form::open(['route' => 'prueba.edit', 'method' => 'POST', 'class'=>'form' ]) !!}

<div class="form-group">
    <label>Nombre</label>
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    <label>Apellido</label>
    {!! Form::text('apellido',null, [ 'class' => 'form-control' ]) !!}
</div>

<div class="form-group">
    <label>Web</label>
    {!! Form::text('web',null, [ 'class' => 'form-control' ]) !!}
</div>

<div class="form-group">
    <label>Email</label>
    {!! Form::text('search',null, [ 'class' => 'form-control' ]) !!}
</div>

<div class="form-group">
    <label>Password</label>
    {!! Form::password('password', [ 'class' => 'form-control' ]) !!}
</div>


{!! Form::submit('Guardar', ['class' => 'btn btn-primary', 'id'=> 'enviar' ]) !!}

{!! Form::close() !!}




{!! Form::open(array('url'=>'account/login','method'=>'POST', 'id'=>'myform')) !!}
<div class="control-group">
    <div class="controls">
        {!! Form::text('email','',array('id'=>'','class'=>'form-control span6','placeholder' => 'Email')) !!}
    </div>
</div>
<div class="control-group">
    <div class="controls">
        {!! Form::password('password',array('class'=>'form-control span6', 'placeholder' => 'Please Enter your Password')) !!}
    </div>
</div>
{!! Form::button('Login', array('class'=>'send-btn')) !!}
{!! Form::close() !!}