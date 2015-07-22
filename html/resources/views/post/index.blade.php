@extends('app')
@section('body')
    @include('post.partials.menu')
    @include('partials.messages')
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">

                <div class="panel-body">
                    <h3>Tus posts</h3>
                    <br class="clearfix" />
                        @foreach($posts as $post)
                            <div class="row">
                                <div class="col-xs-12 col-lg-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">{{ $post->titulo }}
                                            <a href="{{ route('posts.edit', $post->id)}}" class="glyphicon glyphicon-pencil" ></a>
                                         </div>
                                        <div class="panel-body"> {{ $post->descripcion }}
                                            <a href="{{ route('posts.destroy', $post->id)}}" class="glyphicon glyphicon-remove" ></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endforeach()
                    <br class="clearfix" />
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 text-center">
            {!! $posts->appends(Request::only('search'))->render() !!}
        </div>
    </div>



@endsection()