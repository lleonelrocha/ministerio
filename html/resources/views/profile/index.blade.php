@extends('app')
@section('body')
    @include('profile.partials.menu')

    <div class="row">
        <div class="col-xs-12">
            <h2 >Perfiles de la base de datos</h2>
        </div>
    </div>

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
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        {{dd($profiles)}}

                        @foreach($profiles as $profile)
                            <tr>
                                <td>{{ $profile->id }}  </td>
                                <td>{{ $profile->name }}</td>



                                <td><a href="">View  </a></td>
                                <td><a href="">Update</a></td>
                                <td><a href="" >Delete</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

        </div>
    </div>
@endsection()