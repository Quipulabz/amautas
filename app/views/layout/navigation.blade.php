<nav class="navbar navbar-static-top navbar-inverse navbar-embossed navbar-lg" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01">
                <span class="sr-only">Toggle navigation</span>
            </button>
            <a class="navbar-brand" href="{{ URL::route('/') }}">Amautas</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse-01">
            <ul class="nav navbar-nav">
                <li {{ preg_match('/empleos/', Route::currentRouteName()) ? 'class="active"' : '' }}>
                    <a href="{{ URL::route('empleos.index') }}">Empleos<span class="navbar-new">4</span></a>
                </li>
                <li {{ Route::currentRouteName() == 'recomendaciones.index' ? 'class="active"' : '' }}>
                    <a href="#fakelink">Recomendaciones<span class="navbar-unread"></span></a>
                </li>
                <li {{ Route::currentRouteName() == 'cursos.index' ? 'class="active"' : '' }}>
                    <a href="#fakelink">Cursos</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right ">
                @if(Auth::check())
                    <li {{ preg_match('/user/', Route::currentRouteName()) ? 'class="active"' : '' }}><a href="{{ URL::route('user.profile') }}">Perfil</a></li>
                    <li><a href="{{ URL::route('user.logout') }}">Log out</a></li>
                @else
                    <li {{ preg_match('/user/', Route::currentRouteName()) ? 'class="active"' : '' }}><a href="{{ URL::route('user.login') }}">Log in</a></li>
                @endif
            </ul>
            <!-- <form class="navbar-form navbar-right" action="#" role="search">
                <div class="form-group">
                    <div class="input-group">
                        <input class="form-control" id="navbarInput-01" type="search" placeholder="Search">
                        <span class="input-group-btn">
                            <button type="submit" class="btn"><span class="fui-search"></span></button>
                        </span>
                    </div>
                </div>
            </form> -->
        </div><!-- /.navbar-collapse -->
    </div>
</nav><!-- /navbar -->