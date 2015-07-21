<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Bienvenido: </a>
            <a class="navbar-brand" href="#"><strong>{{ Auth::user()->fullname }}</strong></a>
            <a class="navbar-brand" href="{{ route('posts.index') }}"><strong> posts</strong></a>
            <a class="navbar-brand" href="{{ route('posts.create') }}"><strong> create</strong></a>

        </div>

        <ul class="nav navbar-nav navbar-right">

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Config <span class="caret"></span></a>
                <ul class="dropdown-menu">

                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                    <li><a href="{{route('auth.logout')}}">Salir</a></li>
                </ul>
            </li>
        </ul>

    </div>
</nav>