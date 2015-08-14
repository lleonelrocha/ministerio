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
                                                <th>Nombre persona</th>
                                                <th>Libro</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($libros as $l)
                                                <tr>

                                                    @foreach($l->user as $user)
                                                        <td>{{ $user->first_name }}
                                                    @endforeach

                                                    <td> {{ $l->nombre }}</td>

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