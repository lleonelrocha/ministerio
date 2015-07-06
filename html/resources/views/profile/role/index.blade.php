@extends('app')
@section('body')
    @include('partials.menu')
    <div class="row">
        <div class="col-xs-12">
            <h2>Roles de la base de datos</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-6">
            {!! Form::open(['route' => 'role.store',  'method' => 'POST']) !!}
            <div class="input-group">
                {!! Form::text('name', null,  ['class' => 'form-control']) !!}
                <div class="input-group-btn">
                    <button type="submit" class="btn btn-success" >Crear nuevo role</button>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>

    <br class="clearfix" />

    <div class="row">
        <div class="col-xs-6">
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
                    @foreach($roles as $role)
                        <tr>
                            <td>{{ $role->id }}  </td>
                            <td>{{ $role->name }}</td>
                            <td><a href="{{route('role.edit')}}">Update</a></td>
                            <td><a href="" >Delete</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection()