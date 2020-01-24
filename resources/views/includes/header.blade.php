<header class="header">
    <div class="container">
        <div class="logo">
            <a class="logo-a" href="#">
                <img src="{{ URL::asset('images/truman-partners-logo.png') }}" alt="" width="100%">
            </a>
        </div>
        <nav class="navbar navbar-expand-lg float-right">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span>Menu</span>
                    <i class="fa fa-bars"></i>
                </button>

                <div class="collapse navbar-collapse pull-right" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/apply-now">Apply now</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about">About Truman</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/services">Our Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/tru-insights">Tru Insights</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact-us">Contact Us</a>
                        </li>
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
            
        </nav>
    </div>
    
</header>
<div class="clearfix"></div>