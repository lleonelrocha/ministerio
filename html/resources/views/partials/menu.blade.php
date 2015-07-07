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


            <a class="navbar-brand" href="#"><strong>{{ Auth::user()->fullname }}</strong></a>

            <a class="navbar-brand" href="{{route('users.index')}}">usuarios</a>

            @if(Auth::user()->profile_id == 3)
                <a class="navbar-brand" href="{{route('profile.index')}}">perfiles</a>
                <a class="navbar-brand" href="{{route('role.index')}}">roles</a>

                <a class="navbar-brand" href="{{route('profile.profile_role')}}">perfiles_roles</a>


            @endif
        </div>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{route('auth.logout')}}">Salir</a></li>
            </ul>

    </div>
</nav>