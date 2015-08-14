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

                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Sexo</th>
                                    <th>Perfil</th>
                                    <th>Libros pedidos</th>

                                </tr>
                                </thead>
                                <tbody>

                                @foreach($usuarios as $usuario)
                                <tr>
                                    <th scope="row">{{ $usuario->id }}</th>
                                    <td>{{ $usuario->first_name }} </td>
                                    <td>{{ $usuario->sexo->nombre }} </td>
                                    <td>{{ $usuario->profile->name }} </td>
                                    <td>
                                    @foreach($usuario->libro as $l)
                                         {{ $l->nombre . ','}}
                                    @endforeach()
                                    </td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                               @endforeach()
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection()