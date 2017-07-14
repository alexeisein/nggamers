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
                    <li class ="{{ Request::is('/') ? "active" : "" }}" ><a href="{{ url('/') }}">Home</a></li>
                    <li class ="{{ Request::is('about') ? "active" : "" }}"><a href="{{ url('about') }}">About</a></li>
                    <li class ="{{ Request::is('contact') ? "active" : "" }}"><a href="{{ url('contact') }}">contact</a></li>
                    <li class="dropdown {{ Request::is('articles') || Request::is('articles/create') ? "active" : "" }}">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Articles
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="{{ Request::is('articles') ? "active" : "" }}">
                                <a href="{{ url('articles')}}">View Articles</a>
                            </li>
                            
                            <li class="{{ Request::is('categories') ? "active" : "" }}">
                                <a href="{{ url('categories')}}">Browse by Categories</a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown {{ Request::is('gamers') || Request::is('gamers/create') ? "active" : "" }}">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Gamers
                        <span class="caret"></span></a>
                         <ul class="dropdown-menu">
                             <li class="{{ Request::is('gamers') ? "active" : "" }}">
                                <a href="{{ url('gamers')}}">View Gamers</a>
                             </li>
                        </ul>
                    </li>
                      
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><img src="../images/{{ Auth::user()->avatar }}" style="border-radius: 50%; width: 50px; height: 50px;" id="profile_img">
                            Hi, {{ Auth::user()->username }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('user.dashboard')}}"
                                    ><span class="glyphicon glyphicon-dashboard"></span> Dashboard
                                </a>
                            </li>
                            <li class="divider" role="separator"></li>
                            <li><a href="{{route('user.profile')}}"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
                            <li class="divider" role="separator"></li>
                            <li>

                                <a href="{{ url('/logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();"><span class="glyphicon glyphicon-log-out"></span> Logout
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>

                {{-- <form class="navbar-form navbar-right">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search">
                      <div class="input-group-btn">
                        <button class="btn btn-default" type="submit">
                          <i class="glyphicon glyphicon-search"></i>
                        </button>
                      </div>
                    </div>
              </form> --}}
                
            </div>
        </div>
    </nav>

    @yield('content')
</div>