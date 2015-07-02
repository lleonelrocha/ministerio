<div class="row">
    <div class="col-xs-6">
        {!! Form::open(['method' => 'GET']) !!}
        <div class="input-group">
            {!! Form::text('name', null,  ['class' => 'form-control']) !!}
            <div class="input-group-btn">
                <button type="submit" class="btn btn-success" >Crear nuevo admin</button>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>

<br class="clearfix" />

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
                </tr>
                </thead>
                <tbody>
                @foreach($profiles as $profile)
                    <tr>
                        <td>{{ $profile->id }}  </td>
                        <td>{{ $profile->name }}</td>
                        <td><a href="">Update</a></td>
                        <td><a href="" >Delete</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>