@extends('app')
@section('body')
    @include('partials.menu')
    <div class="row">
        <div class="col-xs-12">
            <h2 >Perfiles de la base de datos</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-6">
                <div class="input-group-btn">
                    <a href="{{ route('profile_role.create') }}" class="btn btn-success" >Crear nuevo profile role</a>
                </div>
        </div>
    </div>

@endsection()