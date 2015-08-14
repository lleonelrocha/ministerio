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

                            Código: <input type="number" id="codigo"  class="form-control" >
                            <br>
                            <button id="ajaxBtn" class="btn-success">Traer Datos de la película</button><br>
                            <br>
                            Titulo: <input type="text" id="nombre"  class="form-control" ><br>
                            Género: <input type="text" id="genero"  class="form-control" ><br>
                            Precio: <input type="text" id="precio"  class="form-control" ><br>
                            Descripción: <textarea id="descripcion"  class="form-control" ></textarea>

                        </div>

                        <div id="respuesta"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!--
    ajax js
    -->
    <script type="text/javascript" src="{{ asset('js/ajax-hora.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/ajax.js') }}"></script>
@endsection()

