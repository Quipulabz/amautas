<nav class="navbar navbar-inverse navbar-embossed navbar-lg" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01">
            <span class="sr-only">Toggle navigation</span>
        </button>
        <a class="navbar-brand" href="{{ URL::route('/') }}">Amautas</a>
    </div>
    <div class="collapse navbar-collapse" id="navbar-collapse-01">
        <ul class="nav navbar-nav">           
            <li class="active"><a href="#fakelink">Ofertas</a></li>
            <li><a href="#fakelink">Recomendaciones<span class="navbar-unread"></span></a></li>
            <li><a href="#fakelink">Cursos<span class="navbar-new">4</span></a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right ">
            @if(Auth::check())
            <li><a href="{{ URL::route('user/profile') }}">Perfil</a></li>
            <li><a href="{{ URL::route('user/logout') }}">Log out</a></li>
            @else
            <li class="active"><a href="{{ URL::route('user/login') }}">Log in</a></li>
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
</nav><!-- /navbar -->