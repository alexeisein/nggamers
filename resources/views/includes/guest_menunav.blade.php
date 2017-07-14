<div id="app">
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
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav navbar-left">
                    <li class="{{ Request::is('/') ? "active" : "" }}"><a href="{{ url('/') }}">Home</a></li>
                    <li class="{{ Request::is('about') ? "active" : "" }}"><a href="{{ url('about') }}">About</a></li>
                    <li class="{{ Request::is('contact') ? "active" : "" }}"><a href="{{ url('contact') }}">contact</a></li>
                    <li class="{{ Request::is('articles') ? "active" : "" }}"><a href="{{ url('articles')}}">Articles</a></li>
                    <li class="{{ Request::is('gamers') ? "active" : "" }}"><a href="{{ url('gamers')}}">Gamers</a></li>                   
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ ucwords(Auth::user()->email) }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <span class="glyphicon glyphicon-dashboard"></span>
                                    <a href="{{ route('user.dashboard') }}"
                                        >
                                    </a>
                                </li>
                                <li role="separator" class="divider"></li>
                                
                                <li>

                                    <a class="glyphicon glyphicon-log-out" href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>

                <form class="navbar-form navbar-right">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search">
                      <div class="input-group-btn">
                        <button class="btn btn-default" type="submit">
                          <i class="glyphicon glyphicon-search"></i>
                        </button>
                      </div>
                    </div>
              </form>
                
            </div>
        </div>
    </nav>

    @yield('content')
</div>