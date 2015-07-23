@extends('app')
@section('body')
    @include('post.partials.menu')
    @include('partials.messages')


    <br class="clearfix" />

    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3>Tus posts</h3>

                    <br class="clearfix" />

                        <div class="row">
                            <div class="col-xs-12 col-lg-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        {{ $post->titulo }}
                                    </div>
                                    <div class="panel-body">
                                        {{ $post->descripcion }}
                                    </div>
                                </div>
                            </div>
                        </div>

                    <br class="clearfix" />

                    <h3>Comentar</h3>
                    <div class="row">
                        <div class="col-xs-12" >
                            {!! Form::open(['route' => 'posts.comentarioStore', 'method' => 'POST']) !!}
                                <div class="col-xs-2">
                                    <div class="form-group">
                                        {!! Form::text('nombre',null, [ 'class' => 'form-control','placeholder'=>'Nombre' ]) !!}
                                    </div>
                                </div>

                                <div class="col-xs-2">
                                    <div class="form-group">
                                        {!! Form::text('apellido',null, [ 'class' => 'form-control','placeholder'=>'Apellido' ]) !!}
                                    </div>
                                </div>

                            <div class="col-xs-6">
                                <div class="form-group">
                                        {!! Form::text('texto',null, [ 'class' => 'form-control','placeholder'=>'Su mensaje' ]) !!}
                                </div>
                            </div>

                            <div class="col-xs-2">
                                <div class="form-group">
                                        {!! Form::hidden('post_id', $post->id ) !!}
                                        {!! Form::submit('Comentar', ['class' => 'btn btn-default']) !!}
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>

                    <br class="clearfix" />
                    <hr/>
                    <div class="row">
                        <div class="col-xs-12">
                            @foreach($comentarios as $comentario)
                                 <blockquote>
                                    <p>{{ $comentario->texto    }}</p>
                                    <p>
                                       <small>{{ $comentario->apellido . ', ' .$comentario->nombre }}</small>
                                       <small class="text-right">{{ $comentario->created_at }}</small>
                                    </p>
                                </blockquote>
                             @endforeach()
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection()