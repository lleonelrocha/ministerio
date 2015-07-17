@extends('app')
@section('body')
    @include('partials.menu')
    @include('partials.messages')

    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-12 col-lg-8">
                            <div class="row">
                                <div class="col-xs-6">
                                    {!! Form::model($profile, ['route' => ['profile.update', $profile->id], 'method' => 'PUT']) !!}
                                    <div class="input-group">
                                        {!! Form::text('name', null,  ['class' => 'form-control']) !!}
                                        <div class="input-group-btn">
                                            <button type="submit" class="btn btn-success" >Editar</button>
                                        </div>
                                    </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()