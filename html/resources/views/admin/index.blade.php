@extends('app')

@section('body')
    @include('partials.menu')
    @include('partials.messages')
    <div class="row">
        <div class="col-xs-12">
            <h2>Usuarios de la base de datos</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6">
            {!! Form::open(['method' => 'GET']) !!}
                <div class="input-group">
                    {!! Form::text('search', Request::get('search'), ['class' => 'form-control']) !!}
                    <div class="input-group-btn">
                        <button type="submit" class="btn btn-default">Buscar</button>
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
        <div class="col-xs-6 text-right">
            <a href="{{ route('users.create') }}" class="btn btn-success">Crear nuevo usuario</a>
        </div>
    </div>

    <br class="clearfix" />

    <div class="row">
        <div class="col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover table-condensed">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Country</th>
                        <th>Name</th>
                        <th>Estado</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}       </td>
                            <td>{{ $user->first_name }}</td>
                            <td>{{ $user->last_name }} </td>
                            <td>{{ $user->name }}</td>
                            <td><a href="{{ route('users.show',   [$user->id]) }}">View  </a></td>
                            <td><a href="{{ route('users.edit', $user->id) }}">Update</a></td>
                            <td><a href="{{ route('users.destroy',[$user->id]) }}" >Delete</a></td>
                            @if( $user->estado == 'active' )
                                <td><a href="{{ route('users.desactive',[$user->id]) }}" class="btn btn-danger">Desactive</a></td>
                            @else
                                <td><a href="{{ route('users.active',[$user->id]) }}" class="btn btn-success">Active</a></td>
                            @endif
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
	</div>

    <div class="row">
        <div class="col-xs-12 text-center">
            {!! $users->appends(Request::only('search'))->render() !!}
        </div>
    </div>

@endsection()