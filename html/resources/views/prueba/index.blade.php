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
                                <div class="panel panel-default">

                                    {!! Form::open(['route' => 'prueba.store', 'method' => 'POST']) !!}

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
                                            {!! Form::text('email',null, [ 'class' => 'form-control' ]) !!}
                                        </div>

                                        <div class="form-group">
                                            <label>Password</label>
                                            {!! Form::password('password', [ 'class' => 'form-control' ]) !!}
                                        </div>


                                        {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}

                                    {!! Form::close() !!}

                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <div id="getRequestData"></div>


    <script type="text/javascript">
        /*   $(document).ready(function(){
                $('#getRequest').click(function(){
                    $.get('getRequest', function(data){
                       $('#getRequestData').append(data);
                        console.log(data);
                    });
                });
           }) ;

           */
    </script>

@endsection()