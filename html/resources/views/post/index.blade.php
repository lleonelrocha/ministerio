@extends('app')
@section('body')
    @include('post.partials.menu')

    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3>Tus posts</h3>
                    <br class="clearfix" />

                        @foreach($posts as $post)
                            <div class="row">
                                <div class="col-xs-12 col-lg-12">
                                    <blockquote>
                                        <p> {{ $post->descripcion }}
                                        </p>
                                        <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                    </blockquote>
                                </div>
                            </div>
                        @endforeach()
                    <br class="clearfix" />

                </div>
            </div>
        </div>
    </div>
@endsection()