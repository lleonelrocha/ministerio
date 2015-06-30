@extends('app')
@section('body')
    @include('post.partials.menu')

    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3>Tus imagenes subidas</h3>
                    <br class="clearfix" />
                        <div class="row">
                            <div class="col-xs-12 col-lg-4">
                                <img src="http://lorempixel.com/400/200/" class="img-thumbnail">
                            </div>

                            <div class="col-xs-12 col-lg-4">
                                <img src="http://lorempixel.com/400/200/" class="img-thumbnail">
                            </div>

                            <div class="col-xs-12 col-lg-4">
                                <img src="http://lorempixel.com/400/200/" class="img-thumbnail">
                            </div>

                            <div class="col-xs-12 col-lg-4">
                                <img src="http://lorempixel.com/400/200/" class="img-thumbnail">
                            </div>

                            <div class="col-xs-12 col-lg-4">
                                <img src="http://lorempixel.com/400/200/" class="img-thumbnail">
                            </div>

                            <div class="col-xs-12 col-lg-4">
                                <img src="http://lorempixel.com/400/200/" class="img-thumbnail">
                            </div>
                        </div>
                </div>
            </div>

        </div>
    </div>
@endsection()