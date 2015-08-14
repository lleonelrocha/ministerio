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
        <div class="col-xs-3 text-right">
            <a href="{{ route('users.create') }}" class="btn btn-success">Crear nuevo usuario</a>
        </div>
        <div class="col-xs-3 ">
            <a href="" class="btn btn-success" id="agregar" >Agregar</a>
        </div>
    </div>

    <br class="clearfix" />

    <div class="row">
        <div class="col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover table-condensed">
                    <thead>
                    <tr>
                        <th></th>
                        <th>Fullname</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Tipo</th>
                        <th>Sexo</th>
                        <th></th>
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
                            <td> {{ $user->fullname }}</td>

                            <td> {{ $user->first_name }} </td>
                            <td>{{ $user->last_name }} </td>
                            <td>{{ $user->profile->name }}</td>
                            <td>{{ $user->sexo->nombre }}</td>
                            <td><a href="{{ route('users.show',   [$user->id] ) }}">View  </a></td>
                            <td><a href="{{ route('users.edit', $user->id) }}">Update</a></td>
                            <td><a href="{{ route('users.destroy',[$user->id]) }}" >Delete</a></td>
                            <td><button type="button" class="btn btn-primary" id="verModalId" data-toggle="modal" data-target="#verModal" data-nombre="{{ $user->first_name }}" data-segundo="{{ $user->last_name }}" data-email="{{ $user->email }}" data-phone="{{ $user->phone_number }}">Ver</button></td>
                            <!-- <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                                 Launch demo modal
                             </button>
                             -->
                        @if( $user->estado == '0' )
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
    @include('admin.partials.modal')
@endsection()

@section('js')
    <script type="text/javascript" src="{{ asset('js/envioModal.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/agregar.js') }}"</script>
@endsection