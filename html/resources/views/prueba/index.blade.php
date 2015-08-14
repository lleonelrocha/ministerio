@extends('app')
@section('body')
    @include('partials.messages')

    <br class="clearfix" />
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-body">

                    <br class="clearfix" />
                        <div class="row">
                            <div class="col-xs-12 col-lg-12">
                                    {!! Form::open(['route' => 'prueba.edit', 'method' => 'POST', 'class'=>'form' ]) !!}
                                        <div class="form-group">
                                            <label>Email</label>
                                            {!! Form::text('email',null, [ 'class' => 'form-control' ]) !!}
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            {!! Form::password('password', [ 'class' => 'form-control' ]) !!}
                                        </div>
                                        {!! Form::submit('Guardar', ['class' => 'btn btn-primary', 'id'=> 'enviar', 'class'=>'send-btn' ]) !!}
                                    {!! Form::close() !!}
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <div id="getRequestData"></div>
    <script type="text/javascript" language="javascript"></script>
@endsection()