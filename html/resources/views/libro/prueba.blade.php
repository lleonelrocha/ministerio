@extends('app')
@section('body')
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-body">

                    <br class="clearfix" />
                    <div class="row">
                        <div class="col-xs-12 col-lg-12">
                            <p>If you click on me, I will disappear.</p>
                            <p>Click me away!</p>
                            <p>Click me too!</p>

                            <div class="ocultar">ocultar</div>
                        </div>
                    </div>
                    <br class="clearfix" />
                </div>
            </div>
        </div>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("p").click(function(){
                $(this).hide();
            });

            $(".ocultar").click(function(){
                $(this).hide();
            });

        });
    </script>
@endsection