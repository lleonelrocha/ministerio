@extends('app')
@section('body')
    @include('partials.menu')
    @include('partials.messages')

    <div class="row">
        <div class="col-xs-12">
            <h2 >Perfiles de la base de datos</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-6">
            {!! Form::open(['route' => 'profile.store',  'method' => 'POST']) !!}
            <div class="input-group">
                {!! Form::text('name', null,  ['class' => 'form-control']) !!}
                <div class="input-group-btn">
                    <button type="submit" class="btn btn-success" >Crear nuevo profile</button>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>

    <br class="clearfix" />

    <div clas="row">
        <div class="col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover table-condensed">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Tipo </th>
                        <th></th>
                        <th></th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($profiles as $profile)
                        <tr>
                            <td>{{ $profile->id }}  </td>
                            <td>{{ $profile->name }}</td>
                            <td><a href="{{(route('profile.edit', [$profile->id]   ))}}" >Update</a></td>
                            <td><a href="{{(route('profile.destroy',[$profile->id] ))}}" >Delete</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection()