@extends('app')
@section('body')
    @include('partials.menu')
    <div class="row">
        <div class="col-xs-12">
            <h2 >Perfiles de la base de datos</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
        <a href="{{ route('profile_role.create') }}" class="btn btn-success">Crear nuevo profile role</a>
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
                        <th>Tipo</th>
                        <th>Roles</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($perfiles as $perfil)
                        <tr>
                            <td>{{ $perfil->id }}  </td>
                            <td>{{ $perfil->name }}
                                <td>
                                  @foreach($perfil->roles as $role)
                                     {{ $role->name }}
                                  @endforeach
                                </td>
                            <td><a href="{{ route('profile_role.edit',    [$perfil->id]) }}">Update </a></td>
                            <td><a href="{{ route('profile_role.destroy', [$perfil->id]) }}">Destroy </a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection()