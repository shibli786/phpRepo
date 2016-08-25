 <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Laravel
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                  
                    <li><a href="{{ url('/articles') }}">Articles</a></li>
                    @if(Auth::check())
                    <li><a href="{{ url('/articles/create') }}">Create Article</a></li>
                    <li><a href="{{ url('/myarticles') }}">My Articles</a></li>
                    <li><a href="{{ url('/connections') }}">Connections</a></li>
                    <li><a href="{{ url('/notification') }}">Notification</a></li>
                     <li><a href="{{ url('/messages') }}">Messages</a></li>
                     @endif
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/auth/login') }}">Login</a></li>
                        <li><a href="{{ url('/auth/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/users/'.Auth::user()->id)}}"><i class="fa fa-btn fa-sign-out"></i>Profile</a></li>
                              <li><a href="{{ url('/setting') }}"><i class="fa fa-btn fa-sign-out"></i>Setting</a></li>
                                <li><a href="{{ url('/auth/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>

                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>