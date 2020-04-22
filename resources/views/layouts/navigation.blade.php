<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear">
                            <span class="block m-t-xs">

                                <strong class="font-bold">  {{ auth()->user()->name }}</strong>
                            </span> <span class="text-muted text-xs block">Menu<b class="caret"></b></span>
                        </span>
                    </a>
                    @auth

                    @if(Auth::user()->hasRole('admin'))
                      <div> Acceso como administrador</div>
                    @else
                      <div>Acceso usuario</div>
                    @endif
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();>Logout</a></li>
                        </ul>
                    @endauth

                    @guest
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="{{ route('login') }}" >Login</a></li>
                        </ul>
                    @else
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                    <li> <a href="" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" > Logout </a>
                    </li>
                    </ul>


                    @endguest
                </div>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <div class="logo-element">
                    B+
                </div>
            </li>

            @guest
                        <li>
                            <a href="{{ route('login') }}" ><i class="fa fa-th-large"></i> <span class="nav-label">Login</span></a>
                        </li>
            @endguest

            <li class="{{ isActiveRoute('post') }}">
                <a href="{{ url('/post') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Ver post</span></a>
            </li>
            <li class="{{ isActiveRoute('post.create') }}">

                <a href="{{ url('/post/create') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Create Article</span></a>
            </li>
            @if(Auth::user()->hasRole('admin'))
            <li class="{{ isActiveRoute('list') }}">
                <a href="{{ url('/list') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Administrar Post</span> </a>
            </li>
            @endif


        </ul>

    </div>
</nav>
