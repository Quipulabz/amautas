
<nav class="navbar navbar-inverse navbar-embossed navbar-lg" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
        </button>
        <a class="navbar-brand" href="{{ URL::route('/') }}">Amautas</a>
    </div>
    <div class="collapse navbar-collapse" id="navbar-collapse">
        <ul class="nav navbar-nav">
            <li {{ preg_match('/empleos/', Route::currentRouteName()) ? 'class="active"' : '' }}>
                <a href="{{ URL::route('empleos.index') }}">Empleos<span class="navbar-new">4</span></a>
            </li>
            <li>
                <a href="#fakelink">Recomendaciones<span class="navbar-unread"></span></a>
            </li>
            <li>
                <a href="#fakelink">Cursos</a>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right ">
            @if(Auth::check())
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->username }}<span class="caret"></span>
                    </a>
                    <span class="dropdown-arrow dropdown-arrow-inverse"></span>
                    <ul class="dropdown-menu">
                        <li {{ preg_match('/user/', Route::currentRouteName()) ? 'class="active"' : '' }}>
                            <a href="{{ URL::route('user.profile') }}">Perfil</a>
                        </li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ URL::route('user.logout') }}">Salir</a></li>
                    </ul>
                </li>
            @else
                <li {{ preg_match('/user/', Route::currentRouteName()) ? 'class="active"' : '' }}><a href="{{ URL::route('user.login') }}">Ingresar</a></li>
            @endif
        </ul>
    </div><!-- /.navbar-collapse -->
</nav><!-- /navbar -->
