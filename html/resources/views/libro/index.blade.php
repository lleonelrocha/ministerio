@extends('app')
@section('body')
    <h3>Administracion de libros</h3>

    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-body">

                    <br class="clearfix" />

                        <div class="row">
                            <div class="col-xs-12 col-lg-12">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>Codigo</th>
                                                <th>Libro</th>
                                                <th>Editorial</th>
                                                <th>Autor</th>
                                                <th>Pais autor</th>
                                                <th>Nombre</th>
                                                <th>Apellido</th>
                                                <th>Telefono</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($libros as $l)
                                            <tr>
                                                <th scope="row"> {{ $l->id }}</th>
                                                <td>{{ $l->nombre }}</td>
                                                <td>{{ $l->editorial }}</td>
                                                <td>{{ $l->autor->nombre }}</td>
                                                <td>{{ $l->autor->pais }}</td>

                                               @foreach($l->user as $u)
                                                    <td>{{ $u->first_name }}</td>
                                                    <td>{{ $u->last_name }}</td>
                                                    <td>{{ $u->phone_number }}</td>
                                                @endforeach()
                                            </tr>
                                            @endforeach()
                                            </tbody>
                                        </table>
                            </div>
                        </div>
                    <br class="clearfix" />

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">

            <div class="col-xs-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <select multiple="multiple" class="form-control" name="profile_id">
                            @foreach ($libros as $l)
                                <option value="{{ $l->id }}" > {{ $l->nombre }} </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="col-xs-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection